<!--- reviews preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Slider - Opinie</div>
			<span class="acf-preview__slug">acf/reviews</span>
		</div>
		@includeIf('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($g_reviews['subtitle']))
		<p>{{ $g_reviews['subtitle'] }}</p>
		@endif
		@if (!empty($g_reviews['image']['ID']))
		<figure class="acf-preview__media m-0">{!! wp_get_attachment_image($g_reviews['image']['ID'], 'thumbnail', false, ['class' => 'h-20 w-32 object-cover']) !!}</figure>
		@elseif (!empty($g_reviews['image']['url']))
		<figure class="acf-preview__media m-0"><img src="{{ $g_reviews['image']['url'] }}" alt="{{ $g_reviews['image']['alt'] ?? '' }}" class="h-20 w-32 object-cover"></figure>
		@endif
		@if (!empty($g_reviews['title']))
		<p class="text-h5">{{ $g_reviews['title'] }}</p>
		@endif
		@if (!empty($g_reviews['txt']))
		<p class="acf-preview__txt">{{ wp_trim_words(wp_strip_all_tags($g_reviews['txt']), 24) }}</p>
		@endif
		@if (!empty($r_reviews))
		<div class="acf-preview__grid grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
			@foreach (array_slice((array) $r_reviews, 0, 4) as $item)
			<div class="acf-preview__card flex flex-col gap-2">
				@if (!empty($item['img']['ID']))
				<figure class="acf-preview__media m-0">{!! wp_get_attachment_image($item['img']['ID'], 'thumbnail', false, ['class' => 'h-20 w-32 object-cover']) !!}</figure>
				@elseif (!empty($item['img']['url']))
				<figure class="acf-preview__media m-0"><img src="{{ $item['img']['url'] }}" alt="{{ $item['img']['alt'] ?? '' }}" class="h-20 w-32 object-cover"></figure>
				@endif
				@if (!empty($item['txt']))
				<p class="acf-preview__txt">{{ wp_trim_words(wp_strip_all_tags($item['txt']), 24) }}</p>
				@endif
				@if (!empty($item['name']))
				<p class="text-h6">{{ $item['name'] }}</p>
				@endif
			</div>
			@endforeach
		</div>
		@if (count((array) $r_reviews) > 4)
		<p>+ {{ count((array) $r_reviews) - 4 }} kolejnych elementów</p>
		@endif
		@endif
	</div>
</div>
