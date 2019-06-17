
@extends('template')

@section('titre_page')
    L'etablissement
@endsection

@section('titre')
    <h1 class="align-content-center text-success">L'etablissement</h1>
@endsection

@section('contenu')

    <h2 class="align-content-center text-success"><a href="{{url('/Etablissement')}}/{{ $leEtab->getId() }}">{{$leEtab->getNom()}} </a></h2>
    <p> Telephone:+33 {{$leEtab->getTelephone()}} </p>
    <p> {{$leEtab->getAdresse()}}    {{$leEtab->getVille()}}    {{$leEtab->getPays()}}</p>
    <div class="progress">Note donnée par le site: <div class="progress-bar" style="width:{{$leEtab->getNote()*100/5}}%"> {{$leEtab->getNote()*100/5}}%</div></div>
    @if($leEtab->getNoteClient())
        <div class="progress"> Note Client:<div class="progress-bar" style="width:{{$leEtab->getNoteClient()*100/5}}%"> {{$leEtab->getNoteClient()*100/5}}%</div></div>
    @endif
    <h3 class="align-content-center text-success">Nos prestataires :</h3>
    @if($leEtab->getProfessionnels())
        @foreach($leEtab->getProfessionnels() as $presta)
            <prestataire>
                <h5><a href="{{url('/Prestataire')}}/{{ $presta->getId() }}">{{$presta->getNom()}} </a></h5>
                <p> Telephone:+33 {{$presta->getTelephone()}} </p>
                <p> {{$presta->getAdresse()}}</p>
                <span class="badge badge-primary badge-pill">{{$presta->getNoteClient()}}</span>
            </prestataire>
        @endforeach
    @else
        <strong>Etablissement en cours d'inscription </strong>
    @endif
    @if($leEtab->getImages())
        <ul class="list-group-horizontal">
            @foreach($leEtab->getImages() as $im)
                <li><img  src="{{asset($im->getChemin())}}"/></li>
            @endforeach
        </ul>

    @endif
    <h3>Les commentaires nous concernant: </h3>
    <ul class="list-group">
        @if($leEtab->getCommentaires())
            @foreach($leEtab->getCommentaires() as $co)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <commentaire>
                        <p> Auteur: <strong>{{$co->getClient()->getNom()}} </strong></p>
                        <p>Sujet: {{$co->getSujet()}} <br/>
                            {{$co->getDescription()}}
                        </p>
                        <li class="progress">Evaluation:<li class="progress-bar" style="width:{{$co->getNote()*100/5}}%">{{$co->getNote()*100/5}}%</li> </li>
                    </commentaire>

                </li>

            @endforeach
        @else
            <strong>Pas de commentaire enregistré</strong>
        @endif

    </ul>


@endsection
