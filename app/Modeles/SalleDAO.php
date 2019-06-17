<?php

namespace App\Modeles;
use DB;
use App\Metier\salle;
use Illuminate\Database\Eloquent\Model;

class SalleDAO extends DAO
{
    //
    public function getLesSalles()
    {
        $salles = DB::table('salle')->get();
        $lesSalles = array();
        foreach ($salles as $salle) {
            $id= $salle->id;
            $lesSalles[$id] = $this->creerObjetMetier($salle);
        }
        return $lesSalles;

    }
    public function getLesSallesParPrestataire($presta)
    {
        $salles = DB::table('salle')->where('prestataire','=',$presta)->get();
        $lesSalles = array();
        foreach ($salles as $salle) {
            $id= $salle->id;
            $lesSalles[$id] = $this->creerObjetMetier($salle);
        }
        return $lesSalles;

    }

    public function getSalleParId($id)
    {
        $salles = DB::table('salle')->where('id','=',$id)->get();
        $lesSalles = $this->creerObjetMetier($salles);
        return $lesSalles;

    }

    protected function creerObjetMetier(\stdClass $objet)
    {
        // TODO: Implement creerObjetMetier() method.
        $salle=new salle();
        $salle->setId($objet->id);
        $salle->setPrestataire($objet->prestataire);
        $salle->setTaille($objet->taille);
        $salle->setTables($objet->tables);
        $salle->setPlatCouverts($objet->platCouverts);
        $salle->setCuisine($objet->cuisine);
        $salle->setChaises($objet->chaises);
        $salle->setInfo($objet->info);
        return $salle;
    }

    public function creationSalle(salle $salle){
        DB::table('salle')->insert(['prestataire'=>$salle->getPrestataire(),'taille'=> $salle->getTaille(),
            'chaises'=>$salle->getChaises(), 'cuisine'=>$salle->getCuisine(),
            'tables'=>$salle->getTables(), 'platCouverts'=>$salle->getPlatCouverts(),
            'info'=>$salle>getInfo()]);
    }

}
