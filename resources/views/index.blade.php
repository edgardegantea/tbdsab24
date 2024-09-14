<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<div class="container">

@if($categorias->isEmpty())
    <p>No hay categorías.</p>
@else
    <div class="row">
        @foreach($categorias as $categoria)
            <div class="col-md-3 mr-2 ml-2">
                <div class="card">
                    <div class="card-body">
                        {{ $categoria->nombre }}
                        <p>{{ $categoria->descripcion }}</p>
                        <p>{{ $categoria->created_at }}</p>
                    </div>
                </div>
            </div>
        @endforeach
</div>
@endif

</div>