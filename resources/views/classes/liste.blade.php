@extends('./layouts/app')

@section('page-content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Liste des classes</h4>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>
                                    classe
                                </th>
                        </thead>
                        <tbody>
                            @forelse ($classes as $classe)
                                <tr>
                                    <td>
                                        {{ $classe->nom }}
                                    </td>
                                </tr>
                            @empty
                                <p>aucun produit</p>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
