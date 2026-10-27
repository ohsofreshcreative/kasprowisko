<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">{{ $block->name }}</div>
			<span class="acf-preview__slug">acf/steps</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@include('partials.block-preview-intro', ['preview' => [
			'eyebrow' => $g_steps['subtitle'] ?? null,
			'header' => $g_steps['title'] ?? null,
			'html' => $g_steps['txt'] ?? null,
			'image' => $g_steps['image'] ?? null,
			'flip' => $flip ?? false,
		]])
		@include('partials.block-preview-items', [
			'previewItems' => $r_steps ?? [],
			'previewLabel' => 'Kroki',
		])
	</div>
</div>
