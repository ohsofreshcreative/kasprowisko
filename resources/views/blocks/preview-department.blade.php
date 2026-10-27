<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">{{ $block->name }}</div>
			<span class="acf-preview__slug">acf/department</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@include('partials.block-preview-intro', ['preview' => [
			'header' => $g_department['title'] ?? null,
		]])
		@php
		$previewRows = array_map(fn ($row) => [
			'title' => $row['card_title'] ?? null,
			'text' => implode(' · ', array_filter([$row['card_txt'] ?? null, $row['phone'] ?? null, $row['mail'] ?? null], 'filled')),
		], array_filter((array) ($g_department['r_department'] ?? []), 'is_array'));
		@endphp
		@include('partials.block-preview-items', [
			'previewItems' => $previewRows,
			'previewLabel' => 'Kafelki',
			'previewLimit' => 4,
		])
	</div>
</div>
