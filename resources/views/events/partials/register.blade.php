<div id="modal-register" class="modal">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Registrese para asistir al evento</p>
      <button class="close" aria-label="close"></button>
    </header>
      <form action="{{ route('attendants.store') }}" method="post">
        <section class="modal-card-body">
          {{ csrf_field() }}
          <input type="hidden" name="event" value="{{ $event->id }}">
          <div class="field">
            <label class="label">Nombre y apellido</label>
            <div class="control">
              <input class="input" name="name" type="text" placeholder="ej. Alex Smith">
            </div>
          </div>
          <div class="field">
            <label class="label">DNI</label>
            <div class="control">
              <input class="input" name="dni" type="string" placeholder="ej. 35792345">
            </div>
          </div>
          <div class="field">
            <label class="label">Email</label>
            <div class="control">
              <input class="input" name="email" type="email" placeholder="ej. alexsmith@gmail.com">
            </div>
          </div>
        </section>
        <footer class="modal-card-foot">
          <input type="submit" class="button is-success" value="Registrarse">
          <button class="button close">Cancelar</button>
        </footer>
      </form>
  </div>
</div>

@section('js-import')
  <script type="text/javascript">
    const modal = document.getElementById('modal-register');
    function toggleActive() {
      modal.classList.toggle('is-active');
    }

    const registerButton = document.querySelector('.registerButton');
    registerButton.addEventListener('click', toggleActive);

    Array.from(document.querySelectorAll('.close')).forEach(function(button) {
      button.addEventListener('click', toggleActive);
    })
  </script>
@endsection