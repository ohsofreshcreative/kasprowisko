@php
$sectionClass = '';
$sectionClass .= $flip ? ' order-flip' : '';
@endphp

@php
$backgroundImage = !empty($g_start['image']['url']) ? "linear-gradient(90deg, rgba(63, 0, 0, 1) 40%, rgba(25, 0, 0, 0.3) 100%), url({$g_start['image']['url']})" : '';
@endphp

<!-- start -->

<section data-gsap-anim="section" @if(!empty($section_id)) id="{{ $section_id }}" @endif class="b-start relative {{ $sectionClass }} {{ $section_class }}" style="background-image: {{ $backgroundImage }}; background-size: cover; background-position: center;">

	<div class="__wrapper c-main grid grid-cols-1 md:grid-cols-2 items-center gap-10 {{ !empty($g_start['image']) ? 'py-50' : '' }}">

		<div class="__content relative z-10">
			
			<h1 data-gsap-element="header" class="text-white m-header">{{ $g_start['header'] }}</h1>

			<div data-gsap-element="text" class="text-white text-xl">{{ strip_tags($g_start['text']) }}</div>

            <div data-gsap-element="info" class="__info flex flex-col md:flex-row gap-6 mt-6">
                <div class="flex items-center gap-2">
                    <div>
                        <img src="/wp-content/uploads/2025/11/calendar.svg" />
                    </div>
                    <div class="text-white">
                        {!! $g_start['date'] !!}
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <div>
                        <img src="/wp-content/uploads/2025/11/place.svg" />
                    </div>
                    <div class="">
                        <a class="text-white !underline" target="_blank" href="{!! $g_start['link'] !!}">{!! $g_start['place'] !!}</a>
                    </div>
                </div>
            </div>

			@if (!empty($g_start['button1']))
			<div class="inline-buttons m-btn">
				<a data-gsap-element="button" class="second-btn left-btn" href="{{ $g_start['button1']['url'] }}" target="{{ $g_start['button1']['target'] }}">{{ $g_start['button1']['title'] }}</a>

				@if (!empty($g_start['button2']))
				<a data-gsap-element="button" class="white-btn" href="{{ $g_start['button2']['url'] }}" target="{{ $g_start['button2']['target'] }}">{{ $g_start['button2']['title'] }}</a>
				@endif
			</div>
			@endif
		</div>

		<div class="contact-form-container bg-primary p-10 mt-4">
				{!! do_shortcode('[contact-form-7 id="4589bd2" title="Contact - EN"]') !!}
			</div>
	</div>

</section>