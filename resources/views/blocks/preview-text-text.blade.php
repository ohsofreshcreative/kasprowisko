<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">{{ $block->name }}</div>
			<span class="acf-preview__slug">acf/text-text</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@include('partials.block-preview-intro', ['preview' => [
			'eyebrow' => $g1_text_text['title'] ?? null,
			'header' => $g1_text_text['header'] ?? null,
			'html' => $g1_text_text['content'] ?? null,
			'image' => $g1_text_text['image'] ?? null,
		]])
		@include('partials.block-preview-intro', ['preview' => [
			'eyebrow' => $g2_text_text['title'] ?? null,
			'header' => $g2_text_text['header'] ?? null,
			'html' => $g2_text_text['content'] ?? null,
			'image' => $g2_text_text['image'] ?? null,
		]])
	</div>
</div>
