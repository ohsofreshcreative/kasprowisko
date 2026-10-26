<!--- twocolumns preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Dwie kolumny</div>
			<span class="acf-preview__slug">acf/twocolumns</span>
		</div>
		@includeIf('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		<div class="acf-preview__grid grid grid-cols-1 sm:grid-cols-2">
			@if (!empty($col1))
			<div class="acf-preview__card flex flex-col gap-2">
				@if (!empty($col1['image']['ID']))
				<figure class="acf-preview__media m-0">{!! wp_get_attachment_image($col1['image']['ID'], 'thumbnail', false, ['class' => 'h-20 w-32 object-cover']) !!}</figure>
				@endif
				@if (!empty($col1['title']))
				<p class="acf-preview__txt">{{ $col1['title'] }}</p>
				@endif
				@if (!empty($col1['header']))
				<p class="text-h6">{{ $col1['header'] }}</p>
				@endif
				@if (!empty($col1['content']))
				<p class="acf-preview__txt">{{ wp_trim_words(wp_strip_all_tags($col1['content']), 24) }}</p>
				@endif
			</div>
			@endif
			@if (!empty($col2))
			<div class="acf-preview__card flex flex-col gap-2">
				@if (!empty($col2['image']['ID']))
				<figure class="acf-preview__media m-0">{!! wp_get_attachment_image($col2['image']['ID'], 'thumbnail', false, ['class' => 'h-20 w-32 object-cover']) !!}</figure>
				@endif
				@if (!empty($col2['where']))
				<p class="acf-preview__txt">{{ wp_strip_all_tags($col2['where']) }}</p>
				@endif
				@if (!empty($col2['when']))
				<p class="acf-preview__txt">{{ wp_strip_all_tags($col2['when']) }}</p>
				@endif
				@if (!empty($col2['button1']['title']) || !empty($col2['button2']['title']))
				<div class="acf-preview-actions">
					@if (!empty($col2['button1']['title']))
					<span class="acf-preview-button">{{ $col2['button1']['title'] }}</span>
					@endif
					@if (!empty($col2['button2']['title']))
					<span class="acf-preview-button">{{ $col2['button2']['title'] }}</span>
					@endif
				</div>
				@endif
			</div>
			@endif
		</div>
	</div>
</div>
