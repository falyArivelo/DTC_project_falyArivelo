<!-- resources/views/publications/create.blade.php -->

@extends('layouts.app')

@section('page-content')
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Nouvelle Publication</h4>
                <form class="forms-sample" action="{{ route('publication.create') }}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="texte">Texte</label>
                        <textarea name="texte"  class="mytextarea" rows="4" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Créer</button>
                </form>
            </div>
        </div>
    </div>
@endsection
