<?php

namespace App\Modeles;

use App\Metier\images;
use App\Metier\salle;
use Illuminate\Database\Eloquent\Model;
use DB;
class ImagesDAO extends DAO
{
    public function getImagePrestataire($idp){
        $images=array();
        $imags=DB::table('images')->where("prestataire","=",$idp)->get();
        if($imags) {
            foreach ($imags as $imag) {
                $idCom = $imag->id;
                $images[$idCom] = $this->creerObjetMetier($imag);

            }
        }
        return $images;
    }
    public function getImageEtablissement($idEtab){
        $images=array();
        $imags=DB::table('images')->where("etablissement","=",$idEtab)->get();
        if($imags) {
            foreach ($imags as $imag) {
                $idCom = $imag->id;
                $images[$idCom] = $this->creerObjetMetier($imag);

            }
        }
        return $images;
    }
    //
    protected function creerObjetMetier(\stdClass $objet)
    {
        // TODO: Implement creerObjetMetier() method.
        $image=new images();
        $image->setSalle($objet->salle);
        $image->setEtablissement($objet->etablissement);
        $image->setSujet($objet->sujet);
        $image->setId($objet->id);
        $image->setPrestataire($objet->prestataire);
        $image->setChemin(asset($objet->chemin));
        return $image;
    }
}
