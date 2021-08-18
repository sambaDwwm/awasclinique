<?php
session_start();

include("Autoloader.php");

use App\Autoloader;
Autoloader::register();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/styles.css">
    <title>awa's clinique</title>
</head>
<body>
    <header>
    <header>
            <div class="wrapper">
                <div >
                    <img src="./asset/img/awa-s-clinique-logo.png" alt="logo awas clinique" class="logo">
                </div>
                <nav>
                    <ul>
                        <li>
                            <a href="#">A propos</a>
                        </li>
                        <li>
                            <a href="#">Service</a>
                        </li>
                        <li>
                            <a href="#">Reservation</a>
                        </li>
                        <li>
                            <a href="#">Avant/apres</a>
                        </li>
                        
                        <li>
                            <?php
                        if (isset($_SESSION['utilisateur'])){
                            ?>
                            <li>
                            <a class="nav-link" href="<?= Config::$baseUrl ?>/utilisateur/deconnexion">Deconnexion</a>

                            </li>
                        </li>
                        
                        <?php

                        }else{
                        ?>
                             <a href="<?= Config::$baseUrl ?>/utilisateur/connexion/">Connexion</a>
                             <?php
                        }
                        ?>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

    </header>
<?php
       Application::demarrer();


?>
</body>
</html>