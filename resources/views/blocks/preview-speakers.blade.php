<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">{{ $block->name }}</div>
			<span class="acf-preview__slug">acf/speakers</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@include('partials.block-preview-intro', ['preview' => [
			'eyebrow' => $g_speakers['title'] ?? null,
			'header' => $g_speakers['header'] ?? null,
		]])
		@php
		$previewRows = array_map(fn ($row) => ['title' => $row['title'] ?? null, 'text' => $row['txt'] ?? null, 'image' => $row['img'] ?? null], (array) ($g_speakers['r_speakers'] ?? []));
		@endphp
		@include('partials.block-preview-items', [
			'previewItems' => $previewRows,
			'previewLabel' => 'Prelegenci',
		])
	</div>
</div>
