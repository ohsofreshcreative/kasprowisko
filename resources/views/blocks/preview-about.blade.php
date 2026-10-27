<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">{{ $block->name }}</div>
			<span class="acf-preview__slug">acf/about</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@include('partials.block-preview-intro', ['preview' => [
			'header' => $g_about['top'] ?? null,
			'subheader' => $g_about['title'] ?? null,
			'html' => $g_about['txt'] ?? null,
			'buttons' => [$g_about['button'] ?? null],
			'image' => $g_about['image'] ?? null,
			'flip' => $flip ?? false,
		]])
		@include('partials.block-preview-items', [
			'previewItems' => $r_about ?? [],
			'previewLabel' => 'Funkcje',
		])
	</div>
</div>
