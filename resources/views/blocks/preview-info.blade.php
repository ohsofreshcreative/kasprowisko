<!--- info preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Informacje</div>
			<span class="acf-preview__slug">acf/info</span>
		</div>
		@includeIf('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($g_info['image']['ID']))
		<figure class="acf-preview__media m-0">{!! wp_get_attachment_image($g_info['image']['ID'], 'thumbnail', false, ['class' => 'h-20 w-32 object-cover']) !!}</figure>
		@endif
		@if (!empty($g_info['subtitle']))
		<p>{{ $g_info['subtitle'] }}</p>
		@endif
		@if (!empty($g_info['title']))
		<p class="text-h5">{{ $g_info['title'] }}</p>
		@endif
		@if (!empty($g_info['txt']))
		<p class="acf-preview__txt">{{ wp_trim_words(wp_strip_all_tags($g_info['txt']), 24) }}</p>
		@endif
		@if (!empty($g_info['r_info']))
		<div class="acf-preview__grid grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
			@foreach (array_slice((array) $g_info['r_info'], 0, 4) as $item)
			<div class="acf-preview__card flex flex-col gap-2">
				@if (!empty($item['image']['ID']))
				<figure class="acf-preview__media m-0">{!! wp_get_attachment_image($item['image']['ID'], 'thumbnail', false, ['class' => 'h-20 w-32 object-cover']) !!}</figure>
				@endif
				@if (!empty($item['header']))
				<p class="text-h6">{{ $item['header'] }}</p>
				@endif
				@if (!empty($item['text']))
				<p class="acf-preview__txt">{{ wp_trim_words(wp_strip_all_tags($item['text']), 24) }}</p>
				@endif
			</div>
			@endforeach
		</div>
		@if (count((array) $g_info['r_info']) > 4)
		<p>+ {{ count((array) $g_info['r_info']) - 4 }} kolejnych elementów</p>
		@endif
		@endif
		@if (!empty($g_info['button']['title']))
		<div class="acf-preview-actions">
			<span class="acf-preview-button">{{ $g_info['button']['title'] }}</span>
		</div>
		@endif
	</div>
</div>
