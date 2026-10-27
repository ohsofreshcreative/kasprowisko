<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">{{ $block->name }}</div>
			<span class="acf-preview__slug">acf/home-about</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@include('partials.block-preview-intro', ['preview' => [
			'eyebrow' => $g_about['subtitle'] ?? null,
			'header' => $g_about['header'] ?? null,
			'html' => $g_about['txt'] ?? null,
			'lines' => [
				filled($g_about['where'] ?? null) ? 'Gdzie: ' . $g_about['where'] : null,
				filled($g_about['when'] ?? null) ? 'Kiedy: ' . $g_about['when'] : null,
			],
			'buttons' => [$g_about['button'] ?? null],
			'image' => ($g_about['image1'] ?? null) ?: ($g_about['image2'] ?? null),
			'flip' => $flip ?? false,
		]])
	</div>
</div>
