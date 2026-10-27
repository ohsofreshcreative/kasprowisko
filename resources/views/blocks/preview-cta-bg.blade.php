<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">{{ $block->name }}</div>
			<span class="acf-preview__slug">acf/cta-bg</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@include('partials.block-preview-intro', ['preview' => [
			'header' => $cta_bg['title'] ?? null,
			'html' => $cta_bg['content'] ?? null,
			'buttons' => [$cta_bg['button'] ?? null],
			'image' => $cta_bg['image'] ?? null,
			'flip' => $flip ?? false,
		]])
	</div>
</div>
