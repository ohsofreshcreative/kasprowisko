<!--- faq preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Najczęściej zadawane pytania</div>
			<span class="acf-preview__slug">acf/faq</span>
		</div>
		@includeIf('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($faq['title']))
		<p class="text-h5">{{ $faq['title'] }}</p>
		@endif
		@if (!empty($faq['content']))
		<p class="acf-preview__txt">{{ wp_trim_words(wp_strip_all_tags($faq['content']), 24) }}</p>
		@endif
		@if (!empty($faq['button']['title']))
		<div class="acf-preview-actions">
			<span class="acf-preview-button">{{ $faq['button']['title'] }}</span>
		</div>
		@endif
		@if (!empty($repeater))
		<div class="acf-preview__grid grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
			@foreach (array_slice((array) $repeater, 0, 4) as $item)
			<div class="acf-preview__card flex flex-col gap-2">
				@if (!empty($item['title']))
				<p class="text-h6">{{ $item['title'] }}</p>
				@endif
				@if (!empty($item['txt']))
				<p class="acf-preview__txt">{{ wp_trim_words(wp_strip_all_tags($item['txt']), 24) }}</p>
				@endif
			</div>
			@endforeach
		</div>
		@if (count((array) $repeater) > 4)
		<p>+ {{ count((array) $repeater) - 4 }} kolejnych elementów</p>
		@endif
		@endif
	</div>
</div>
