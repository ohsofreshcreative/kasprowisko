<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">{{ $block->name }}</div>
			<span class="acf-preview__slug">acf/workshops</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@include('partials.block-preview-intro', ['preview' => [
			'eyebrow' => $g_workshops['subtitle'] ?? null,
			'header' => $g_workshops['title'] ?? null,
			'text' => $g_workshops['text1'] ?? null,
		]])
		@include('partials.block-preview-intro', ['preview' => [
			'text' => $g_workshops['text2'] ?? null,
			'buttons' => [$g_workshops['button'] ?? null],
			'image' => $g_workshops['image'] ?? null,
			'flip' => $flip ?? false,
		]])
	</div>
</div>
