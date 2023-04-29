@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="container mb-5">
            <h1>Modifica: {{ $project->nome_progetto }}</h1>
            
        </div>

        <form action="{{ route('projects.update', $project) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Inserisci nome progetto</label>
                <input type="text" class="form-control" id="title" name="nome_progetto" value="{{ $project->nome_progetto }}">
            </div>
            <div class="mb-3">
                <label for="cliente" class="form-label">Inserisci cliente</label>
                <input type="text" class="form-control" id="cliente" name="cliente" value="{{ $project->cliente }}">
            </div>
            <div class="mb-3">
                <label for="descrizione" class="form-label">Descrizione</label>
                <textarea class="form-control" id="descrizione" rows="5" name="descrizione">{{ $project->descrizione }}</textarea>
            </div>
            <div class="mb-3">
                <label for="project_url" class="form-label">Inserisci url</label>
                <input type="text" class="form-control" id="project_url" name="project_url" value="{{ $project->project_url }}">
            </div>
            <a class="mb-3">
                <button type="submit" class="btn btn-primary mb-3">Salva modifiche</button>
            </a>
        </form>

    </div>
@endsection