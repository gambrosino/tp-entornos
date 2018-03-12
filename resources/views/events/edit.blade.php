@extends('admin.layouts.app')

@section('content')

	<div class="columns is-centered">
		<div class="column is-half">
			@component('events.partials.form', ['event' =>$event])
				@slot('method')
					<input type="hidden" name="_method" value="patch">
				@endslot
				@slot('title')
					Editar evento
				@endslot
				@slot('action')
					{{ route('events.update', ['event' => $event->id]) }}
				@endslot

				Guardar evento

			@endcomponent
		</div>
	</div>

@endsection