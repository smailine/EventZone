
@extends('template')

@section('titre_page')
    La prestataire
@endsection

@section('titre')
    <h1 class="align-content-center text-success">La Prestataire: {{$laprestataire->getNom()}}</h1>
@endsection

@section('contenu')

    <h2 class="align-content-center text-success"><a href="{{url('/Prestataire')}}/{{ $laprestataire->getId() }}">{{$laprestataire->getNom()}} </a></h2>
    <p ><a href="{{url('/Etablissement')}}/{{$Etablissement->getId()}}">Etablissement: {{$Etablissement->getNom()}}</a></p>
    <p> Telephone:+33 {{$laprestataire->getTelephone()}} </p>
    <p> {{$laprestataire->getAdresse()}}</p>

    <p class="align-content-center ">
        {{$laprestataire->getDescription()}}
    </p>
    @if($laprestataire->getLaSalle())
        <ul class="list-group list-group-horizontal align-items-center">
            <li class="list-group-item"> Taille: {{$laprestataire->getLaSalle()->getTaille()}} m²</li>
            <li class="list-group-item"> Nombre de couverts: {{$laprestataire->getLaSalle()->getPlatCouverts()}}</li>
            <li class="list-group-item"> Nombre de tables: {{$laprestataire->getLaSalle()->getTables()}}</li>
            <li class="list-group-item"> Nombre de chaises: {{$laprestataire->getLaSalle()->getChaises()}} </li>
            <li class="list-group-item"> La Cuisine: {{$laprestataire->getLaSalle()->getCuisine()}} </li>
            <li>< {{$laprestataire->getLaSalle()->getInfo()}} </li>
        </ul>
        <div class="progress">Note donnée par le site: <div class="progress-bar" style="width:{{$Etablissement->getNote()*100/5}}%"> {{$Etablissement->getNote()*100/5}}%</div></div>
        @if($laprestataire->getNoteClient())
            <div class="progress"> Note Client:<div class="progress-bar" style="width:{{$laprestataire->getNoteClient()*100/5}}%"> {{$laprestataire->getNoteClient()*100/5}}%</div></div>
        @endif
    @endif
    @if($laprestataire->getImages())
        <div id="conteneur">
        <ul class="list-group-horizontal">
            @foreach($laprestataire->getImages() as $im)
                <li><img  src="{{asset($im->getChemin())}}"></li>
            @endforeach
        </ul>
        </div>
    @endif

    <ul class="list-group">
        @if($laprestataire->getCommentaires())
            @foreach($laprestataire->getCommentaires() as $co)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <commentaire>
                        <p> Auteur: <strong>{{$co->getClient()->getNom()}} </strong></p>
                        <p>Sujet: {{$co->getSujet()}} </p>
                        <p class="align-content-center">
                            {{$co->getDescription()}}
                        </p>
                        <div class="progress">Evaluation:<div class="progress-bar " style="width:{{$co->getNote()*100/5}}%">{{$co->getNote()*100/5}}%</div> </div>
                    </commentaire>

                </li>

            @endforeach
        @else
            <strong>Pas de commentaire enregistré</strong>
        @endif

    </ul>


@endsection