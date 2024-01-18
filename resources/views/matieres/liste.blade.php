@extends('./layouts/app')

@section('page-content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Liste des Matieres</h4>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>
                                    Matiere
                                </th>
                        </thead>
                        <tbody>
                            @forelse ($matieres as $matiere)
                                <tr>
                                    <td>
                                        {{ $matiere->nom }}
                                    </td>
                                </tr>
                            @empty
                                <p>aucune matiere</p>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
