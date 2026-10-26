<!--- offer-cards-block preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Kafelki oferty</div>
			<span class="acf-preview__slug">acf/offer-cards-block</span>
		</div>
		@includeIf('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($subtitle))
		<p>{{ $subtitle }}</p>
		@endif
		@if (!empty($title))
		<p class="text-h5">{{ $title }}</p>
		@endif
		@if (!empty($content))
		<p class="acf-preview__txt">{{ wp_trim_words(wp_strip_all_tags($content), 24) }}</p>
		@endif
		<p>Zakładki z ofertami pobierane automatycznie wg kategorii</p>
	</div>
</div>
