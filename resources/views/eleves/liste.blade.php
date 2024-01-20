@extends('./layouts/app')

@section('page-content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Liste des eleves</h4>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th></th>
                                <th>
                                    Nom
                                </th>
                                <th>
                                    Promotion
                                </th>
                            </tr>

                        </thead>
                        <tbody>
                            @forelse ($promotionEleves as $promotionEleve)

                                <tr>
                                        <td class="py-1">
                                            <img src="{{ asset('images/faces/'.$promotionEleve->eleve->photo) }}" alt="image"/>
                                        </td>
                                        <td>
                                            {{ $promotionEleve->eleve->nom }}
                                            {{ $promotionEleve->eleve->prenom }}
                                        </td>
                                        <td>
                                            {{ $promotionEleve->promotion->nom }}
                                        </td>
                                        <td>
                                        <a class="btn btn-primary" href="{{ route('eleve.bulletin', ['idUser' => $promotionEleve->eleve->idUser]) }}">bulletin</a>
                                        <a class="btn btn-secondary" href="{{ route('eleve.voirAbscence', ['idUser' => $promotionEleve->eleve->idUser]) }}">Abscences</a>

                                    </td>

                                </tr>

                            @empty
                                <p>aucun eleve</p>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
