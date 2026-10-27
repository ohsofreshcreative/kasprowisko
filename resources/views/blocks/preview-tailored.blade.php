<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">{{ $block->name }}</div>
			<span class="acf-preview__slug">acf/tailored</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@include('partials.block-preview-intro', ['preview' => [
			'header' => $g_tailored['header'] ?? null,
			'image' => $g_tailored['image'] ?? null,
		]])
		@php
		$previewRows = array_map(fn ($row) => [
			'title' => trim(($row['number'] ?? '') . ' ' . ($row['header'] ?? '')),
			'text' => $row['txt'] ?? null,
			'image' => $row['img'] ?? null,
		], array_filter((array) ($g_tailored['r_tailored'] ?? []), 'is_array'));
		@endphp
		@include('partials.block-preview-items', [
			'previewItems' => $previewRows,
			'previewLabel' => 'Kafelki',
			'previewLimit' => 4,
			'previewIcons' => true,
		])
	</div>
</div>
