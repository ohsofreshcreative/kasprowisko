<!--- area-block preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Obszar działania</div>
			<span class="acf-preview__slug">acf/area-block</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($g_area['image']['ID']))
		<figure class="acf-preview__media m-0">{!! wp_get_attachment_image($g_area['image']['ID'], 'thumbnail', false, ['class' => 'h-20 w-32 object-contain']) !!}</figure>
		@endif
		@if (!empty($g_area['title']))
		<p class="text-h5">{{ $g_area['title'] }}</p>
		@endif
		@if (!empty($g_area['content']))
		<p>{{ wp_trim_words(wp_strip_all_tags($g_area['content']), 24) }}</p>
		@endif
		@if (!empty($g_area['button']['title']))
		<div class="acf-preview-actions">
			<span class="acf-preview-button">{{ $g_area['button']['title'] }}</span>
		</div>
		@endif
		<p>Treść pobierana z ustawień globalnych</p>
	</div>
</div>
