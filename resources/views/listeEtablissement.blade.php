@extends('template')

@section('titre_page')
    Liste des etablissement
@endsection

@section('titre')
    <h1 class="align-content-center text-success">Les etablissements</h1>
@endsection

@section('contenu')
    <p> Cliquez sur le nom de l'etablissement pour plus d'informations. Vous pouvez egalement avoir une liste des prestataires travaillant pour cette établissement</p>
    <ul class="list-group">
        @foreach($Etablissement as $etab)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <prestataire>
                    <h2 class="align-content-center text-success"><a class="align-items-center text-success" href="{{url('/Etablissement')}}/{{ $etab->getId() }}">{{$etab->getNom()}} </a></h2>
                    <p> Telephone:+33 {{$etab->getTelephone()}} </p>
                    <p> {{$etab->getAdresse()}} {{$etab->getVille()}} {{$etab->getPays()}}</p>
                    <span class="badge badge-sucsess badge-pill">{{$etab->getNoteClient()}}</span>
                </prestataire>

            </li>

        @endforeach
    </ul>


@endsection
