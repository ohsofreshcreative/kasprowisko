<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">{{ $block->name }}</div>
			<span class="acf-preview__slug">acf/connect</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@include('partials.block-preview-intro', ['preview' => [
			'header' => $g_connect['header'] ?? null,
		]])
		@php $previewRows = array_map(fn ($row) => ['title' => $row['header'] ?? null, 'text' => implode(' · ', array_filter([$row['name'] ?? null, $row['phone'] ?? null, $row['email'] ?? null], 'filled')), 'image' => $row['image'] ?? null], array_filter((array) ($g_connect['r_connect'] ?? []), 'is_array')); @endphp
		@include('partials.block-preview-items', [
			'previewItems' => $previewRows,
			'previewLabel' => 'Kafelki',
			'previewIcons' => true,
		])
	</div>
</div>
