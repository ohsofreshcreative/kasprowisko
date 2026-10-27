<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">{{ $block->name }}</div>
			<span class="acf-preview__slug">acf/path</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@include('partials.block-preview-intro', ['preview' => [
			'eyebrow' => $g_path['subtitle'] ?? null,
			'header' => $g_path['title'] ?? null,
			'html' => $g_path['txt'] ?? null,
			'image' => $g_path['image'] ?? null,
			'flip' => $flip ?? false,
		]])
		@include('partials.block-preview-items', [
			'previewItems' => $r_path ?? [],
			'previewLabel' => 'Kroki',
			'previewLimit' => 4,
		])
	</div>
</div>
