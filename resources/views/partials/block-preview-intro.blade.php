@php
/**
 * Część tekstowa podglądu bloku: eyebrow, nagłówki, tekst, tagi, przyciski i obraz.
 *
 * $preview = [
 *   'eyebrow' => string, 'header' => string, 'subheader' => string,
 *   'text' => string (zwykły tekst), 'html' => string (WYSIWYG),
 *   'lines' => string[] (np. telefon, mail), 'buttons' => array[] (pola link ACF),
 *   'image' => array (pole obrazu ACF), 'flip' => bool,
 * ]
 */
$preview = $preview ?? [];
$previewImage = $preview['image'] ?? null;
$previewImageSrc = is_array($previewImage) ? ($previewImage['sizes']['medium'] ?? $previewImage['url'] ?? null) : null;
$previewLines = array_values(array_filter((array) ($preview['lines'] ?? []), 'filled'));
$previewButtons = array_values(array_filter((array) ($preview['buttons'] ?? []), fn ($button) => !empty($button['title'])));
$previewText = filled($preview['text'] ?? null) ? trim(wp_strip_all_tags($preview['text'])) : null;
$previewHtml = filled($preview['html'] ?? null) ? $preview['html'] : null;

$previewHasBody = filled($preview['eyebrow'] ?? null)
	|| filled($preview['header'] ?? null)
	|| filled($preview['subheader'] ?? null)
	|| $previewText
	|| $previewHtml
	|| $previewLines
	|| $previewButtons;
@endphp

@if ($previewHasBody || $previewImageSrc)
<div @class(['acf-preview__intro', 'acf-preview__intro--flip' => !empty($preview['flip'])])>
	@if ($previewHasBody)
	<div class="acf-preview__body">
		@if (filled($preview['eyebrow'] ?? null))
		<span class="acf-preview__eyebrow">{{ $preview['eyebrow'] }}</span>
		@endif
		@if (filled($preview['header'] ?? null))
		<p class="acf-preview__header">{{ wp_strip_all_tags($preview['header']) }}</p>
		@endif
		@if (filled($preview['subheader'] ?? null))
		<p class="acf-preview__subheader">{{ wp_strip_all_tags($preview['subheader']) }}</p>
		@endif
		@if ($previewText)
		<p class="acf-preview__text">{{ $previewText }}</p>
		@endif
		@if ($previewHtml)
		<div class="acf-preview__text acf-preview__text--html">{!! $previewHtml !!}</div>
		@endif
		@if ($previewLines)
		<div class="acf-preview__lines">
			@foreach ($previewLines as $line)
			<span class="acf-preview__line">{{ wp_strip_all_tags($line) }}</span>
			@endforeach
		</div>
		@endif
		@if ($previewButtons)
		<div class="acf-preview__buttons">
			@foreach ($previewButtons as $button)
			<span @class(['acf-preview__button', 'acf-preview__button--ghost' => !$loop->first])>{{ $button['title'] }}</span>
			@endforeach
		</div>
		@endif
	</div>
	@endif
	@if ($previewImageSrc)
	<figure class="acf-preview__image">
		<img src="{{ $previewImageSrc }}" alt="{{ $previewImage['alt'] ?? '' }}">
	</figure>
	@endif
</div>
@endif
