<?php

namespace App\Modeles;
use DB;
use App\Metier\client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Contracts\Auth\Authenticatable;

class ClientDAO extends DAO implements UserProvider
{
    //

    public function getClientParId($id)
    {
        $client = DB::table('users')->where('id','=',$id)->first();
        $leClient= $this->creerObjetMetier($client);
        return $leClient;
    }

    public function getClientParMail($id)
    {
        $client = DB::table('users')->where('email','=',$id)->first();
        $leClient= $this->creerObjetMetier($client);
        return $leClient;
    }
    public function getIdClientParMail($mail)
    {
        $client = DB::table('users')->where('email','=',$mail)->first();

        return $client->id;
    }

    //Implémentation des méthodes de l'interface
    /**
     * Retrieve a user by their unique identifier.
     *
     * @param  mixed  $identifier
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function retrieveById($identifier){
        $user=DB::table('users')->where('id','=',$identifier)->first();
        if($user) {
            $leUser = $this->creerObjetMetier($user);
            return $leUser;
        }
        else
            return null;
    }
    /**
     * Retrieve a user by their unique identifier and "remember me" token.
     *
     * @param  mixed   $identifier
     * @param  string  $token
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function retrieveByToken($identifier, $token){

    }
    /**
     * Update the "remember me" token for the given user in storage.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
     * @param  string  $token
     * @return void
     */
    public function updateRememberToken(Authenticatable $user, $token){

    }
    /**
     * Retrieve a user by the given credentials.
     *
     * @param  array  $credentials
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function retrieveByCredentials(array $credentials){

    }
    /**
     * Validate a user against the given credentials.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
     * @param  array  $credentials
     * @return bool
     */
    public function validateCredentials(Authenticatable $user, array $credentials){

    }

    //Implémentation de la méthode abstraite de la classe DAO
    protected function creerObjetMetier(\stdClass $objet)
    {
        $leUser = new client();
        $leUser->setAuthIdentifier($objet->id);
        $leUser->setAuthName($objet->name);
        $leUser->setAuthEmail($objet->email);
        $leUser->setAuthPassword($objet->password);
        $anno=new AnnonceDAO();
        $annonces=$anno->getLesAnnonces($objet->id);
        if($annonces){
            $leUser->setAnnonces($annonces);
        }else{$leUser->setAnnonces(null);}

        $co=new CommentaireDAO();
        $com=$co->getLesCommentairesClient($objet->id);
        if($com){
            $leUser->setCommentaires($com);
        }else{$leUser->setCommentaires(null);}

        return $leUser;
    }


  /*  public function creationClient(client $client)
    {
        DB::table('client')->insert(['nom' => $client->getNom(), 'email' => $client->getEmail(),
            'mdp' => $client->getPassword()]);
    }*/
}
