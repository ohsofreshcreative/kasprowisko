<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">{{ $block->name }}</div>
			<span class="acf-preview__slug">acf/invitation</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@include('partials.block-preview-intro', ['preview' => [
			'header' => $g_invitation['header'] ?? null,
			'html' => $g_invitation['txt'] ?? null,
			'buttons' => [$g_invitation['button'] ?? null],
		]])
		@php
		$previewRows = array_map(fn ($row) => [
			'title' => $row['title'] ?? null,
			'text' => $row['txt'] ?? null,
			'image' => $row['img'] ?? null,
		], array_filter((array) ($g2_invitation['r_invitation'] ?? []), 'is_array'));
		@endphp
		@include('partials.block-preview-items', [
			'previewItems' => $previewRows,
			'previewLabel' => 'Zapraszający',
		])
	</div>
</div>
