<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">{{ $block->name }}</div>
			<span class="acf-preview__slug">acf/text</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@include('partials.block-preview-intro', ['preview' => [
			'eyebrow' => $g_text['subtitle'] ?? null,
			'header' => $g_text['header'] ?? null,
			'html' => $g_text['txt'] ?? null,
			'buttons' => [$g_text['button'] ?? null],
		]])
	</div>
</div>
