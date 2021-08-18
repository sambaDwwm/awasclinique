<?php

namespace Controller;

use Dao\UtilisateurDao;
use Model\Utilisateur;

class UtilisateurController extends BaseController 
{
    /**
     * function Connexion()
     *
     * @return void
     */
    public function Connexion()
    {
        if (isset($_POST['email'])) {

            $email = $_POST['email'];
            $dao = new UtilisateurDao();
            $utilisateur = $dao->findByEmail($_POST['email']);

            //si le email existe et que le mot de passe correspond
            if ($utilisateur && password_verify($_POST['motDePasse'], $utilisateur->getMotDePasse())) {
                $_SESSION["utilisateur"] = serialize($utilisateur);
                $this->afficherMessage("Vous êtes connecté");
                $this->redirection();
            } else {
                $this->afficherMessage("mauvais email / mot de passe", "danger");
            }
        }

        $donnees = compact("email");
        $this->afficherVue("connexion", $donnees);
    }
    public function deconnexion()
    {
        session_destroy();
        session_start();
        $this->afficherMessage("Vous êtes deconnecté");
        $this->redirection();
    }
    public function inscription()
    {
        $email = "";
        $entreprise = false;

        //si l'utilisateur a valider le formulaire
        if (isset($_POST["email"])) {

            $email = $_POST["email"];
            $entreprise = isset($_POST['entreprise']);

            if ($_POST["motDePasse"] == $_POST["confirmeMotDePasse"]) {

                $dao = new UtilisateurDao();

                if ($_POST["motDePasse"] == $_POST["confirmeMotDePasse"])

                $this->afficherMessage("Vous êtes bien inscrit, veuillez vous connecter", "success");
                $this->redirection("utilisateur/connexion");
            } else {

                $this->afficherMessage("Les mots de passes sont différents", "danger");
            }
        }

        $donnees = compact('email', 'entreprise');

        $this->afficherVue("inscription", $donnees);
    }

}