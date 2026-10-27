<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">{{ $block->name }}</div>
			<span class="acf-preview__slug">acf/jobs</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@include('partials.block-preview-intro', ['preview' => [
			'header' => $g_jobs['title'] ?? null,
			'subheader' => implode(' ', array_filter([$g_jobs['subtitle'] ?? null, $g_jobs['header'] ?? null], 'filled')),
			'html' => $g_jobs['content'] ?? null,
		]])
		@include('partials.block-preview-items', [
			'previewItems' => $repeater ?? [],
			'previewLabel' => 'Oferty pracy',
		])
	</div>
</div>
