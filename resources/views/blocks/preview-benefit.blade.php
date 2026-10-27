<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">{{ $block->name }}</div>
			<span class="acf-preview__slug">acf/benefit</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@include('partials.block-preview-intro', ['preview' => [
			'eyebrow' => $g_benefit['subtitle'] ?? null,
			'header' => $g_benefit['top'] ?? null,
			'subheader' => $g_benefit['title'] ?? null,
			'html' => $g_benefit['txt'] ?? null,
			'buttons' => [$g_benefit['button'] ?? null],
			'image' => $g_benefit['image'] ?? null,
			'flip' => $flip ?? false,
		]])
		@include('partials.block-preview-items', [
			'previewItems' => $r_benefit ?? [],
			'previewLabel' => 'Funkcje',
		])
	</div>
</div>
