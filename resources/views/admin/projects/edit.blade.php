@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2 class="mt-3 text-center">Modifica proggetto</h2>
        </div>
        <div class="row">
            <form action="{{ route('admin.projects.update', $project->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $project->name }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" id="description" name="description"
                        value="{{ $project->description }}">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Imagine</label>
                    <input type="text" class="form-control" id="image" name="image" value="{{ $project->image }}">
                </div>
                <div class="mb-3">
                    <label for="dataCreation" class="form-label">Data creazione</label>
                    <input type="text" class="form-control" id="dataCreation" name="dataCreation"
                        value="{{ $project->dataCreation }}">
                </div>
                <div class="mb-3">
                    <label for="language" class="form-label">Lingua</label>
                    <input type="text" class="form-control" id="language" name="language"
                        value="{{ $project->language }}">
                </div>

                <div class="mb-3">
                    <label for="type_id" class="form-label">Seleziona una categoria</label>
                    <select name="type_id" id="type_id" class="form-select">
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}" {{ $project->type_id == $type->id ? 'selected' : ' ' }}>
                                {{ $type->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                
                <div class="mb-3">
                    <label for="technologies" class="form-label">Seleziona le tecgnologie associate</label>
                    <select multiple name="technologies[]" id="technologies" class="form-select">
                        <option selected value="">seleziona almeno una tecnologia</option>
                        @foreach ($technologies as $technology)
                            <option value="{{ $technology->id }}">{{ $technology->name }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Inserisci</button>
            </form>

        </div>
    </div>
@endsection
