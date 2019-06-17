@extends('template')

@section('titre_page')
    Liste des prestataires
@endsection

@section('titre')
    <h1 class="align-content-center text-success" >Les Prestataires</h1>
@endsection

@section('contenu')
    <p> Cliquez sur le nom de la prestataire pour plus d'informations.</p>
    <ul class="list-group">
    @foreach($lesPrestataires as $presta)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <prestataire>
                    <h2 class="align-content-center text-success"><a href="{{url('/Prestataire')}}/{{ $presta->getId() }}">{{$presta->getNom()}} </a></h2>
                    <p> Telephone:+33 {{$presta->getTelephone()}} </p>
                    <p> {{$presta->getAdresse()}}</p>
                    <span class="badge badge-success badge-pill">{{$presta->getNoteClient()}}</span>
                </prestataire>

            </li>

    @endforeach
    </ul>


@endsection