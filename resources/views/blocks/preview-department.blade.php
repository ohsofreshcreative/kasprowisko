<!--- department preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Kontat - Działy</div>
			<span class="acf-preview__slug">acf/department</span>
		</div>
		@includeIf('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($g_department['title']))
		<p class="text-h5">{{ $g_department['title'] }}</p>
		@endif
		@if (!empty($g_department['r_department']))
		<div class="acf-preview__grid grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
			@foreach (array_slice((array) $g_department['r_department'], 0, 4) as $item)
			<div class="acf-preview__card flex flex-col gap-2">
				@if (!empty($item['card_title']))
				<p class="text-h6">{{ $item['card_title'] }}</p>
				@endif
				@if (!empty($item['card_txt']))
				<p class="acf-preview__txt">{{ wp_trim_words(wp_strip_all_tags($item['card_txt']), 24) }}</p>
				@endif
				@if (!empty($item['phone']))
				<p class="acf-preview__txt">{{ $item['phone'] }}</p>
				@endif
				@if (!empty($item['mail']))
				<p class="acf-preview__txt">{{ $item['mail'] }}</p>
				@endif
			</div>
			@endforeach
		</div>
		@if (count((array) $g_department['r_department']) > 4)
		<p>+ {{ count((array) $g_department['r_department']) - 4 }} kolejnych elementów</p>
		@endif
		@endif
	</div>
</div>
