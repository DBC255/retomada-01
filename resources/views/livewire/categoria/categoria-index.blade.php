<div>
    <table class="table table-striped">
        <thead>
            <th>id</th>
            <th>nome</th>
            <th>ações</th>
        </thead>
        <tbody>
            @foreach ($categorias as $c)
                <td>{{$c->id}}</td>
                <td>{{$c->nome}}</td>
                <td>
                    <a class="theme-inverse btn-solid btn-styled" href="{{ route('categoria.edit', $c->id) }}">Editar</a>
                    <button type="submit" class="theme-danger btn-solid btn-styled" wire:click='delete({{$c->id}})'>deletar</button>
                </td>
            @endforeach
        </tbody>
    </table>
    <a class="theme-info btn-solid btn-styled" href="{{route('categoria.create')}}">+</a>


    {{-- The best athlete wants his opponent at his best. --}}
</div>
