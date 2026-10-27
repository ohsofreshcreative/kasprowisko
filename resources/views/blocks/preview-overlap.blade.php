<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">{{ $block->name }}</div>
			<span class="acf-preview__slug">acf/overlap</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@include('partials.block-preview-intro', ['preview' => [
			'header' => $g_overlap['title'] ?? null,
			'html' => $g_overlap['content'] ?? null,
		]])
		@php
		$previewRows = array_map(fn ($row) => ['title' => $row['r_header'] ?? null, 'text' => $row['r_txt'] ?? null, 'image' => $row['r_image'] ?? null], (array) ($r_overlap ?? []));
		@endphp
		@include('partials.block-preview-items', [
			'previewItems' => $previewRows,
			'previewLabel' => 'Kafelki',
		])
	</div>
</div>
