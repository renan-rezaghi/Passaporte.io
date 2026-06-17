<h1>Editar Evento</h1>

<form
    action="{{ route('events.update', $event->id) }}"
    method="POST"
>

    @csrf
    @method('PUT')

    <div>
        <label>Título</label>
        <br>

        <input
            type="text"
            name="title"
            value="{{ $event->title }}"
        >
    </div>

    <br>

    <div>
        <label>Descrição</label>
        <br>

        <textarea name="description">{{ $event->description }}</textarea>
    </div>

    <br>

    <button type="submit">
        Atualizar Evento
    </button>

</form>