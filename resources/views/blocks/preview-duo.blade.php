<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">{{ $block->name }}</div>
			<span class="acf-preview__slug">acf/duo</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@include('partials.block-preview-intro', ['preview' => [
			'eyebrow' => $g_duo['subtitle'] ?? null,
			'header' => $g_duo['title'] ?? null,
			'html' => $g_duo['txt'] ?? null,
			'buttons' => [$g_duo['button'] ?? null],
			'image' => ($g_duo['image'] ?? null) ?: ($g_duo['image2'] ?? null),
			'flip' => $flip ?? false,
		]])
	</div>
</div>
