@extends('layouts.admin')


@section('content')
    <!--Section Card-->
    <div class="container">
        <h1 class="text-center"><strong>Dettagli su {{$project->name}}</strong></h1>
        <div class="row">
                <div class="col-8">
                    <div class="card mb-3" style="width: 40vw;">
                        <img src="{{ $project->image }}"  class="img-fluid" alt="Responsive Image" style="height: 30%;">
                        <div id="card" class="card-body">
                            <h5 class="card-title"><strong>{{$project->name}} </strong></h5>
                            <p class="card-text">{{ $project->description }}</p>
                            <p class="card-text"><strong>Data creazione</strong> {{ $project->dataCreation }}</p>
                            <p class="card-text"><strong>Language</strong> {{ $project->language }}</p>
                            <span class="d-flex gap-2 "></span>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection