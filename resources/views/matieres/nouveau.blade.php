@extends('./layouts/app')

@section('page-content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Nouveau Matiere</h4>
        <form class="forms-sample" action="{{ route('matiere.create')}} " method="post">
          @csrf
          @method('post')
          <div class="form-group">
                <label for="exampleInputUsername1">Nom</label>
                <input type="text" name="nom" class="form-control" id="exampleInputUsername1" placeholder="nom">
          </div>

          <select name="idClasse" class="form-control" >
            @forelse ($classes as $classe)
            <p></p>
            <option value="{{ $classe->idClasse }}">{{ $classe->nom }} </option>
            @empty

             @endforelse
        </select>

        <div class="form-group">
          <label for="coefficient">coefficient</label>
          <input type="text" name="coefficient" class="form-control" id="coefficient" placeholder="coefficient">
    </div>

          <button type="submit" class="btn btn-primary me-2">creer</button>
        </form>
      </div>
    </div>
</div>
@endsection

