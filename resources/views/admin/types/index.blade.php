@extends('layouts.admin')


@section('content')
<!--Section Card-->
<div class="container">
    <h1 class="text-center"><strong>Categoria</strong></h1>
    <div class="row">
        @foreach ($types as $type)
        <div class="col-4">
            <div class="card mb-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><strong>{{ $type->name }} </strong></h5>
                    <p class="card-text">{{ $type->description }}</p>
                    <span class="d-flex gap-2 ">
                        <a href="{{route('admin.types.show', $type->id)}}" class="btn btn-primary ">Dettagli</a>
                        <a href="{{ route('admin.types.edit', $type->id) }}"class="btn btn-warning ">Modifica</a>
                        <form action="{{ route('admin.types.destroy', $type->id) }}" method="POST"
                            class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Cancella" class="btn btn-danger">
                        </form>

                    </span>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection