<?php

namespace App\Metier;

use Illuminate\Database\Eloquent\Model;

class prestataire
{
    //
    private $id;
    private $nom;
    private $adresse;
    private $telephone;
    private $note_client; // pas dans la base
    private $description;
    private $etablissement;
    private $commentaires; // pas dans la base
    private $profession;
    private $salle; // verifie si c'est salle ou pas
    private $laSalle;// pas dans la base
    private $images;
    /**
     * @return mixed
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * @param mixed $profession
     */
    public function setProfession($profession): void
    {
        $this->profession = $profession;
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
        public function getCommentaires()
    {
        return $this->commentaires;
    }
    /**
     * @param mixed $commentaires
     */
    public function setCommentaires($commentaires): void
    {
        $this->commentaires = $commentaires;
    }


    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse): void
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone): void
    {
        $this->telephone = $telephone;
    }

    /**
     * @return mixed
     */
    public function getNoteClient()
    {
        return $this->note_client;
    }

    /**
     * @param mixed $note_client
     */
    public function setNoteClient($note_client): void
    {
        $this->note_client = $note_client;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
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



    /**
     * @return mixed
     */
    public function getLaSalle()
    {
        return $this->laSalle;
    }

    /**
     * @param mixed $laSalle
     */
    public function setLaSalle($laSalle): void
    {
        $this->laSalle = $laSalle;
    }

    /**
     * @return mixed
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @param mixed $images
     */
    public function setImages($images): void
    {
        $this->images = $images;
    }


}
