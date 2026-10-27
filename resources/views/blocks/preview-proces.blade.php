<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">{{ $block->name }}</div>
			<span class="acf-preview__slug">acf/proces</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@include('partials.block-preview-intro', ['preview' => [
			'eyebrow' => $g_proces['subtitle'] ?? null,
			'header' => $g_proces['title'] ?? null,
			'html' => $g_proces['txt'] ?? null,
		]])
		@include('partials.block-preview-items', [
			'previewItems' => $r_proces ?? [],
			'previewLabel' => 'Kroki',
			'previewLimit' => 4,
		])
	</div>
</div>
