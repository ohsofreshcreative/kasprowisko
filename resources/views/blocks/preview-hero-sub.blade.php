<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">{{ $block->name }}</div>
			<span class="acf-preview__slug">acf/hero-sub</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@include('partials.block-preview-intro', ['preview' => [
			'header' => $g_hero_sub['header'] ?? null,
			'html' => $g_hero_sub['text'] ?? null,
			'buttons' => [$g_hero_sub['button1'] ?? null, $g_hero_sub['button2'] ?? null],
			'image' => $g_hero_sub['image'] ?? null,
			'flip' => $flip ?? false,
		]])
	</div>
</div>
