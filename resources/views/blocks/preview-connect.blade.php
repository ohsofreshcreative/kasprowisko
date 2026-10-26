<!--- connect preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Dane kontaktowe</div>
			<span class="acf-preview__slug">acf/connect</span>
		</div>
		@includeIf('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($g_connect['header']))
		<p class="text-h5">{{ $g_connect['header'] }}</p>
		@endif
		@if (!empty($g_connect['r_connect']))
		<div class="acf-preview__grid grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
			@foreach (array_slice((array) $g_connect['r_connect'], 0, 4) as $item)
			<div class="acf-preview__card flex flex-col gap-2">
				@if (!empty($item['image']['ID']))
				<figure class="acf-preview__media m-0">{!! wp_get_attachment_image($item['image']['ID'], 'thumbnail', false, ['class' => 'h-20 w-32 object-cover']) !!}</figure>
				@endif
				@if (!empty($item['header']))
				<p class="acf-preview__txt">{{ $item['header'] }}</p>
				@endif
				@if (!empty($item['name']))
				<p class="text-h6">{{ $item['name'] }}</p>
				@endif
				@if (!empty($item['text']))
				<p class="acf-preview__txt">{{ wp_trim_words(wp_strip_all_tags($item['text']), 24) }}</p>
				@endif
				@if (!empty($item['phone']))
				<p class="acf-preview__txt">{{ $item['phone'] }}</p>
				@endif
				@if (!empty($item['email']))
				<p class="acf-preview__txt">{{ $item['email'] }}</p>
				@endif
			</div>
			@endforeach
		</div>
		@if (count((array) $g_connect['r_connect']) > 4)
		<p>+ {{ count((array) $g_connect['r_connect']) - 4 }} kolejnych elementów</p>
		@endif
		@endif
	</div>
</div>
