@php
/**
 * Chipy z włączonymi ustawieniami bloku w podglądzie edytora.
 * Nie każdy blok zwraca wszystkie pola, stąd `?? false`.
 */
$previewSettings = [];

if ($nomt ?? false) {
	$previewSettings[] = ['label' => 'Bez marginesu górnego', 'type' => 'nomt'];
}

foreach ([
	'wide' => 'Szeroka kolumna',
	'flip' => 'Odwrotna kolejność',
	'gap' => 'Większy odstęp',
	'nolist' => 'Bez listy',
	'bgimage' => 'Grafika w tle',
	'use_video' => 'Wideo w tle',
] as $settingKey => $settingLabel) {
	if (${$settingKey} ?? false) {
		$previewSettings[] = ['label' => $settingLabel];
	}
}

$settingBackgrounds = [
	'section-white' => 'Białe',
	'section-light' => 'Jasne',
	'section-s-light' => 'Alternatywne',
	'section-gray' => 'Szare',
	'section-grey' => 'Szare',
	'section-brand' => 'Marki',
	'section-primary' => 'Główne',
	'section-secondary' => 'Dodatkowe',
	'section-gradient' => 'Gradient',
	'section-dark' => 'Ciemne',
];

foreach ([
	'whitebg' => 'section-white',
	'lightbg' => 'section-light',
	'slightbg' => 'section-s-light',
	'graybg' => 'section-gray',
	'greybg' => 'section-grey',
	'brandbg' => 'section-brand',
	'primarybg' => 'section-primary',
	'secondarybg' => 'section-secondary',
	'darkbg' => 'section-dark',
] as $settingKey => $settingBg) {
	if (${$settingKey} ?? false) {
		$previewSettings[] = ['label' => 'Tło: ' . $settingBackgrounds[$settingBg], 'bg' => $settingBg];
	}
}

$settingBg = $background ?? null;

if (is_string($settingBg) && filled($settingBg) && $settingBg !== 'none') {
	$previewSettings[] = ['label' => 'Tło: ' . ($settingBackgrounds[$settingBg] ?? $settingBg), 'bg' => $settingBg];
}
@endphp

@if (!empty($previewSettings))
<div class="acf-preview__settings" aria-label="Włączone ustawienia bloku">
	@foreach ($previewSettings as $setting)
	<span
		@class(['acf-preview__setting', 'acf-preview__setting--nomt' => ($setting['type'] ?? null) === 'nomt'])
		@if (!empty($setting['bg'])) data-bg="{{ $setting['bg'] }}" @endif
	>{{ $setting['label'] }}</span>
	@endforeach
</div>
@endif
