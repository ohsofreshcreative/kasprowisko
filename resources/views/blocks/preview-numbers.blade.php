<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">{{ $block->name }}</div>
			<span class="acf-preview__slug">acf/numbers</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@include('partials.block-preview-intro', ['preview' => [
			'header' => $g_numbers['header'] ?? null,
		]])
		@php
		$previewRows = array_map(fn ($row) => ['title' => $row['title'] ?? null, 'text' => $row['txt'] ?? null], (array) ($g_numbers['r_numbers'] ?? []));
		@endphp
		@include('partials.block-preview-items', [
			'previewItems' => $previewRows,
			'previewLabel' => 'Kafelki',
			'previewLimit' => 4,
		])
	</div>
</div>
