<!-- resources/views/absences/create.blade.php -->

@extends('layouts.app')

@section('page-content')
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Nouvelle Absence</h4>
                <form class="forms-sample" action="{{ route('absences.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="idUser">Utilisateur</label>
                        <select name="idUser" class="form-control">
                            @foreach($users as $user)
                                <option value="{{ $user->idUser }}">{{ $user->nom }} {{ $user->prenom }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="dateDebut">Date de début</label>
                        <input type="datetime-local" name="dateDebut" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="dateFin">Date de fin</label>
                        <input type="datetime-local" name="dateFin" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Créer</button>
                </form>
            </div>
        </div>
    </div>
@endsection