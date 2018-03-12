<form method="post" action="{{ $action }}" enctype="multipart/form-data">
	{{ csrf_field() }}
	{{ $method or null }}
	<h2 class="is-size-2">{{ $title }}</h1>
	<div class="field">
        <label class="label">Nombre del evento:</label>
        <div class="control">
          <input class="input" name="name" type="text" placeholder="ej. Fiesta de año nuevo" value="{{ $oldName or $event->name }}">
        </div>
	</div>
	<div class="field">
        <label class="label">Ciudad:</label>
        <div class="control">
          <input class="input" name="place" type="text" placeholder="ej. Rosario" value="{{ $oldPlace or $event->place }}">
        </div>
	</div>
	<div class="field">
        <label class="label">Dirección:</label>
        <div class="control">
          <input class="input" name="address" type="text" placeholder="ej. Belgrano 1334" value="{{ $oldAddress or $event->address }}">
        </div>
	</div>
	<div class="field">
        <label class="label">Fecha y hora:</label>
        <div class="control">
          <input class="input" name="date_time" type="text" placeholder="" value="{{ $oldDateTime or $event->date_time }}">
        </div>
	</div>
	<div class="field">
        <label class="label">Descripción del evento:</label>
        <div class="control">
          <textarea class="textarea" name="description" rows="5" >{{ $oldDescription or $event->description }}</textarea>
        </div>
	</div>
	<div class="field is-grouped">
		<div class="control">
			<button type="submit" class="button is-primary">
				{{ $slot }}
			</button>
		</div>
		<div class="control">
			<a href="{{ url()->previous() }}" class="button is-light">
				Cancelar
			</a>
		</div>
	</div>

</form>
<br />
<br />