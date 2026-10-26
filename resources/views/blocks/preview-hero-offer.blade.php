<!--- hero-offer preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Hero - Oferta</div>
			<span class="acf-preview__slug">acf/hero-offer</span>
		</div>
		@includeIf('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($g_herooffer['image']['ID']))
		<figure class="acf-preview__media m-0">{!! wp_get_attachment_image($g_herooffer['image']['ID'], 'thumbnail', false, ['class' => 'h-20 w-32 object-cover']) !!}</figure>
		@endif
		@if (!empty($g_herooffer['subtitle']))
		<p>{{ $g_herooffer['subtitle'] }}</p>
		@endif
		@if (!empty($g_herooffer['title']))
		<p class="text-h5">{{ $g_herooffer['title'] }}</p>
		@endif
		@if (!empty($g_herooffer['content']))
		<p class="acf-preview__txt">{{ wp_trim_words(wp_strip_all_tags($g_herooffer['content']), 24) }}</p>
		@endif
		@if (!empty($nav))
		<div class="acf-preview-actions">
			@foreach (array_slice((array) $nav, 0, 4) as $item)
			@if (!empty($item['label']))
			<span class="acf-preview-button">{{ $item['label'] }}</span>
			@endif
			@endforeach
		</div>
		@endif
	</div>
</div>
