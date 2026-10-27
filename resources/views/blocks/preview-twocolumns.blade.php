<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">{{ $block->name }}</div>
			<span class="acf-preview__slug">acf/twocolumns</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@include('partials.block-preview-intro', ['preview' => [
			'eyebrow' => $col1['title'] ?? null,
			'header' => $col1['header'] ?? null,
			'html' => $col1['content'] ?? null,
			'image' => $col1['image'] ?? null,
		]])
		@include('partials.block-preview-intro', ['preview' => [
			'lines' => [
				filled($col2['where'] ?? null) ? 'Gdzie: ' . $col2['where'] : null,
				filled($col2['when'] ?? null) ? 'Kiedy: ' . $col2['when'] : null,
			],
			'buttons' => [$col2['button1'] ?? null, $col2['button2'] ?? null],
			'image' => $col2['image'] ?? null,
		]])
	</div>
</div>
