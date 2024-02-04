@extends('layouts.admin')


@section('content')
<!--Section Card-->
<div class="container">
    <h1 class="text-center"><strong>Benvenuto</strong></h1>
    <div class="row">
        @foreach ($projects as $project)
        <div class="col-4">
            <div class="card mb-3" style="width: 18rem;">
                <img src="{{ $project->image }}" class="card-img-top " alt="..." style=" height: 23rem;">
                <div class="card-body">
                    <h5 class="card-title"><strong>{{ $project->name }} </strong></h5>
                    <p class="card-text">{{ $project->description }}</p>
                    <p class="card-text"><strong>Data creazione</strong> {{ $project->dataCreation }}</p>
                    <p class="card-text"><strong>Language</strong> {{ $project->language }}</p>
                    <p><strong>Categoria: </strong> {{ $project->type->name ?? "N/A"  }}</p>

                    @if (count($project->technologies) > 0)
                                    <ul>
                                        @foreach ($project->technologies as $technology)
                                            <li>{{ $technology->name }}</li>
                                        @endforeach
                                    </ul>
                                @else
                                    <span>Non ci sono tecnologie collegati</span>
                                @endif
                    <span class="d-flex gap-2 ">
                        <a href="{{route('admin.projects.show', $project->id)}}" class="btn btn-primary ">Dettagli</a>
                        <a href="{{ route('admin.projects.edit', $project->id) }}"class="btn btn-warning ">Modifica</a>
                        <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST"
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