<!--- text-text preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Tekst - dwie kolumny</div>
			<span class="acf-preview__slug">acf/text-text</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		<div class="acf-preview__grid grid grid-cols-1 sm:grid-cols-2">
			@foreach ([$g1_text_text ?? [], $g2_text_text ?? []] as $col)
			@if (!empty($col))
			<div class="acf-preview__card">
				@if (!empty($col['image']['ID']))
				<figure class="acf-preview__media m-0">{!! wp_get_attachment_image($col['image']['ID'], 'thumbnail', false, ['class' => 'h-20 w-32 object-contain']) !!}</figure>
				@endif
				@if (!empty($col['title']))
				<p>{{ $col['title'] }}</p>
				@endif
				@if (!empty($col['header']))
				<p class="text-h5">{{ $col['header'] }}</p>
				@endif
				@if (!empty($col['content']))
				<p>{{ wp_trim_words(wp_strip_all_tags($col['content']), 24) }}</p>
				@endif
			</div>
			@endif
			@endforeach
		</div>
	</div>
</div>
