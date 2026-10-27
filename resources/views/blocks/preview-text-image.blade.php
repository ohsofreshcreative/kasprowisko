<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">{{ $block->name }}</div>
			<span class="acf-preview__slug">acf/text-image</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@include('partials.block-preview-intro', ['preview' => [
			'eyebrow' => $g_textimg['subtitle'] ?? null,
			'header' => $g_textimg['title'] ?? null,
			'html' => $g_textimg['txt'] ?? null,
			'buttons' => [$g_textimg['button'] ?? null],
			'image' => $g_textimg['image'] ?? null,
			'flip' => $flip ?? false,
		]])
	</div>
</div>
