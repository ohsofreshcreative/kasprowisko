<!--- table preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Tabela</div>
			<span class="acf-preview__slug">acf/table</span>
		</div>
		@includeIf('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($g_table['header']))
		<p class="text-h5">{{ $g_table['header'] }}</p>
		@endif
		@if (!empty($g_table['r_table']))
		<p>Tabela: {{ count((array) $g_table['r_table']) }} wierszy × 3 kolumny</p>
		<div class="acf-preview__grid grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
			@foreach (array_slice((array) $g_table['r_table'], 0, 4) as $item)
			<div class="acf-preview__card flex flex-col gap-2">
				@if (!empty($item['col1']))
				<p class="acf-preview__txt">{{ wp_trim_words(wp_strip_all_tags($item['col1']), 8) }}</p>
				@endif
				@if (!empty($item['col2']))
				<p class="acf-preview__txt">{{ wp_trim_words(wp_strip_all_tags($item['col2']), 8) }}</p>
				@endif
				@if (!empty($item['col3']))
				<p class="acf-preview__txt">{{ wp_trim_words(wp_strip_all_tags($item['col3']), 8) }}</p>
				@endif
			</div>
			@endforeach
		</div>
		@if (count((array) $g_table['r_table']) > 4)
		<p>+ {{ count((array) $g_table['r_table']) - 4 }} kolejnych elementów</p>
		@endif
		@endif
		@if (!empty($g_table['info']))
		<p class="acf-preview__txt">{{ wp_trim_words(wp_strip_all_tags($g_table['info']), 24) }}</p>
		@endif
	</div>
</div>
