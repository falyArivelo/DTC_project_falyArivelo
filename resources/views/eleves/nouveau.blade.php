@extends('./layouts/app')

@section('page-content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Nouveau eleve</h4>
        <form class="forms-sample" action="{{ route('eleve.create')}} " method="post">
          @csrf
          @method('post')
          <div class="form-group">
                <label for="exampleInputUsername1">Nom</label>
                <input type="text" name="nom" class="form-control" id="exampleInputUsername1" placeholder="nom">
          </div>

          <button type="submit" class="btn btn-primary me-2">creer</button>
        </form>
      </div>
    </div>
</div>
@endsection

