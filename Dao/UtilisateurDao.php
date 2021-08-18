<?php

namespace Dao;

use Connexion;

class UtilisateurDao extends BaseDao
{
    /**
     * function ajoutUlisateur()
     *
     * @param string $nom
     * @param string $prenom
     * @param string $email
     * @param string $motDePasse
     * @param bool   $admin
     * @return void
     */
    public function ajoutUtilisateur ($nom ,$prenom , $email , $motDePasse , $admin)
    {
        $connexion = new Connexion();

        $requete = $connexion->prepare(
            "INSERT INTO utilisateur (nom , prenom , motDePasse , email , admin) 
            VALUES (?,?,?,?,?)"
        );
        $requete->execute(
            [
                $nom ,
                $prenom , 
                $email , 
                password_hash($motDePasse , PASSWORD_BCRYPT) , 
                $admin
            ]
        );
    } 

  /**
   * function findByEmail()
   *
   * @param [type] $email
   * @return void
   */
    public function findByEmail($email)
    {
        $connexion = new Connexion();


        $requete = $connexion->prepare(
            "SELECT * FROM utilisateur WHERE email = ? "
        );

        $requete->execute(
            [
                $email
            ]
        );
        
        $tableauUtilisateur = $requete->fetch();

        if ($tableauUtilisateur){
            return $this->transformeTableauEnObjet($tableauUtilisateur);
        }else{
            return false;
        }
    }

    
}   