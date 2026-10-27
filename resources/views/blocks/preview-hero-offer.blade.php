<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">{{ $block->name }}</div>
			<span class="acf-preview__slug">acf/hero-offer</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@include('partials.block-preview-intro', ['preview' => [
			'header' => $g_herooffer['title'] ?? null,
			'html' => $g_herooffer['content'] ?? null,
			'image' => $g_herooffer['image'] ?? null,
			'flip' => $flip ?? false,
		]])
		@php
		$previewRows = array_map(fn ($row) => [
			'title' => $row['label'] ?? null,
			'text' => $row['href'] ?? null,
		], array_filter((array) ($nav ?? []), 'is_array'));
		@endphp
		@include('partials.block-preview-items', [
			'previewItems' => $previewRows,
			'previewLabel' => 'Odnośniki',
		])
	</div>
</div>
