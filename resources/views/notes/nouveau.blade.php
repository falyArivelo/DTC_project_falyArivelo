@extends('./layouts/app')

@section('page-content')
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Nouvelle Note</h4>
                <form class="forms-sample" action="{{ route('note.create') }}" method="post">
                    @csrf
                    @method('post')
                    <div class="form-group">
                        <label for="inputUser">Utilisateur</label>
                        <!-- Supposons que vous avez une liste d'utilisateurs dans votre contrôleur -->
                        <h3>{{ $eleve->nom }} {{ $eleve->prenom }}</h3>
                        <input type="hidden" name='idEleve' value="{{ $eleve->idUser }}" /> </div>
                        
                        <div class="form-group">
                            <label for="inputMatiere">Matière</label>
                            <!-- Supposons que vous avez une liste de matières dans votre contrôleur -->
                            <select name="idMatiere" class="form-control" id="inputMatiere">
                                @foreach ($matieresDuProfesseurs as $matieresDuProfesseur)
                                    <option value="{{ $matieresDuProfesseur->matiere->idMatiere }}">{{ $matieresDuProfesseur->matiere->nom }} {{ $matieresDuProfesseur->matiere->classe->nom }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputNote">Note</label>
                            <input type="text" name="note" class="form-control" id="inputNote" placeholder="Note">
                        </div>
                        <div class="form-group">
                            <label for="inputDateTest">Date du Test</label>
                            <input type="date" name="dateTest" class="form-control" id="inputDateTest">
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Créer</button>
                </form>
            </div>
        </div>
    </div>
@endsection
