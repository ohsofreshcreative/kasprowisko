<!--- text-image preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Treść oraz zdjęcie</div>
			<span class="acf-preview__slug">acf/text-image</span>
		</div>
		@includeIf('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($g_textimg['image']['ID']))
		<figure class="acf-preview__media m-0">{!! wp_get_attachment_image($g_textimg['image']['ID'], 'thumbnail', false, ['class' => 'h-20 w-32 object-cover']) !!}</figure>
		@endif
		@if (!empty($g_textimg['subtitle']))
		<p>{{ $g_textimg['subtitle'] }}</p>
		@endif
		@if (!empty($g_textimg['title']))
		<p class="text-h5">{{ $g_textimg['title'] }}</p>
		@endif
		@if (!empty($g_textimg['txt']))
		<p class="acf-preview__txt">{{ wp_trim_words(wp_strip_all_tags($g_textimg['txt']), 24) }}</p>
		@endif
		@if (!empty($g_textimg['button']['title']))
		<div class="acf-preview-actions">
			<span class="acf-preview-button">{{ $g_textimg['button']['title'] }}</span>
		</div>
		@endif
	</div>
</div>
