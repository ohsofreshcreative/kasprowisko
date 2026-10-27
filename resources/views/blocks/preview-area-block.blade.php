<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">{{ $block->name }}</div>
			<span class="acf-preview__slug">acf/area-block</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@include('partials.block-preview-intro', ['preview' => [
			'header' => $g_area['title'] ?? null,
			'html' => $g_area['content'] ?? null,
			'buttons' => [$g_area['button'] ?? null],
			'image' => $g_area['image'] ?? null,
			'flip' => $flip ?? false,
		]])
	</div>
</div>
