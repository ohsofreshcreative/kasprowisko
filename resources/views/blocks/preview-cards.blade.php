<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">{{ $block->name }}</div>
			<span class="acf-preview__slug">acf/cards</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@include('partials.block-preview-intro', ['preview' => [
			'eyebrow' => $g_cards['subtitle'] ?? null,
			'header' => $g_cards['header'] ?? null,
			'text' => $g_cards['text'] ?? null,
		]])
		@include('partials.block-preview-items', [
			'previewItems' => $g_cards['r_cards'] ?? [],
			'previewLabel' => 'Kafelki',
			'previewLimit' => 4,
			'previewIcons' => true,
		])
	</div>
</div>
