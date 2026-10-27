<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">{{ $block->name }}</div>
			<span class="acf-preview__slug">acf/cases</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@php $previewRows = array_map(fn ($row) => ['title' => trim(implode(': ', array_filter([$row['card_subtitle'] ?? null, $row['card_title'] ?? null], 'filled'))), 'text' => $row['card_txt'] ?? null, 'image' => $row['card_image'] ?? null], array_filter((array) ($g_cases['r_cases'] ?? []), 'is_array')); @endphp
		@include('partials.block-preview-items', [
			'previewItems' => $previewRows,
			'previewLabel' => 'Kafelki',
		])
	</div>
</div>
