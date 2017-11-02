@extends('layouts.app')

@section('content')
	<section class="hero is-info is-bold">
            <div class="hero-body">
                <div class="container">
                  <div class="level">
                    <div class="level-item has-text-centered">
                      <div>
                        <p class="heading">Lugar</p>
                        <p class="title">{{ $event->place }}</p>
                      </div>
                    </div>
                    <div class="level-item has-text-centered">
                      <div>
                        <p class="heading">Fecha</p>
                        <p class="title">{{ $event->date_time->format('d-m-Y') }}</p>
                      </div>
                    </div>
                    <div class="level-item has-text-centered">
                      <div>
                        <p class="heading">Hora</p>
                        <p class="title">{{ $event->date_time->format('H:i') }}</p>
                      </div>
                    </div>
                    <div class="level-item has-text-centered">
                      <div>
                        <p class="heading">Asistirán</p>
                        <p class="title">{{ $event->getAttendantsCount() }}</p>
                      </div>
                    </div>
                    <div class="level-item has-text-centered">
                      <div>
                        <a class="heading">
                          <span class="icon is-small"><i class="fa fa-heart"></i></span>
                        </a>
                        <p class="title">{{ $event->getLikesCount() }}</p>
                      </div>
                    </div>
                  </div>
                  <div class="columns">
                    <div class="column is-4">
                      <figure class="media-left is-hidden-mobile">
                          <p class="image is-square">
                          <img src="http://via.placeholder.com/256">
                          </p>
                      </figure>
                    </div>
                    <div class="column">
                      <h1 class="title">
						{{ $event->name }}
                      </h1>
                      <div class="level is-mobile">
                        <div class="level-left">
                          <h2 class=" level-item subtitle">
                            {{ $event->address.', '.$event->place }}
                          </h2>
                          <a class="level-item button is-small">
                            Ver Mapa
                          </a>
                        </div>
                        <div class="level-right">
                        </div>
                      </div>
                      <p>
                          {{ $event->description }}
                      </p>
                      <div class="tags">
                        <span class="tag is-dark">Año nuevo</span>
                        <span class="tag is-dark">Fiesta</span>
                        <span class="tag is-dark">Rosario</span>
                      </div>
                      <br>
                      <a href="#" class="button is-primary is-medium">¡Quiero asistir!</a>
                    </div>
                  </div>
                </div>
            </div>
        </section>
        <br />
		    {{-- Comments --}}
        {{-- Modal Register --}}
@endsection