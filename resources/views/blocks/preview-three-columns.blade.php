<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">{{ $block->name }}</div>
			<span class="acf-preview__slug">acf/three-columns</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@include('partials.block-preview-intro', ['preview' => [
			'eyebrow' => $threecols['title'] ?? null,
			'text' => $threecols['content'] ?? null,
		]])
		@include('partials.block-preview-items', [
			'previewItems' => array_values(array_filter([
				!empty($threecols['image1']) ? ['image' => $threecols['image1']] : null,
				!empty($threecols['image2']) ? ['image' => $threecols['image2']] : null,
			])),
			'previewLabel' => 'Obrazy',
		])
	</div>
</div>
