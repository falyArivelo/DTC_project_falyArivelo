@extends('./layouts/app')

@section('page-content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Liste des eleves</h4>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>
                                    Nom
                                </th>
                        </thead>
                        <tbody>
                            @forelse ($eleves as $eleve)
                                <tr>
                                    <td>
                                        {{ $eleve->nom }}
                                        {{ $eleve->prenom }}

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
