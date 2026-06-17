<h1>Criar Evento</h1>

<form method="POST" action="{{ route('events.store') }}">
    @csrf

    <div>
        <label>Título</label>
        <br>
        <input type="text" name="title">
    </div>

    <br>

    <div>
        <label>Descrição</label>
        <br>
        <textarea name="description"></textarea>
    </div>

    <br>

    <div>
        <label>Categoria</label>
        <br>
<select name="category_id">

    @foreach($categories as $category)

        <option value="{{ $category->id }}">
            {{ $category->name }}
        </option>

    @endforeach

</select>
    </div>

    <br>

    <div>
        <label>Data e Hora</label>
        <br>
        <input type="datetime-local" name="date_time">
    </div>

    <br>

    <div>
        <label>Local</label>
        <br>
        <input type="text" name="location">
    </div>

    <br>

    <div>
        <label>Capacidade</label>
        <br>
        <input type="number" name="capacity">
    </div>

    <br>

    <button type="submit">
        Salvar Evento
    </button>

</form>