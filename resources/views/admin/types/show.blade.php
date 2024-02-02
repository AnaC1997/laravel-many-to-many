@extends('layouts.admin')


@section('content')
    <!--Section Card-->
    <div class="container">
        <h1 class="text-center"><strong>Dettagli su {{ $type->name }}</strong></h1>
        <div class="row">
            <div class="col-8">
                <div class="card mb-3" style="width: 40vw;">
                    <div id="card" class="card-body">
                        <p class="card-text">{{ $type->description }}</p>
                        <span class="d-flex gap-2 "></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
