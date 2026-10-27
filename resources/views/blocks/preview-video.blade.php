<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">{{ $block->name }}</div>
			<span class="acf-preview__slug">acf/video</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@php
		$previewMediaType = $g_video['media_type'] ?? 'video';
		@endphp
		@include('partials.block-preview-intro', ['preview' => [
			'eyebrow' => $g_video['subtitle'] ?? null,
			'header' => $g_video['title'] ?? null,
			'html' => $g_video['txt'] ?? null,
			'lines' => [$previewMediaType === 'video' && filled($g_video['video'] ?? null) ? 'Wideo (oEmbed)' : null],
			'buttons' => [$g_video['button'] ?? null],
			'image' => $previewMediaType === 'image' ? ($g_video['image'] ?? null) : null,
			'flip' => $flip ?? false,
		]])
	</div>
</div>
