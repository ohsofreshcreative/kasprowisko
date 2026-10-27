<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">{{ $block->name }}</div>
			<span class="acf-preview__slug">acf/contact</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@include('partials.block-preview-intro', ['preview' => [
			'header' => $g_contact_1['title'] ?? null,
			'html' => $g_contact_1['txt'] ?? null,
			'lines' => [
				$g_contact_1['phone'] ?? null,
				$g_contact_1['mail'] ?? null,
				filled($g_contact_2['shortcode'] ?? null) ? 'Formularz' . (filled($g_contact_2['title'] ?? null) ? ': ' . $g_contact_2['title'] : '') : null,
			],
		]])
	</div>
</div>
