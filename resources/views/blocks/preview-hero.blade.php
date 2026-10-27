<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">{{ $block->name }}</div>
			<span class="acf-preview__slug">acf/hero</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@php
		$previewUseVideo = !empty($g_hero['use_video'] ?? null);
		$previewVideo = $g_hero['video'] ?? null;
		$previewVideoUrl = is_array($previewVideo) ? ($previewVideo['url'] ?? null) : $previewVideo;
		@endphp
		@include('partials.block-preview-intro', ['preview' => [
			'header' => $g_hero['title'] ?? null,
			'subheader' => $g_hero['subtitle'] ?? null,
			'text' => $g_hero['txt'] ?? null,
			'lines' => [
				$g_hero['date'] ?? null,
				$g_hero['place'] ?? null,
				$previewUseVideo && filled($previewVideoUrl) ? 'Wideo: ' . $previewVideoUrl : null,
			],
			'buttons' => [$g_hero['button1'] ?? null, $g_hero['button2'] ?? null],
			'image' => $previewUseVideo ? ($g_hero['video_poster'] ?? null) : ($g_hero['image'] ?? null),
			'flip' => $flip ?? false,
		]])
	</div>
</div>
