<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">{{ $block->name }}</div>
			<span class="acf-preview__slug">acf/reviews</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@include('partials.block-preview-intro', ['preview' => [
			'eyebrow' => $g_reviews['subtitle'] ?? null,
			'header' => $g_reviews['title'] ?? null,
			'text' => $g_reviews['txt'] ?? null,
			'image' => $g_reviews['image'] ?? null,
			'flip' => $flip ?? false,
		]])
		@php
		$previewRows = array_map(fn ($row) => ['title' => $row['name'] ?? null, 'text' => $row['txt'] ?? null, 'image' => $row['img'] ?? null], (array) ($r_reviews ?? []));
		@endphp
		@include('partials.block-preview-items', [
			'previewItems' => $previewRows,
			'previewLabel' => 'Opinie',
		])
	</div>
</div>
