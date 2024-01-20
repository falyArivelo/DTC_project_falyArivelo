@extends('./layouts/app')

@section('page-content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Liste des Professeurs</h4>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th></th>

                                <th>
                                    Nom
                                </th>
                                <th>
                                    Matiere
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($matieresProfesseurs as $matieresProfesseur)
                                <tr>
                                    <td class="py-1">
                                        <img src="{{ asset('images/faces/' .$matieresProfesseur->professeur->photo) }}" alt="image"/>
                                      </td>
                                    <td>
                                        {{ $matieresProfesseur->matiere->nom }}
                                        {{ $matieresProfesseur->matiere->classe->nom }}
                                    </td>
                                    <td>
                                        {{ $matieresProfesseur->professeur->nom }}

                                    </td>
                                </tr>
                            @empty
                                <p>aucun Professeur</p>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
