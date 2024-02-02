@extends('layouts.app')
@section('content')
    <div class="jumbotron p-5 mb-4 bg-light rounded-3">
        <div class="container">
            <h1 class="text-center"><strong>Benvenuto</strong></h1>
            <div class="row">
                @foreach ($projects as $project)
                    <div class="col-3">
                        <div class="card mb-3" style="width: 18rem;">
                            <img src="{{ $project->image }}" class="card-img-top " alt="..." style=" height: 23rem;">
                            <div class="card-body">
                                <h5 class="card-title"><strong>{{ $project->name }} </strong></h5>
                                <p class="card-text">{{ $project->description }}</p>
                                <p class="card-text"><strong>Data creazione</strong> {{ $project->dataCreation }}</p>
                                <p class="card-text"><strong>Language</strong> {{ $project->language }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
