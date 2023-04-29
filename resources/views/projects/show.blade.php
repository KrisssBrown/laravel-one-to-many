@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="card mx-auto" style="width: 27rem;">
            <div class="card-body">
                <h2 class="card-title mb-3">{{ $project->nome_progetto }}</h2>
                <h3 class="card-subtitle mb-2 text-muted">{{ $project->cliente }}</h3>
                <p class="card-text">{{ $project->descrizione }}</p>
                <p class="card-text">{{ $project->project_url }}</p>
                <a href="{{ route("projects.edit", $project)}}" class="btn btn-info">Modifica</a>
                {{-- <a href="#" class="card-link">Another link</a> --}}
            </div>
        </div>
    </div>
@endsection
