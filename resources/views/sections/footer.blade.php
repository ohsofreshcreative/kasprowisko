<footer class="footer">
	<div class="__wrap bg-dark">
		<div class="__wrapper c-main">
			<div class="__widgets grid gap-1 md:gap-6 pt-0 pb-30 md:py-36">
				@for ($i = 1; $i <= 4; $i++)
					@if (is_active_sidebar('sidebar-footer-' . $i))
					<div>@php(dynamic_sidebar('sidebar-footer-' . $i))</div>
			@endif
			@endfor
		</div>
	</div>
	</div>

	<div class="c-main footer-bottom text-white flex flex-col md:flex-row justify-between gap-6 py-10 ">
		<p class="">Copyright ©{{ date('Y') }} {{ get_bloginfo('name') }}. All Rights Reserved</p>
		<p class="flex gap-2">Designed &amp; Developed by
			<a target="_blank" rel="nofollow" href="https://www.ohsofresh.pl" title="OhSoFresh"><img class="oh" src="{{ get_template_directory_uri() }}/resources/images/ohsofresh.svg" alt="OhSoFresh"></a>
		</p>
	</div>
	</div>
</footer>