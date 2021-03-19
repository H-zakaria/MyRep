<?php

if (isset($_POST["id"]) && isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["email"]) && isset($_POST["telephone"])) {
        $file = fopen("personnes.txt", "a+");
        $char = "";
        if (filesize("personnes.txt") != 0) {
            $char = "\n";
        }
        
        $ligne = $char . $_POST["id"] . ";" . $_POST["prenom"] . ";" . $_POST["nom"] . ";" . $_POST["email"] . ";" . $_POST["telephone"];
        fwrite($file, $ligne);
        fclose($file);
    }

