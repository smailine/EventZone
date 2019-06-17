<?php

namespace App\Modeles;
use App\Metier\etablissement;
use DB;
use App\Modeles\PrestataireDAO;
use Illuminate\Database\Eloquent\Model;

class EtablissementDAO extends DAO
{
    public function getEtablissement(){

        $Etabs = DB::table('etablissement')->get();
        $lesEtabs = array();
        foreach ($Etabs as $etab) {
            $id= $etab->id;
            $lesEtabs[$id] = $this->creerObjetMetier($etab);
        }
        return $lesEtabs;
    }

    public function getEtablissementParVille($ville){

        $etabs = DB::table('etablissement')->where('ville','=',$ville)->get();
        $lesEtabs = array();
        foreach ($etabs as $etab) {
            $id= $etab->id;
            $lesEtabs[$id] = $this->creerObjetMetier($etab);
        }
        return $lesEtabs;
    }

    public function getEtablissementParProfession($prof){


        $prestataires = DB::table('prestataire')->where('profession','=',$prof)->get();
        $lesEtas = array();
        foreach ($prestataires as $presta){
            $etabs=$this->getEtablissementParId($presta->etablissement);
            $lesEtas[$presta->etablissement] = $this->creerObjetMetier($etabs);
        }
        return $lesEtas;
    }


    public function getEtablissementParId($id){

        $Etabs = DB::table('etablissement')->where('id','=',$id)->first();
        $leEtab = $this->creerObjetMetier($Etabs);
        return $leEtab;
    }


    //

    /**
     * @param \stdClass $objet
     */
    protected function creerObjetMetier(\stdClass $objet)
    {
        // TODO: Implement creerObjetMetier() method.
        $etab=new etablissement();
        $etab->setId($objet->id);
        $etab->setNote($objet->note);
        $etab->setTelephone($objet->telephone);
        $etab->setAdresse($objet->adresse);
        $etab->setNom($objet->nom);
        $etab->setPays($objet->pays);
        $etab->setVille($objet->ville);


        $prest=New PrestataireDAO();
        $prof=$prest->getLesPrestatairesParEta($objet->id);
        if($prof){
            $etab->setProfessionnels($prof);
        }else{
            $etab->setProfessionnels(null);
        }
        $im=new ImagesDAO();
        $images=$im->getImageEtablissement($objet->id);
        $etab->setImages($images);
        $com=new CommentaireDAO();
        $commentaires=$com->getLesCommentairesEtab($objet->id);
        if($commentaires){
            $etab->setCommentaires($commentaires);
            $note=$com->getNoteEtab($objet->id);
            $etab->setNoteClient($note);
        }else{
            $etab->setNoteClient(null);
            $etab->setCommentaires(null);
        }
        return $etab;
    }

    public function creactionEtablissement(etablissement $etab){
        DB::table('etablissement')->insert(['nom'=>$etab->getNom(),'adresse'=> $etab->getAdresse(),
        'telephone'=>$etab->getTelephone(), 'ville'=>$etab->getVille(),
        'pays'=>$etab->getPays()]);
    }

}
