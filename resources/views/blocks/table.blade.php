@php
$sectionClass = '';
$sectionClass .= $flip ? ' order-flip' : '';
$sectionClass .= $wide ? ' wide' : '';
$sectionClass .= $nomt ? ' !mt-0' : '';
$sectionClass .= $gap ? ' wider-gap' : '';

if (!empty($background) && $background !== 'none') {
$sectionClass .= ' ' . $background;
}
@endphp


<!--- table --->

<section data-gsap-anim="section" @if(!empty($section_id)) id="{{ $section_id }}" @endif class="b-table -smt {{ $sectionClass }} {{ $section_class }}">

	<div class="__wrapper c-main">
		<div class="">
			@if (!empty($g_table['header']))
			<h3 class="text-white">{{ strip_tags($g_table['header']) }}</h3>
			@endif

			<div class="__table w-full mt-10">
				@foreach ($g_table['r_table'] as $item)
				<div class="__row grid grid-cols-3 md:grid-cols-[2fr_1fr_1fr] gap-8 md:gap-20 p-2 b-border-b">
					<div class="text-white">{!! $item['col1'] !!}</div>
					<div class="text-white">{!! $item['col2'] !!}</div>
					<div class="text-white">{!! $item['col3'] !!}</div>
				</div>
				@endforeach
			</div>
			@if (!empty($g_table['info']))
			<div class="__info text-white mt-8">
				{!! $g_table['info'] !!}
			</div>
			@endif
		</div>

	</div>
	</div>

</section>