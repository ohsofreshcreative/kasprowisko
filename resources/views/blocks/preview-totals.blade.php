<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">{{ $block->name }}</div>
			<span class="acf-preview__slug">acf/totals</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@include('partials.block-preview-intro', ['preview' => [
			'header' => $g_totals['title'] ?? null,
			'html' => $g_totals['txt'] ?? null,
			'buttons' => [$g_totals['button'] ?? null],
			'image' => $g_totals['image'] ?? null,
			'flip' => $flip ?? false,
		]])
		@include('partials.block-preview-items', [
			'previewItems' => $r_totals ?? [],
			'previewLabel' => 'Funkcje',
		])
	</div>
</div>
