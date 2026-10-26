<!--- method preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Metoda - 3 kroki</div>
			<span class="acf-preview__slug">acf/method</span>
		</div>
		@includeIf('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($g_method['subtitle']))
		<p>{{ $g_method['subtitle'] }}</p>
		@endif
		@if (!empty($g_method['title']))
		<p class="text-h5">{{ $g_method['title'] }}</p>
		@endif
		@if (!empty($g_method['txt']))
		<p class="acf-preview__txt">{{ wp_trim_words(wp_strip_all_tags($g_method['txt']), 24) }}</p>
		@endif
		@if (!empty($r_method))
		<div class="acf-preview__grid acf-preview__grid--steps grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
			@foreach (array_slice((array) $r_method, 0, 4) as $item)
			<div class="acf-preview__card flex flex-col gap-2">
				@if (!empty($item['image']['ID']))
				<figure class="acf-preview__media m-0">{!! wp_get_attachment_image($item['image']['ID'], 'thumbnail', false, ['class' => 'h-20 w-32 object-cover']) !!}</figure>
				@elseif (!empty($item['image']['url']))
				<figure class="acf-preview__media m-0"><img src="{{ $item['image']['url'] }}" alt="{{ $item['image']['alt'] ?? '' }}" class="h-20 w-32 object-cover"></figure>
				@endif
				@if (!empty($item['title']))
				<p class="text-h6">{{ $item['title'] }}</p>
				@endif
				@if (!empty($item['txt']))
				<p class="acf-preview__txt">{{ $item['txt'] }}</p>
				@endif
			</div>
			@endforeach
		</div>
		@if (count((array) $r_method) > 4)
		<p>+ {{ count((array) $r_method) - 4 }} kolejnych elementów</p>
		@endif
		@endif
	</div>
</div>
