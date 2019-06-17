<?php

namespace App\Metier;


class Commentaire
{
    private $id;
    private $sujet;
    private $etablissement;
    private $client;
    private $pretataire;
    private $commentaire;
    private $note;
    private $image_chemin; /// peut être null

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
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param mixed $client
     */
    public function setClient($client): void
    {
        $this->client = $client;
    }

    /**
     * @return mixed
     */
    public function getPretataire()
    {
        return $this->pretataire;
    }

    /**
     * @param mixed $pretataire
     */
    public function setPretataire($pretataire): void
    {
        $this->pretataire = $pretataire;
    }

    /**
     * @return mixed
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * @param mixed $commentaire
     */
    public function setCommentaire($commentaire): void
    {
        $this->commentaire = $commentaire;
    }

    /**
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param mixed $note
     */
    public function setNote($note): void
    {
        $this->note = $note;
    }

    /**
     * @return mixed
     */
    public function getImage_chemin()
    {
        return $this->image_chemin;
    }

    /**
     * @param mixed $images
     */
    public function setImage_chemin($images): void
    {
        $this->image_chemin = $images;
    }



}