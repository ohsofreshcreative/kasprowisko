<!--- experts preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Eksperci</div>
			<span class="acf-preview__slug">acf/experts</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($g_experts['subtitle']))
		<p>{{ $g_experts['subtitle'] }}</p>
		@endif
		@if (!empty($g_experts['header']))
		<p class="text-h5">{{ $g_experts['header'] }}</p>
		@endif
		@if (!empty($g_experts['txt']))
		<p>{{ wp_trim_words(wp_strip_all_tags($g_experts['txt']), 24) }}</p>
		@endif
		@if (!empty($g_experts['button']['title']))
		<div class="acf-preview-actions">
			<span class="acf-preview-button">{{ $g_experts['button']['title'] }}</span>
		</div>
		@endif
		@if (!empty($gallery))
		<div class="acf-preview__grid grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
			@foreach (array_slice((array) $gallery, 0, 4) as $image)
			@if (!empty($image['ID']))
			<div class="acf-preview__card">
				<figure class="acf-preview__media m-0">{!! wp_get_attachment_image($image['ID'], 'thumbnail', false, ['class' => 'h-20 w-32 object-contain']) !!}</figure>
			</div>
			@endif
			@endforeach
		</div>
		@endif
	</div>
</div>
