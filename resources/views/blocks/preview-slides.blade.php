<!--- slides preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Slider</div>
			<span class="acf-preview__slug">acf/slides</span>
		</div>
		@includeIf('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($g_slides['title']))
		<p class="text-h5">{{ $g_slides['title'] }}</p>
		@endif
		@if (!empty($slides))
		<div class="acf-preview__grid grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
			@foreach (array_slice((array) $slides, 0, 4) as $item)
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
				<p class="acf-preview__txt">{{ wp_strip_all_tags($item['txt']) }}</p>
				@endif
				@if (!empty($item['button']['title']))
				<div class="acf-preview-actions">
					@if (!empty($item['button']['title']))
					<span class="acf-preview-button">{{ $item['button']['title'] }}</span>
					@endif
				</div>
				@endif
			</div>
			@endforeach
		</div>
		@if (count((array) $slides) > 4)
		<p>+ {{ count((array) $slides) - 4 }} kolejnych elementów</p>
		@endif
		@endif
	</div>
</div>
