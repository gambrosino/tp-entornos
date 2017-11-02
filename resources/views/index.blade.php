@extends('layouts.app')

@section('content')
        <section class="hero is-medium is-info is-bold">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title">
                        ¡El mejor lugar para publicar eventos!
                    </h1>
                    <h2 class="subtitle">
                        Facilitamos la gestión de eventos, brindando toda la información necesaria a los organizadores
                        y un registro sencillo a su audiencia.
                    </h2>
                    <p>
                        Difundir un evento es muy sencillo, solamente debe crearlo y nosotros nos encargamos de difundirlo en
                        sus redes sociales, inscribir a los interesados y enviarles recordatorios.
                    </p>
                    <p>
                        Además siempre contará con información actualizada sobre la concurrencia a su evento, podrá manejar cupos
                        de audiencia, listas de espera, enviar mensajes a los participantes, ¡y mucho más!
                    </p><br>

                    <a href="#" class="button is-primary is-medium">Registrarse</a>
                </div>
            </div>
        </section>
        <br>
        <section class="section">
            <div class="container">
                <h2 class="title is-4">
                    Destacados
                </h2>
                <article class="media">
                    <figure class="media-left is-hidden-mobile">
                        <p class="image is-128x128">
                        <img src="http://via.placeholder.com/128">
                        </p>
                    </figure>
                    <div class="media-content">
                        <div class="content">
                            <nav class="level is-mobile">
                                <div class="level-item has-text-centered">
                                    <div>
                                    <p class="heading">Ciudad</p>
                                    <p class="title is-7">Rosario</p>
                                    </div>
                                </div>
                                <div class="level-item has-text-centered">
                                    <div>
                                    <p class="heading">Fecha</p>
                                    <p class="title is-7">20/12/2017</p>
                                    </div>
                                </div>
                                <div class="level-item has-text-centered">
                                    <div>
                                    <p class="heading">Hora</p>
                                    <p class="title is-7">00:00</p>
                                    </div>
                                </div>
                            </nav>
                            <p>
                                <strong>Evento 3</strong>
                                <br>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem.
                            </p>
                        </div>
                    </div>
                </article>

                <article class="media">
                    <figure class="media-left is-hidden-mobile">
                        <p class="image is-128x128">
                        <img src="http://via.placeholder.com/128">
                        </p>
                    </figure>
                    <div class="media-content">
                        <div class="content">
                            <nav class="level is-mobile">
                                <div class="level-item has-text-centered">
                                    <div>
                                    <p class="heading">Ciudad</p>
                                    <p class="title is-7">Rosario</p>
                                    </div>
                                </div>
                                <div class="level-item has-text-centered">
                                    <div>
                                    <p class="heading">Fecha</p>
                                    <p class="title is-7">20/12/2017</p>
                                    </div>
                                </div>
                                <div class="level-item has-text-centered">
                                    <div>
                                    <p class="heading">Hora</p>
                                    <p class="title is-7">00:00</p>
                                    </div>
                                </div>
                            </nav>
                            <p>
                                <strong>Evento 4</strong>
                                <br>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                            </p>
                        </div>
                    </div>
                </article>
            </div>
        </section>
@endsection
