<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">{{ $block->name }}</div>
			<span class="acf-preview__slug">acf/agenda</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@include('partials.block-preview-intro', ['preview' => [
			'eyebrow' => $agenda_data['header1'] ?? null,
			'header' => $agenda_data['header2'] ?? null,
			'buttons' => [$agenda_data['btn1'] ?? null],
		]])
		@php $previewRows = array_map(fn ($row) => ['title' => $row['day'] ?? null, 'text' => implode(' · ', array_filter([$row['date'] ?? null, !empty($row['panels']) ? 'Panele: ' . count((array) $row['panels']) : null], 'filled'))], array_filter((array) ($agenda_data['tabs'] ?? []), 'is_array')); @endphp
		@include('partials.block-preview-items', [
			'previewItems' => $previewRows,
			'previewLabel' => 'Dni',
		])
	</div>
</div>
