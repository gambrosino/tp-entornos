@extends('layouts.app')

@section('content')
<section class="section">
            <div class="container">
                <h2 class="title is-4">
                    Destacados
                </h2>
                @forelse ($events as $event)
					<article class="media">
                    <figure class="media-left is-hidden-mobile">
                        <p class="image is-128x128">
                        <img src="http://via.placeholder.com/128">
                        </p>
                    </figure>
                    <div class="media-content">
                        <div class="content">
                            <div class="level is-mobile">
                                <div class="level-item has-text-centered">
                                    <div>
                                    <p class="heading">Ciudad</p>
                                    <p class="title is-7">{{ $event->place }}</p>
                                    </div>
                                </div>
                                <div class="level-item has-text-centered">
                                    <div>
                                    <p class="heading">Fecha</p>
                                    <p class="title is-7">{{ $event->date_time->format('d-m-Y') }}</p>
                                    </div>
                                </div>
                                <div class="level-item has-text-centered">
                                    <div>
                                    <p class="heading">Hora</p>
                                    <p class="title is-7">{{ $event->date_time->format('H:i') }}</p>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('events.show', ['event' => $event->id]) }}">
	                            <h4>
	                                {{ $event->name }}
								</h4>
                            </a>
                            <p>
                                {{ $event->description }}
                            </p>
                        </div>
                    </div>
                </article>
                @empty
					<h2>No hay eventos disponibles</h2>
                @endforelse
            </div>
        </section>

@endsection