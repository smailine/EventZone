<?php

namespace App\Metier;

use Illuminate\Database\Eloquent\Model;

class images
{
    //
    private $id;
    private $chemin;
    private $sujet;
    private $salle;
    private $prestataire;
    private $etablissement;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getChemin()
    {
        return $this->chemin;
    }

    /**
     * @param mixed $chemin
     */
    public function setChemin($chemin): void
    {
        $this->chemin = asset($chemin);
    }

    /**
     * @return mixed
     */
    public function getSujet()
    {
        return $this->sujet;
    }

    /**
     * @param mixed $sujet
     */
    public function setSujet($sujet): void
    {
        $this->sujet = $sujet;
    }

    /**
     * @return mixed
     */
    public function getSalle()
    {
        return $this->salle;
    }

    /**
     * @param mixed $salle
     */
    public function setSalle($salle): void
    {
        $this->salle = $salle;
    }




    /**
     * @return mixed
     */
    public function getPrestataire()
    {
        return $this->prestataire;
    }

    /**
     * @param mixed $prestataire
     */
    public function setPrestataire($prestataire): void
    {
        $this->prestataire = $prestataire;
    }

    /**
     * @return mixed
     */
    public function getEtablissement()
    {
        return $this->etablissement;
    }

    /**
     * @param mixed $etablissement
     */
    public function setEtablissement($etablissement): void
    {
        $this->etablissement = $etablissement;
    }




}
