<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">{{ $block->name }}</div>
			<span class="acf-preview__slug">acf/table</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@include('partials.block-preview-intro', ['preview' => [
			'header' => $g_table['header'] ?? null,
			'html' => $g_table['info'] ?? null,
		]])
		@php
		$previewRows = array_map(fn ($row) => [
			'title' => trim(wp_strip_all_tags($row['col1'] ?? '')),
			'text' => implode(' · ', array_filter([
				trim(wp_strip_all_tags($row['col2'] ?? '')),
				trim(wp_strip_all_tags($row['col3'] ?? '')),
			], 'filled')),
		], array_filter((array) ($g_table['r_table'] ?? []), 'is_array'));
		@endphp
		@include('partials.block-preview-items', [
			'previewItems' => $previewRows,
			'previewLabel' => 'Wiersze',
		])
	</div>
</div>
