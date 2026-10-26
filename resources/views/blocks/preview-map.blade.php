<!--- map preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Mapa</div>
			<span class="acf-preview__slug">acf/map</span>
		</div>
		@includeIf('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($g_map['title']))
		<p class="text-h5">{{ $g_map['title'] }}</p>
		@endif
		@if (!empty($g_map['code']))
		<p>Mapa osadzona z kodu</p>
		@endif
	</div>
</div>
