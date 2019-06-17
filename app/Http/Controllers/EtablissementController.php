<?php

namespace App\Http\Controllers;

use App\Metier\etablissement;
use App\Modeles\EtablissementDAO;
use Illuminate\Http\Request;
use App\Modeles\ClientDAO;
use App\Http\Requests\InsertionEtabRequest;

class EtablissementController extends Controller
{
    //
    public function getEtablissements()
    {
        $Etab=new EtablissementDAO();
        $Etablissement=$Etab->getEtablissement();
        return view('listeEtablissement', compact( 'Etablissement'));

    }

    public function getEtablissementsParProfession($prof)
    {
        $Etab=new EtablissementDAO();
        $Etablissement=$Etab->getEtablissementParProfession($prof);
        return view('listeEtablissement', compact( 'Etablissement'));

    }

    public function getEtablissementsParVille($prof)
    {
        $Etab=new EtablissementDAO();
        $Etablissement=$Etab->getEtablissementParVille($prof);
        return view('listeEtablissement', compact( 'Etablissement'));

    }

    public function getEtablissement($id){
        $etabDAO=new EtablissementDAO();
        $leEtab=$etabDAO->getEtablissementParId($id);
        return view('Etablissement', compact( 'leEtab'));
    }
    public function InscrireEtablissement(){
        return view("InscrireEtablissement");
    }

    public function postInscrireEtablissement(InsertionEtabRequest $request){
        $etablissement=new etablissement();
        $etablissement->setNom($request->input('nom'));
        $etablissement->setAdresse($request->input('adresse'));
        $etablissement->setVille($request->input('ville'));
        $etablissement->setPays($request->input('pays'));
        $etablissement->setTelephone($request->input('telephone'));
        $cli=new EtablissementDAO();
        $cli->creactionEtablissement($etablissement);
        return view('Confirmation');
    }
}
