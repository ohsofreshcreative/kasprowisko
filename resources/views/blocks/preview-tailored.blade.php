<!--- tailored preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Liczby z tłem</div>
			<span class="acf-preview__slug">acf/tailored</span>
		</div>
		@includeIf('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($g_tailored['image']['ID']))
		<figure class="acf-preview__media m-0">{!! wp_get_attachment_image($g_tailored['image']['ID'], 'thumbnail', false, ['class' => 'h-20 w-32 object-cover']) !!}</figure>
		@endif
		@if (!empty($g_tailored['header']))
		<p class="text-h5">{{ $g_tailored['header'] }}</p>
		@endif
		@if (!empty($g_tailored['r_tailored']))
		<div class="acf-preview__grid grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
			@foreach (array_slice((array) $g_tailored['r_tailored'], 0, 4) as $item)
			<div class="acf-preview__card flex flex-col gap-2">
				@if (!empty($item['img']['ID']))
				<figure class="acf-preview__media m-0">{!! wp_get_attachment_image($item['img']['ID'], 'thumbnail', false, ['class' => 'h-20 w-32 object-cover']) !!}</figure>
				@endif
				@if (!empty($item['number']))
				<p class="text-h6">{{ wp_strip_all_tags($item['number']) }}</p>
				@endif
				@if (!empty($item['header']))
				<p class="acf-preview__txt">{{ $item['header'] }}</p>
				@endif
				@if (!empty($item['txt']))
				<p class="acf-preview__txt">{{ wp_trim_words(wp_strip_all_tags($item['txt']), 24) }}</p>
				@endif
			</div>
			@endforeach
		</div>
		@if (count((array) $g_tailored['r_tailored']) > 4)
		<p>+ {{ count((array) $g_tailored['r_tailored']) - 4 }} kolejnych elementów</p>
		@endif
		@endif
	</div>
</div>
