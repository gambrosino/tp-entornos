@extends('layouts.app')

@section('content')
    <div class="columns">
        <div class="column is-4 is-offset-4">
            <form action="{{ route('login') }}" method="post">
                {{ csrf_field() }}
                <div class="field">
                    <label class="label">Email</label>
                    <div class="control">
                        <input class="input" name="email" type="email" placeholder="ej. alexsmith@gmail.com" required autofocus>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Contraseña</label>
                    <div class="control">
                        <input class="input" name="password" type="password" required>
                    </div>
                </div>
                <input type="submit" class="button is-success" value="Ingresar">
                <a  href="{{ route('password.request') }}">
                                        Olvidó su contraseña?
                </a>
            </form>
        </div>
    </div>
@endsection
