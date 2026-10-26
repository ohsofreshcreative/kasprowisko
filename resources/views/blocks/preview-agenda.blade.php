<!--- agenda preview --->

<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Agenda2</div>
			<span class="acf-preview__slug">acf/agenda</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content">
		@if (!empty($agenda_data['header1']))
		<p>{{ $agenda_data['header1'] }}</p>
		@endif
		@if (!empty($agenda_data['header2']))
		<p class="text-h5">{{ $agenda_data['header2'] }}</p>
		@endif
		@if (!empty($agenda_data['btn1']['title']))
		<div class="acf-preview-actions">
			<span class="acf-preview-button">{{ $agenda_data['btn1']['title'] }}</span>
		</div>
		@endif
		@if (!empty($agenda_data['tabs']))
		<div class="acf-preview__grid grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
			@foreach (array_slice((array) $agenda_data['tabs'], 0, 4) as $item)
			<div class="acf-preview__card">
				@if (!empty($item['day']))
				<p class="text-h5">{{ $item['day'] }}</p>
				@endif
				@if (!empty($item['date']))
				<p>{{ $item['date'] }}</p>
				@endif
			</div>
			@endforeach
		</div>
		@endif
		<p>Treść agendy pobierana z ustawień (Opcje → Agenda)</p>
	</div>
</div>
