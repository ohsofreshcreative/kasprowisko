<!--- partners-block preview --->

@php
$r_partners = function_exists('get_field') ? get_field('r_partners', 'option') : [];
@endphp

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Partnerzy</div>
			<span class="acf-preview__slug">acf/partners-block</span>
		</div>
		@includeIf('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		<p>Logotypy edytowane w menu „Partnerzy”</p>
		@foreach (array_slice((array) ($r_partners ?? []), 0, 4) as $group)
			@if (!empty($group['header']))
			<p class="text-h5">{{ $group['header'] }}</p>
			@endif
			@if (!empty($group['logos']))
			<div class="acf-preview__logo-list flex flex-wrap">
				@foreach (array_slice((array) $group['logos'], 0, 8) as $logo)
				@if (!empty($logo['img']['ID']))
				<figure class="acf-preview__media m-0">{!! wp_get_attachment_image($logo['img']['ID'], 'thumbnail', false, ['class' => 'h-20 w-32 object-cover']) !!}</figure>
				@elseif (!empty($logo['img']['url']))
				<figure class="acf-preview__media m-0"><img src="{{ $logo['img']['url'] }}" alt="{{ $logo['img']['alt'] ?? '' }}" class="h-20 w-32 object-cover"></figure>
				@endif
				@endforeach
			</div>
			@endif
		@endforeach
	</div>
</div>
