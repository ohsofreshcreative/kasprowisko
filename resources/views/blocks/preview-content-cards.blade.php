<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">{{ $block->name }}</div>
			<span class="acf-preview__slug">acf/content-cards</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@include('partials.block-preview-intro', ['preview' => [
			'header' => $textimg['title'] ?? null,
			'html' => $textimg['content'] ?? null,
			'image' => $textimg['image'] ?? null,
			'flip' => $flip ?? false,
		]])
		@php $previewRows = array_map(fn ($row) => ['title' => $row['card_title'] ?? null, 'text' => $row['card_txt'] ?? null, 'image' => $row['card_image'] ?? null], array_filter((array) ($tiles['repeater'] ?? []), 'is_array')); @endphp
		@include('partials.block-preview-items', [
			'previewItems' => $previewRows,
			'previewLabel' => 'Kafelki',
			'previewLimit' => 4,
		])
	</div>
</div>
