<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">{{ $block->name }}</div>
			<span class="acf-preview__slug">acf/info</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@include('partials.block-preview-intro', ['preview' => [
			'eyebrow' => $g_info['subtitle'] ?? null,
			'header' => $g_info['title'] ?? null,
			'html' => $g_info['txt'] ?? null,
			'buttons' => [$g_info['button'] ?? null],
			'image' => $g_info['image'] ?? null,
			'flip' => $flip ?? false,
		]])
		@include('partials.block-preview-items', [
			'previewItems' => $g_info['r_info'] ?? [],
			'previewLabel' => 'Kafelki',
		])
	</div>
</div>
