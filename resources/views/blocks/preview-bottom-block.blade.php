<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">{{ $block->name }}</div>
			<span class="acf-preview__slug">acf/bottom-block</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@include('partials.block-preview-intro', ['preview' => [
			'eyebrow' => $bottom['subtitle'] ?? null,
			'header' => $bottom['title'] ?? null,
			'text' => $bottom['txt'] ?? null,
			'buttons' => [$bottom['button'] ?? null],
			'image' => $bottom['image'] ?? null,
			'flip' => $flip ?? false,
		]])
	</div>
</div>
