<!--- gallery preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Galeria</div>
			<span class="acf-preview__slug">acf/gallery</span>
		</div>
		@includeIf('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($g_gallery['title']))
		<p class="text-h5">{{ $g_gallery['title'] }}</p>
		@endif
		@if (!empty($g_gallery['gallery']))
		<div class="acf-preview__grid grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
			@foreach (array_slice((array) $g_gallery['gallery'], 0, 4) as $image)
			@if (!empty($image['ID']))
			<div class="acf-preview__card flex flex-col gap-2">
				<figure class="acf-preview__media m-0">{!! wp_get_attachment_image($image['ID'], 'thumbnail', false, ['class' => 'h-20 w-32 object-cover']) !!}</figure>
			</div>
			@endif
			@endforeach
		</div>
		@if (count((array) $g_gallery['gallery']) > 4)
		<p>+ {{ count((array) $g_gallery['gallery']) - 4 }} kolejnych elementów</p>
		@endif
		@endif
	</div>
</div>
