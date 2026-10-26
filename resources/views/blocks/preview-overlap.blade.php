<!--- overlap preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Treść oraz duże kafelki</div>
			<span class="acf-preview__slug">acf/overlap</span>
		</div>
		@includeIf('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($g_overlap['title']))
		<p class="text-h5">{{ $g_overlap['title'] }}</p>
		@endif
		@if (!empty($g_overlap['content']))
		<p class="acf-preview__txt">{{ wp_trim_words(wp_strip_all_tags($g_overlap['content']), 24) }}</p>
		@endif
		@if (!empty($r_overlap))
		<div class="acf-preview__grid grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
			@foreach (array_slice((array) $r_overlap, 0, 4) as $item)
			<div class="acf-preview__card flex flex-col gap-2">
				@if (!empty($item['r_image']['ID']))
				<figure class="acf-preview__media m-0">{!! wp_get_attachment_image($item['r_image']['ID'], 'thumbnail', false, ['class' => 'h-20 w-32 object-cover']) !!}</figure>
				@elseif (!empty($item['r_image']['url']))
				<figure class="acf-preview__media m-0"><img src="{{ $item['r_image']['url'] }}" alt="{{ $item['r_image']['alt'] ?? '' }}" class="h-20 w-32 object-cover"></figure>
				@endif
				@if (!empty($item['r_header']))
				<p class="text-h6">{{ $item['r_header'] }}</p>
				@endif
				@if (!empty($item['r_txt']))
				<p class="acf-preview__txt">{{ wp_trim_words(wp_strip_all_tags($item['r_txt']), 24) }}</p>
				@endif
			</div>
			@endforeach
		</div>
		@if (count((array) $r_overlap) > 4)
		<p>+ {{ count((array) $r_overlap) - 4 }} kolejnych elementów</p>
		@endif
		@endif
	</div>
</div>
