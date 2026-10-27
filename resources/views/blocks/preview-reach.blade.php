<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">{{ $block->name }}</div>
			<span class="acf-preview__slug">acf/reach</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@include('partials.block-preview-intro', ['preview' => [
			'eyebrow' => $g_reach_1['title'] ?? null,
			'header' => $g_reach_1['header'] ?? null,
			'html' => $g_reach_1['txt'] ?? null,
			'lines' => [
				$g_reach_1['person'] ?? null,
				$g_reach_1['phone'] ?? null,
				$g_reach_1['mail'] ?? null,
				filled($g_reach_2['shortcode'] ?? null) ? trim('Formularz: ' . ($g_reach_2['title'] ?? ''), ': ') : null,
			],
			'image' => $g_reach_1['image'] ?? null,
			'flip' => $flip ?? false,
		]])
	</div>
</div>
