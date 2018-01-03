@extends('admin.layouts.app')

@section('content')

	<div class="columns is-centered">
		<div class="column is-half">
			@component('events.partials.form')
				@slot('title')
					Crear un nuevo evento
				@endslot
				@slot('action')
					{{ route('events.store') }}
				@endslot

				Crear evento

			@endcomponent
		</div>
	</div>

@endsection