@extends('./layouts/app')

@section('page-content')
    <td class="py-1">
        <img src="{{ asset('images/faces/' . $eleve->photo) }}" class="img-100x100" alt="image" />
    </td>
    <h5>{{ $eleve->nom }} {{ $eleve->prenom }}</h5>
    <p> {{ $eleve->genre }}</p>
    <p> {{ $eleve->dateNaissance }}</p>
    <p> {{ $eleve->adresse }}</p>
    <p> {{ $eleve->email }}</p>

    <a class="btn btn-primary" href="{{ route('note.new', ['idEleve' => $eleve->idUser]) }}">ajouter note</a>


    {{-- Admin et eleve liste note en forme de bulletin --}}
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Bulletin classe de 2nd</h4>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                @forelse ($notesSecondes as $notesSeconde)
                                    <th>
                                        {{ $notesSeconde->nommatiere }}
                                    </th>
                                @empty
                                @endforelse

                            </tr>

                        </thead>
                        <tbody>
                            @forelse ($notesSecondes as $notesSeconde)
                            <th>
                                {{ $notesSeconde->note }}
                            </th>
                        @empty
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Bulletin classe de 1ere</h4>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                @forelse ($notesPremieres as $notesPremiere)
                                    <th>
                                        {{ $notesPremiere->nommatiere }}
                                    </th>
                                @empty
                                @endforelse

                            </tr>

                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Bulletin classe de Tle</h4>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                @forelse ($notesTerminales as $notesTerminale)
                                    <th>
                                        {{ $notesTerminale->nommatiere }}
                                    </th>
                                @empty
                                @endforelse

                            </tr>

                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- Prof note pour ces matieres par classe --}}
@endsection
