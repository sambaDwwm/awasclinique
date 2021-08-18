<?php

namespace App;

class Autoloader
{
    static function register()
    {
        spl_autoload_register([
            __CLASS__,
            'autoload'
        ]);
    }
    /**
     * Undocumented function
     *
     * @param string $class
     * @return void
     */
    static function autoload($class)
    {
        $class = str_replace(__NAMESPACE__ . '\\', '', $class);

        // On remplace les \ par des /
        $class = str_replace('\\', '/', $class);

        //note : __DIR__ contient l'rboresnce du fichier Autoloader.php
        $fichier = __DIR__ . '/' . $class . '.php';
        // On vérifie si le fichier existe
        if (file_exists($fichier)) {
            require_once $fichier;
        }
    }
}
