<!--- speakers preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Członkowie</div>
			<span class="acf-preview__slug">acf/speakers</span>
		</div>
		@includeIf('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($g_speakers['title']))
		<p class="text-h5">{{ $g_speakers['title'] }}</p>
		@endif
		@if (!empty($g_speakers['header']))
		<p>{{ $g_speakers['header'] }}</p>
		@endif
		@if (!empty($g_speakers['r_speakers']))
		<div class="acf-preview__grid grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
			@foreach (array_slice((array) $g_speakers['r_speakers'], 0, 4) as $item)
			<div class="acf-preview__card flex flex-col gap-2">
				@if (!empty($item['img']['ID']))
				<figure class="acf-preview__media m-0">{!! wp_get_attachment_image($item['img']['ID'], 'thumbnail', false, ['class' => 'h-20 w-32 object-cover']) !!}</figure>
				@elseif (!empty($item['img']['url']))
				<figure class="acf-preview__media m-0"><img src="{{ $item['img']['url'] }}" alt="{{ $item['img']['alt'] ?? '' }}" class="h-20 w-32 object-cover"></figure>
				@endif
				@if (!empty($item['title']))
				<p class="text-h6">{{ $item['title'] }}</p>
				@endif
				@if (!empty($item['txt']))
				<p class="acf-preview__txt">{{ wp_strip_all_tags($item['txt']) }}</p>
				@endif
			</div>
			@endforeach
		</div>
		@if (count((array) $g_speakers['r_speakers']) > 4)
		<p>+ {{ count((array) $g_speakers['r_speakers']) - 4 }} kolejnych elementów</p>
		@endif
		@endif
	</div>
</div>
