<!--- proces preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Proces</div>
			<span class="acf-preview__slug">acf/proces</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($g_proces['subtitle']))
		<p>{{ $g_proces['subtitle'] }}</p>
		@endif
		@if (!empty($g_proces['title']))
		<p class="text-h5">{{ $g_proces['title'] }}</p>
		@endif
		@if (!empty($g_proces['txt']))
		<p>{{ wp_trim_words(wp_strip_all_tags($g_proces['txt']), 24) }}</p>
		@endif
		@if (!empty($r_proces))
		<div class="acf-preview__grid acf-preview__grid--steps grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
			@foreach (array_slice((array) $r_proces, 0, 4) as $item)
			<div class="acf-preview__card">
				@if (!empty($item['image']['ID']))
				<figure class="acf-preview__media m-0">{!! wp_get_attachment_image($item['image']['ID'], 'thumbnail', false, ['class' => 'h-20 w-32 object-contain']) !!}</figure>
				@elseif (!empty($item['image']['url']))
				<figure class="acf-preview__media m-0"><img src="{{ $item['image']['url'] }}" alt="{{ $item['image']['alt'] ?? '' }}" class="h-20 w-32 object-contain"></figure>
				@endif
				@if (!empty($item['title']))
				<p class="text-h5">{{ $item['title'] }}</p>
				@endif
				@if (!empty($item['txt']))
				<p>{{ $item['txt'] }}</p>
				@endif
			</div>
			@endforeach
		</div>
		@endif
	</div>
</div>
