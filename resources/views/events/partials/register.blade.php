<div id="modal-register" class="modal">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Registrese para asistir al evento</p>
      <button class="close" aria-label="close"></button>
    </header>
    <section class="modal-card-body">
      <form action="#">
        <div class="field">
          <label class="label">Nombre y apellido</label>
          <div class="control">
            <input class="input" type="text" placeholder="ej. Alex Smith">
          </div>
        </div>
        <div class="field">
          <label class="label">DNI</label>
          <div class="control">
            <input class="input" type="number" placeholder="ej. 35792345">
          </div>
        </div>
        <div class="field">
          <label class="label">Email</label>
          <div class="control">
            <input class="input" type="email" placeholder="ej. alexsmith@gmail.com">
          </div>
        </div>
      </form>
    </section>
    <footer class="modal-card-foot">
      <button class="button is-success">Registrarse</button>
      <button class="button close">Cancelar</button>
    </footer>
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