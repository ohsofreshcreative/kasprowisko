<!--- team preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Nasz zespół</div>
			<span class="acf-preview__slug">acf/team</span>
		</div>
		@includeIf('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($g_team['subtitle']))
		<p>{{ $g_team['subtitle'] }}</p>
		@endif
		@if (!empty($g_team['title']))
		<p class="text-h5">{{ $g_team['title'] }}</p>
		@endif
		@if (!empty($g_team['content']))
		<p class="acf-preview__txt">{{ wp_trim_words(wp_strip_all_tags($g_team['content']), 24) }}</p>
		@endif
		@if (!empty($repeater))
		<div class="acf-preview__grid grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
			@foreach (array_slice((array) $repeater, 0, 4) as $item)
			<div class="acf-preview__card flex flex-col gap-2">
				@if (!empty($item['card_image']['ID']))
				<figure class="acf-preview__media m-0">{!! wp_get_attachment_image($item['card_image']['ID'], 'thumbnail', false, ['class' => 'h-20 w-32 object-cover']) !!}</figure>
				@endif
				@if (!empty($item['card_title']))
				<p class="text-h6">{{ $item['card_title'] }}</p>
				@endif
				@if (!empty($item['card_function']))
				<p class="acf-preview__txt">{{ $item['card_function'] }}</p>
				@endif
				@if (!empty($item['card_mail']))
				<p class="acf-preview__txt">{{ $item['card_mail'] }}</p>
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
