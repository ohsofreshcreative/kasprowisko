<!--- benefit preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Treść oraz zdjęcie + lista korzyści</div>
			<span class="acf-preview__slug">acf/benefit</span>
		</div>
		@includeIf('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($g_benefit['subtitle']))
		<p>{{ $g_benefit['subtitle'] }}</p>
		@endif
		@if (!empty($g_benefit['top']))
		<p>{{ $g_benefit['top'] }}</p>
		@endif
		@if (!empty($g_benefit['image']['ID']))
		<figure class="acf-preview__media m-0">{!! wp_get_attachment_image($g_benefit['image']['ID'], 'thumbnail', false, ['class' => 'h-20 w-32 object-cover']) !!}</figure>
		@endif
		@if (!empty($g_benefit['title']))
		<p class="text-h5">{{ $g_benefit['title'] }}</p>
		@endif
		@if (!empty($g_benefit['txt']))
		<p class="acf-preview__txt">{{ wp_trim_words(wp_strip_all_tags($g_benefit['txt']), 24) }}</p>
		@endif
		@if (!empty($g_benefit['button']['title']))
		<div class="acf-preview-actions">
			<span class="acf-preview-button">{{ $g_benefit['button']['title'] }}</span>
		</div>
		@endif
		@if (!empty($r_benefit))
		<div class="acf-preview__grid grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
			@foreach (array_slice((array) $r_benefit, 0, 4) as $item)
			<div class="acf-preview__card flex flex-col gap-2">
				@if (!empty($item['title']))
				<p class="acf-preview__txt">{{ $item['title'] }}</p>
				@endif
			</div>
			@endforeach
		</div>
		@if (count((array) $r_benefit) > 4)
		<p>+ {{ count((array) $r_benefit) - 4 }} kolejnych elementów</p>
		@endif
		@endif
	</div>
</div>
