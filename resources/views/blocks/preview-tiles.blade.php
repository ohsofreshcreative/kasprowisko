<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">{{ $block->name }}</div>
			<span class="acf-preview__slug">acf/tiles</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@include('partials.block-preview-intro', ['preview' => [
			'eyebrow' => $g_tiles['title'] ?? null,
			'header' => $g_tiles['header'] ?? null,
			'text' => $g_tiles['text'] ?? null,
		]])
		@php
		$previewRows = array_map(fn ($row) => [
			'title' => $row['card_title'] ?? null,
			'text' => $row['card_txt'] ?? null,
			'image' => $row['card_image'] ?? null,
		], array_filter((array) ($r_tiles ?? []), 'is_array'));
		@endphp
		@include('partials.block-preview-items', [
			'previewItems' => $previewRows,
			'previewLabel' => 'Kafelki',
		])
	</div>
</div>
