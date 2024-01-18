@extends('./layouts/app')

@section('page-content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Nouveau classe</h4>
        <form class="forms-sample" action="{{ route('matiere.atributeToProf')}} " method="post">
          @csrf
          @method('post')

          <div class="form-group">
            <label for="user">Matiere</label>
            <select name="idMatiere" class="form-control" >
                @forelse ($matieres as $matiere)
                <p></p>
                <option value="{{ $matiere->idMatiere }}">{{ $matiere->nom }}</option>
                @empty

                 @endforelse
            </select>
            @error('idMatiere')
                <div class="text text-danger">{{ $message }}</div>
            @enderror  
        </div>

        
        <div class="form-group">
            <label for="user">Professeur</label>
            <select name="idProfesseur" class="form-control" >
                @forelse ($professeurs as $professeur)
                <p></p>
                <option value="{{ $professeur->idUser }}">{{ $professeur->nom }} {{ $professeur->prenom }}</option>
                @empty

                 @endforelse
            </select>
            @error('idProfesseur')
                <div class="text text-danger">{{ $message }}</div>
            @enderror  
        </div>

          <button type="submit" class="btn btn-primary me-2">creer</button>
        </form>
      </div>
    </div>
</div>
@endsection

