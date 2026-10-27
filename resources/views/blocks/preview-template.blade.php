<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">{{ $block->name }}</div>
			<span class="acf-preview__slug">acf/template</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@include('partials.block-preview-intro', ['preview' => [
			'header' => $tab1['title'] ?? null,
			'html' => $tab1['content'] ?? null,
			'buttons' => [$tab1['button'] ?? null],
			'image' => $tab1['image'] ?? null,
			'flip' => $flip ?? false,
		]])
	</div>
</div>
