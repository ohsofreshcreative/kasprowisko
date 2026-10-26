<!--- start preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Hero - wersja angielska</div>
			<span class="acf-preview__slug">acf/start</span>
		</div>
		@includeIf('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($g_start['image']['ID']))
		<figure class="acf-preview__media m-0">{!! wp_get_attachment_image($g_start['image']['ID'], 'thumbnail', false, ['class' => 'h-20 w-32 object-cover']) !!}</figure>
		@elseif (!empty($g_start['image']['url']))
		<figure class="acf-preview__media m-0"><img src="{{ $g_start['image']['url'] }}" alt="{{ $g_start['image']['alt'] ?? '' }}" class="h-20 w-32 object-cover"></figure>
		@endif
		@if (!empty($g_start['header']))
		<p class="text-h5">{{ $g_start['header'] }}</p>
		@endif
		@if (!empty($g_start['text']))
		<p>{{ wp_strip_all_tags($g_start['text']) }}</p>
		@endif
		@if (!empty($g_start['button1']['title']) || !empty($g_start['button2']['title']))
		<div class="acf-preview-actions">
			@if (!empty($g_start['button1']['title']))
			<span class="acf-preview-button">{{ $g_start['button1']['title'] }}</span>
			@endif
			@if (!empty($g_start['button2']['title']))
			<span class="acf-preview-button">{{ $g_start['button2']['title'] }}</span>
			@endif
		</div>
		@endif
		@if (!empty($g_start_2['title']))
		<p class="text-h5">{{ $g_start_2['title'] }}</p>
		@endif
		@if (!empty($g_start_2['shortcode']))
		<p>Formularz</p>
		@endif
	</div>
</div>
