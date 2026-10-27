<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">{{ $block->name }}</div>
			<span class="acf-preview__slug">acf/partners-block</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@php
		$previewRows = [];
		foreach ((array) (get_field('r_partners', 'option') ?: []) as $group) {
			foreach ((array) ($group['logos'] ?? []) as $logo) {
				if (!empty($logo['img'])) {
					$previewRows[] = ['image' => $logo['img']];
				}
			}
		}
		@endphp
		@include('partials.block-preview-items', [
			'previewItems' => $previewRows,
			'previewLabel' => 'Loga',
			'previewLimit' => 6,
		])
	</div>
</div>
