<!--- duo preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Treść oraz dwa zdjęcia</div>
			<span class="acf-preview__slug">acf/duo</span>
		</div>
		@includeIf('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($g_duo['image']['ID']))
		<figure class="acf-preview__media m-0">{!! wp_get_attachment_image($g_duo['image']['ID'], 'thumbnail', false, ['class' => 'h-20 w-32 object-cover']) !!}</figure>
		@endif
		@if (!empty($g_duo['image2']['ID']))
		<figure class="acf-preview__media m-0">{!! wp_get_attachment_image($g_duo['image2']['ID'], 'thumbnail', false, ['class' => 'h-20 w-32 object-cover']) !!}</figure>
		@endif
		@if (!empty($g_duo['subtitle']))
		<p>{{ $g_duo['subtitle'] }}</p>
		@endif
		@if (!empty($g_duo['title']))
		<p class="text-h5">{{ $g_duo['title'] }}</p>
		@endif
		@if (!empty($g_duo['txt']))
		<p class="acf-preview__txt">{{ wp_trim_words(wp_strip_all_tags($g_duo['txt']), 24) }}</p>
		@endif
		@if (!empty($g_duo['button']['title']))
		<div class="acf-preview-actions">
			<span class="acf-preview-button">{{ $g_duo['button']['title'] }}</span>
		</div>
		@endif
	</div>
</div>
