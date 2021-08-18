<?php

class Connexion extends PDO
{
    public function __construct()
    {

        parent::__construct(
            "mysql:dbname=awasclinique;host=localhost;charset=UTF8",
            "root",
            "root"
        );

        $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }
}
