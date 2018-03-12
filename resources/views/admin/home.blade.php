@extends('layouts.app')

@section('content')
	<section class="hero">
		<div class="hero-body">
			<div class="container">
			    <h1 class="title">
			        Mis eventos
			    </h1>
			    <h2 class="subtitle">
			        Desde aquí podrás administrar tus eventos activos, consultar
			        eventos anteriores y crear nuevos eventos.
			    </h2>
			    <br>
			    <a href="{{ route('events.create') }}" class="button is-primary">+ Crear evento</a>
			</div>
		</div>
	</section>
	<section class="section">
		<div class="container">
			<h2 class="title is-4">
			    Lista de eventos
			</h2>
			<table class="table is-striped is-fullwidth" style="border-collapse:separate;">
				<thead>
					<tr>
						<th>Fecha</th>
						<th>Nombre Evento</th>
						<th>Personas registradas</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
				  	@forelse($events as $event)
					    <tr data-id="{{ $event->id }}">
							<td>{{ $event->date_time->format('d-m-Y') }}</td>
							<td>
								<a href="{{ route('events.show', ['event' => $event->id]) }}"
								target="_blank" class="has-text-info">
									{{ $event->name }}
								</a>
							</td>
							<td>{{ $event->getAttendantsCount() }}</td>
							<td class="level">
								<div class="level-left">
									<a href="{{ route('events.edit', ['event' => $event->id]) }}" class="level-item button is-small is-outlined is-black">
										Editar
									</a>
									<a href="#" class="level-item button is-small is-outlined is-success">
										Enviar emails
									</a>
									<a href="#" class="level-item button is-small is-danger deleteButton">
										Eliminar
									</a>
								</div>
							</td>
					    </tr>
				    @empty
				    	<tr>
							<td colspan="4">
								Todavía no creaste ningún evento, ¡empezá ahora!
								<a href="#" class="button is-primary is-small">Crear evento</a>
							</td>
						</tr>
				    @endforelse
				</tbody>
				<tfoot>
				    <tr>
						<td colspan="4">
							{{ $events->links() }}
						</td>
				    </tr>
				</tfoot>
			</table>
		</div>
	</section>

	@include('events.partials.delete')

@endsection