<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">{{ $block->name }}</div>
			<span class="acf-preview__slug">acf/experts</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@include('partials.block-preview-intro', ['preview' => [
			'eyebrow' => $g_experts['subtitle'] ?? null,
			'header' => $g_experts['header'] ?? null,
			'html' => $g_experts['txt'] ?? null,
			'buttons' => [$g_experts['button'] ?? null],
		]])
		@php
		$previewRows = array_map(fn ($image) => ['image' => $image], array_filter((array) ($gallery ?? []), 'is_array'));
		@endphp
		@include('partials.block-preview-items', [
			'previewItems' => $previewRows,
			'previewLabel' => 'Galeria',
			'previewLimit' => 6,
		])
	</div>
</div>
