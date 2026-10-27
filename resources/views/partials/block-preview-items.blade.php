@php
/**
 * Siatka elementów repeatera w podglądzie bloku.
 * Zmienne mają prefiks preview, żeby nie kolidowały ze zmiennymi bloku.
 *
 * $previewItems – wiersze repeatera
 * $previewLabel – podpis nad siatką, np. „Kafelki”
 * $previewLimit – ile elementów pokazać (domyślnie 3)
 * $previewIcons – obrazy to białe ikony, więc stawiamy je na kolorowym kółku
 */
$previewItems = array_values(array_filter((array) ($previewItems ?? []), 'is_array'));
$previewLimit = (int) ($previewLimit ?? 3);
$previewIcons = (bool) ($previewIcons ?? false);
$previewCount = count($previewItems);
@endphp

@if ($previewCount)
<div class="acf-preview__items">
	<div class="acf-preview__items-label">
		{{ $previewLabel ?? 'Elementy' }} <span class="acf-preview__count">{{ $previewCount }}</span>
	</div>
	<div class="acf-preview__grid">
		@foreach (array_slice($previewItems, 0, $previewLimit) as $item)
		@php
		$itemTitle = $item['title'] ?? $item['name'] ?? $item['header'] ?? null;
		$itemText = $item['text'] ?? $item['txt'] ?? $item['description'] ?? null;
		$itemText = is_string($itemText) ? trim(wp_strip_all_tags($itemText)) : null;
		$itemImage = $item['image'] ?? null;
		$itemImageSrc = is_array($itemImage) ? ($itemImage['sizes']['thumbnail'] ?? $itemImage['url'] ?? null) : null;
		$itemButton = $item['button']['title'] ?? null;
		@endphp
		<div class="acf-preview__item">
			@if ($itemImageSrc)
			<figure @class(['acf-preview__thumb', 'acf-preview__thumb--icon' => $previewIcons])>
				<img src="{{ $itemImageSrc }}" alt="{{ $itemImage['alt'] ?? '' }}">
			</figure>
			@endif
			<div class="acf-preview__item-body">
				@if (filled($itemTitle))
				<p class="acf-preview__item-title">{{ wp_strip_all_tags($itemTitle) }}</p>
				@endif
				@if (filled($itemText))
				<p class="acf-preview__item-text">{{ $itemText }}</p>
				@endif
				@if (filled($itemButton))
				<span class="acf-preview__item-link">{{ $itemButton }} →</span>
				@endif
			</div>
		</div>
		@endforeach
		@if ($previewCount > $previewLimit)
		<div class="acf-preview__item acf-preview__item--more">+{{ $previewCount - $previewLimit }} więcej</div>
		@endif
	</div>
</div>
@endif
