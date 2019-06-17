<?php

namespace App\Metier;

use Illuminate\Database\Eloquent\Model;

class salle
{
    //
    private $id;
    private $prestataire;
    private $taille;
    private $platCouverts;
    private $tables;
    private $chaises;
    private $cuisine;
    private $info;

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
    public function getPrestataire()
    {
        return $this->prestataire;
    }

    /**
     * @param mixed $etablissement
     */
    public function setPrestataire($etablissement): void
    {
        $this->prestataire = $etablissement;
    }


    /**
     * @return mixed
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * @param mixed $taille
     */
    public function setTaille($taille): void
    {
        $this->taille = $taille;
    }

    /**
     * @return mixed
     */
    public function getPlatCouverts()
    {
        return $this->platCouverts;
    }

    /**
     * @param mixed $platCouverts
     */
    public function setPlatCouverts($platCouverts): void
    {
        $this->platCouverts = $platCouverts;
    }

    /**
     * @return mixed
     */
    public function getTables()
    {
        return $this->tables;
    }

    /**
     * @param mixed $tables
     */
    public function setTables($tables): void
    {
        $this->tables = $tables;
    }

    /**
     * @return mixed
     */
    public function getChaises()
    {
        return $this->chaises;
    }

    /**
     * @param mixed $chaises
     */
    public function setChaises($chaises): void
    {
        $this->chaises = $chaises;
    }

    /**
     * @return mixed
     */
    public function getCuisine()
    {
        return $this->cuisine;
    }

    /**
     * @param mixed $cuisine
     */
    public function setCuisine($cuisine): void
    {
        $this->cuisine = $cuisine;
    }

    /**
     * @return mixed
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * @param mixed $salle
     */
    public function setInfo($info): void
    {
        $this->info = $info;
    }


}
