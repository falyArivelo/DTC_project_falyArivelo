@extends('./layouts/app')

@section('page-content')
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Liste des Publications</h4>
                <a class="btn btn-primary" href="{{ route('publication.new') }}">publier</a>

                @foreach ($publications as $publication)
                    <div class="publication">
                        <div class="user-info">
                            <img src="{{ asset('images/faces/' . $publication->user->photo) }}" alt="User Photo">
                            <p>{{ $publication->user->nom }} {{ $publication->user->prenom }}</p>
                        </div>
                        <div class="publication-content">
                            <p>{{ $publication->texte }}</p>
                            <small>{{ $publication->datePublication }}</small>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
