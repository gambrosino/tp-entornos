<div id="modal-delete" class="modal">
    <div class="modal-background"></div>
    <div class="modal-card">
            <header class="modal-card-head">
                    <p class="modal-card-title">Eliminar evento</p>
                    <button class="close" aria-label="close"></button>
            </header>
                    <form action="{{ route('events.destroy', ['id' => ':id']) }}" method="post" class="delete-event">
                            <section class="modal-card-body">
                                    <p>
                                        ¿Desea eliminar el evento "<span class="event-name"></span>"
                                        del día <span class="event-date"></span>
                                        en <span class="event-place"></span>?
                                    </p>
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                            </section>
                            <footer class="modal-card-foot">
                                    <input type="submit" class="button is-danger" value="Eliminar">
                                    <a href="#" class="button close">Cancelar</a>
                            </footer>
                    </form>
    </div>
</div>

@section('js-import')
    <script type="text/javascript">
            const modal = document.getElementById('modal-delete');

            async function fetchEvent(id) {
               const response = await axios.get('eventos/' + id);
               return response.data;
            }

            function fillModal(event) {
                const form = document.querySelector('form.delete-event');
                const action = form.action.replace(':id', event.id);
                form.action = action;
                const eventName = document.querySelector('.event-name');
                const eventDate = document.querySelector('.event-date');
                const eventPlace = document.querySelector('.event-place');
                eventName.innerText = event.name;
                const date = new Date(event.date_time.date);
                eventDate.innerText = `${date.getDate()}/${date.getMonth()}/${date.getFullYear()}`;
                eventPlace.innerText = event.place;
            }

            function toggleActive() {
                    modal.classList.toggle('is-active');
            }

            function getEventId(button) {
                return button.closest('tr').dataset.id;
            }

            async function showModal() {
                const id = getEventId(this);
                const event = await fetchEvent(id);
                fillModal(event);
                toggleActive();
            }


            Array.from(document.querySelectorAll('.deleteButton')).forEach(function(button) {
                    button.addEventListener('click', showModal);
            })

            Array.from(document.querySelectorAll('.close')).forEach(function(button) {
                    button.addEventListener('click', toggleActive);
            })
    </script>
@endsection