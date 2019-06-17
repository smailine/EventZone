
@extends('template')

@section('titre_page')
    Page client
@endsection

@section('titre')
    <h1 class="align-content-center text-success"> Le client </h1>
@endsection
@section('contenu')

    <h2 class="align-content-center text-success"><a href="{{url('/Client')}}/{{ $client->getAuthIdentifier() }}"> Bonjour, {{$client->getAuthIdentifierName()}} </a></h2>
    <p class="align-content-center "> <strong>Vous pouvez ajouter: </strong></p>
    <p> <form action="{{url('/AjouterAnnonce')}}"><button type="submit" class="btn btn-success">Nouvelle Annonce</button> </form>             <form action="{{url('/AjouterCommentaire')}}"><button type="submit" class="btn btn-sucess">Nouveau Commentaire</button> </form>
    </p>
    <section>
        <h4 class="align-content-center text-success">Vous annonces:</h4>
        @if($client->getAnnonces())
             @foreach($client->getAnnonces() as $annonce)
                 <ul class="list-group list-group-horizontal">
                     <li class="list-group-item"> Sujet: {{$annonce->getSujet()}}</li>
                     <li  class="align-content-center">{{$annonce->getDescription()}}</li>
                 </ul>
             @endforeach
        @else
            <strong>Pas d'annonce enregistrée</strong>
        @endif
    </section>
    <section>
        <h4 class="align-content-center text-success">Vous commentaires:</h4>
        @if($client->getCommentaires())
            @foreach($client->getCommentaires() as $co)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <commentaire>
                        <p> Auteur: <strong>{{$co->getClient()->getNom()}} </strong></p>
                        <p>Sujet: {{$co->getSujet()}} <br/></p><p class="align-content-centerss">
                            {{$co->getDescription()}}
                        </p>
                        <div class="progress">Evaluation:<div class="progress-bar" style="width:{{$co->getNote()*100/5}}%">{{$co->getNote()*100/5}}%</div> </div>
                    </commentaire>

                </li>
            @endforeach
        @else
            <strong>Pas de commentaire enregistré</strong>
        @endif
    </section>


@endsection