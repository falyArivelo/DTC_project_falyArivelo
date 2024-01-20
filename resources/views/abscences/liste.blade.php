@extends('./layouts/app')

@section('page-content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Liste des Abscence</h4>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>               
                            <tr>
                                <th>
                                    Date
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($abscences as $abscence)
                                <tr>
                                    <td>
                                        {{ $abscence->dateDebut }}
                                    </td>
                                </tr>
                            @empty
                                <p>aucune abscences</p>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
