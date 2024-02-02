@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2 class="mt-3 text-center">Modifica categoria</h2>
        </div>
        <div class="row">
            <form action="{{ route('admin.types.update', $type->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="name" name="name"  value="{{ $type->name }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" id="description" name="description"  value="{{ $type->description }}">
                </div>
                <button type="submit" class="btn btn-primary">Inserisci</button>
            </form>

        </div>
    </div>
@endsection