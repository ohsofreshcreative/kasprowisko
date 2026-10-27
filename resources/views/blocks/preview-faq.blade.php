<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">{{ $block->name }}</div>
			<span class="acf-preview__slug">acf/faq</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@include('partials.block-preview-intro', ['preview' => [
			'header' => $faq['title'] ?? null,
			'html' => $faq['content'] ?? null,
			'buttons' => [$faq['button'] ?? null],
		]])
		@include('partials.block-preview-items', [
			'previewItems' => $repeater ?? [],
			'previewLabel' => 'Pytania',
		])
	</div>
</div>
