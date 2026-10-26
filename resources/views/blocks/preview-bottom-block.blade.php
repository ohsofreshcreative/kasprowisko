<!--- bottom-block preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Wezwanie do działania - Stopka</div>
			<span class="acf-preview__slug">acf/bottom-block</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($bottom['image']['ID']))
		<figure class="acf-preview__media m-0">{!! wp_get_attachment_image($bottom['image']['ID'], 'thumbnail', false, ['class' => 'h-20 w-32 object-contain']) !!}</figure>
		@endif
		@if (!empty($bottom['subtitle']))
		<p>{{ wp_strip_all_tags($bottom['subtitle']) }}</p>
		@endif
		@if (!empty($bottom['title']))
		<p class="text-h5">{{ $bottom['title'] }}</p>
		@endif
		@if (!empty($bottom['txt']))
		<p>{{ wp_trim_words(wp_strip_all_tags($bottom['txt']), 24) }}</p>
		@endif
		@if (!empty($bottom['button']['title']))
		<div class="acf-preview-actions">
			<span class="acf-preview-button">{{ $bottom['button']['title'] }}</span>
		</div>
		@endif
		<p>Treść pobierana z ustawień globalnych</p>
	</div>
</div>
