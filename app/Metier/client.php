<?php

namespace App\Metier;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class client implements AuthenticatableContract{
    /**
 * Get the name of the unique identifier for the user.
 *
 * @return string
 */
    private $id;
   private $email;
   private $annonces;
   private $commentaires;
    private $password;
    private $remember_token;
    private $name;
    private  $email_verified_at;
    private $created_at;
    private $updated_at;

    /**
     * @return mixed
     */
    public function getAnnonces()
    {
        return $this->annonces;
    }

    /**
     * @param mixed $annonces
     */
    public function setAnnonces($annonces): void
    {
        $this->annonces = $annonces;
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


    //un objet user dans laravel doit obligatoirement implémeter l'interface UserInterface ainsi que l'interface authenticatable
    //Champs de la table users


    //implémentation des méthodes de l'interface
    //Le code de l'interface est disponible ici :
    //https://github.com/laravel/framework/blob/5.8/src/Illuminate/Contracts/Auth/Authenticatable.php
    public function getAuthIdentifier()
    {
        return $this->id;
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value){
        $this->remember_token = $value;
    }

    public function getRememberTokenName(){
        return $this->name;
    }

    //Accesseurs nom et email
    public function getAuthIdentifierName(){
        return $this->name;
    }

    public function getAuthEmail(){
        return $this->email;
    }

    //Mutateurs id, name, email et password
    //les autres ne sont pas indispensables

    public function setAuthIdentifier($id)
    {
        return $this->id=$id;
    }

    public function setAuthName($name){
        return $this->name=$name;
    }

    public function setAuthEmail($email){
        return $this->email=$email;
    }

    public function setAuthPassword($password)
    {
        return $this->password=$password;
    }

}
