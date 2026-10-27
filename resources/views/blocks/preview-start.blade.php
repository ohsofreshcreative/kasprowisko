<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">{{ $block->name }}</div>
			<span class="acf-preview__slug">acf/start</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@include('partials.block-preview-intro', ['preview' => [
			'header' => $g_start['header'] ?? null,
			'html' => $g_start['text'] ?? null,
			'lines' => [$g_start['date'] ?? null, $g_start['place'] ?? null],
			'buttons' => [$g_start['button1'] ?? null, $g_start['button2'] ?? null],
			'image' => $g_start['image'] ?? null,
			'flip' => $flip ?? false,
		]])
	</div>
</div>
