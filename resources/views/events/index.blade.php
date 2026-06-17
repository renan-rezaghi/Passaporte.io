<h1>Meus Eventos</h1>

<a href="/events/create">
    Criar Evento
</a>

<hr>

@forelse($events as $event)

    <h3>{{ $event->title }}</h3>

    <p>{{ $event->description }}</p>

    <p>
        Local: {{ $event->location }}
    </p>

   <p>
    Capacidade: {{ $event->capacity }}
</p>

<a href="{{ route('events.edit', $event->id) }}">
    Editar
</a>

<form
    action="{{ route('events.destroy', $event->id) }}"
    method="POST"
>
    @csrf
    @method('DELETE')

    <button type="submit">
        Excluir
    </button>
</form>

<hr>
    <hr>

@empty

    <p>Nenhum evento cadastrado.</p>

@endforelse