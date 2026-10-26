<!--- video preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Wideo</div>
			<span class="acf-preview__slug">acf/video</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($g_video['subtitle']))
		<p>{{ $g_video['subtitle'] }}</p>
		@endif
		@if (!empty($g_video['title']))
		<p class="text-h5">{{ $g_video['title'] }}</p>
		@endif
		@if (!empty($g_video['txt']))
		<p>{{ wp_trim_words(wp_strip_all_tags($g_video['txt']), 24) }}</p>
		@endif
		@if (!empty($g_video['video']))
		<p>Wideo</p>
		@endif
		@if (!empty($g_video['button']['title']))
		<div class="acf-preview-actions">
			<span class="acf-preview-button">{{ $g_video['button']['title'] }}</span>
		</div>
		@endif
	</div>
</div>
