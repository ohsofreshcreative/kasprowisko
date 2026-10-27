<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">{{ $block->name }}</div>
			<span class="acf-preview__slug">acf/team</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@include('partials.block-preview-intro', ['preview' => [
			'eyebrow' => $g_team['subtitle'] ?? null,
			'header' => $g_team['title'] ?? null,
			'html' => $g_team['content'] ?? null,
		]])
		@php
		$previewRows = array_map(fn ($row) => [
			'title' => $row['card_title'] ?? null,
			'text' => implode(' · ', array_filter([$row['card_function'] ?? null, $row['card_mail'] ?? null], 'filled')),
			'image' => $row['card_image'] ?? null,
		], array_filter((array) ($repeater ?? []), 'is_array'));
		@endphp
		@include('partials.block-preview-items', [
			'previewItems' => $previewRows,
			'previewLabel' => 'Osoby',
		])
	</div>
</div>
