import domReady from '@wordpress/dom-ready';

/**
 * Otwieraj rozszerzony edytor ACF po kliknięciu w blok.
 *
 * ACF nie ma na to ustawienia — jego własny auto-open odpala się wyłącznie przy
 * błędach walidacji. Klikamy więc programowo ten sam przycisk, który redaktor
 * klikałby ręcznie.
 *
 * Ustaw na false, żeby wrócić do otwierania ołówkiem.
 */
const AUTO_OPEN_EXPANDED_EDITOR = true;

domReady(() => {
  const openAcfBlockInspector = () => {
    const blockEditor = wp.data.select('core/block-editor');
    const clientId = blockEditor.getSelectedBlockClientId();
    const block = clientId ? blockEditor.getBlock(clientId) : null;

    if (!block?.name?.startsWith('acf/')) {
      return;
    }

    const interfaceStore = wp.data.select('core/interface');

    if (interfaceStore.getActiveComplementaryArea('core') !== 'edit-post/block') {
      wp.data.dispatch('core/interface').enableComplementaryArea('core', 'edit-post/block');
    }
  };

  wp.data.subscribe(openAcfBlockInspector);
  openAcfBlockInspector();

  if (!AUTO_OPEN_EXPANDED_EDITOR) {
    return;
  }

  const isAcfBlockSelected = () => {
    const blockEditor = wp.data.select('core/block-editor');
    const clientId = blockEditor.getSelectedBlockClientId();

    return Boolean(clientId && blockEditor.getBlock(clientId)?.name?.startsWith('acf/'));
  };

  /**
   * Przycisk rozszerzonego edytora. W pasku narzędzi ACF renderuje go jako
   * ToolbarButton z etykietą "Edit Block" (tłumaczoną), bez własnej klasy —
   * dlatego szukamy po aria-label, a w zapasie mamy przycisk z panelu bocznego,
   * który ma stabilną klasę.
   */
  const findExpandedEditorButton = () => {
    const label = window.acf?.__?.('Edit Block');

    if (label) {
      const toolbarButton = Array.from(
        document.querySelectorAll('.block-editor-block-toolbar button')
      ).find((button) => button.getAttribute('aria-label') === label);

      if (toolbarButton) {
        return toolbarButton;
      }
    }

    return document.querySelector('.acf-blocks-open-expanded-editor-btn');
  };

  const canvasDocument = () =>
    document.querySelector('iframe[name="editor-canvas"]')?.contentDocument ?? null;

  /**
   * Czy rozszerzony edytor jest już otwarty.
   *
   * Bez tego kliknięcie w overlay zamykające modal wyzwalałoby jego ponowne
   * otwarcie — overlay leży w obrębie bloku, więc łapie go nasłuch niżej.
   */
  const isModalOpen = () =>
    Boolean(
      document.querySelector('.acf-block-form-modal') ||
        canvasDocument()?.querySelector('.acf-block-form-modal')
    );

  // Jeden aktywny timer naraz — kliknięcie i zmiana zaznaczenia potrafią
  // wypaść razem i bez tego uruchomiłyby dwa równoległe odliczania.
  let timer = null;

  const openExpandedEditor = () => {
    if (isModalOpen()) {
      return;
    }

    if (timer) {
      clearInterval(timer);
    }

    let attempts = 0;

    // Pasek narzędzi przerysowuje się chwilę po kliknięciu — czekamy na przycisk.
    timer = setInterval(() => {
      if (++attempts > 20 || !isAcfBlockSelected()) {
        clearInterval(timer);
        timer = null;
        return;
      }

      const button = findExpandedEditorButton();

      if (button) {
        clearInterval(timer);
        timer = null;
        button.click();
      }
    }, 100);
  };

  /**
   * Wyzwalacz 1: zmiana zaznaczenia.
   *
   * Łapie wstawienie nowego bloku i przechodzenie klawiaturą — tam nie ma
   * kliknięcia w kanwę.
   */
  let lastClientId = null;

  wp.data.subscribe(() => {
    const clientId = wp.data.select('core/block-editor').getSelectedBlockClientId();

    if (clientId === lastClientId) {
      return;
    }

    lastClientId = clientId;

    if (clientId && isAcfBlockSelected()) {
      openExpandedEditor();
    }
  });

  /**
   * Wyzwalacz 2: kliknięcie w blok na kanwie.
   *
   * Zaznaczenie się wtedy nie zmienia, więc wyzwalacz 1 milczy — a to właśnie
   * przypadek "zamknąłem modal i klikam w ten sam blok jeszcze raz".
   *
   * Przycisk ACF zawsze ustawia modal na otwarty (nie przełącza), więc gdy oba
   * wyzwalacze wypadną razem, drugie kliknięcie niczego nie zamknie.
   *
   * Nasłuch działa w fazie przechwytywania (capture), bo Gutenberg zatrzymuje
   * propagację części kliknięć w bloki i do fazy bąbelkowania nic nie dociera.
   *
   * Kanwa żyje w iframie i bywa przemontowana, dlatego podpinamy się przy każdym
   * przebiegu subskrypcji i pilnujemy flagi, żeby nie dublować nasłuchu.
   */
  const bindCanvasClicks = () => {
    const canvas = canvasDocument();

    if (!canvas || canvas.acfExpandedEditorBound) {
      return;
    }

    canvas.acfExpandedEditorBound = true;

    canvas.addEventListener('click', (event) => {
      const block = event.target?.closest?.(
        '.block-editor-block-list__block[data-type^="acf/"]'
      );

      if (block) {
        openExpandedEditor();
      }
    }, true);
  };

  wp.data.subscribe(bindCanvasClicks);
  bindCanvasClicks();
});
