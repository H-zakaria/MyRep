<?php 

// 1-
// Ecrire une REGEX vérifiant le format d’une référence Client
// Format de la référence :
// 
// Commence par la Lettre F
// 
// Contient 9 chiffres mais pas de 0
// 
// Exemple : F526348524, F157523581
// 

$s = "F526318524";



if(!preg_match('#^F.{9}#', $s)){
   echo "la clef doit commencer par F \n";
}if(!preg_match('#[1-9]{9}$#', $s)){
    echo "la clef doit contenir 9 chiffres sans zero";
}

// 2-
// Ecrire une REGEX Permettant de vérifier un numéro de
// téléphone


$tel = '0647876598';

if(!preg_match('#^[0-9]{10}$#', $tel)){
    echo "num invalide";
}

// 3-
// Ecrire une REGEX permettant de vérifier une adresse mail

$courriel = 'nom@mail.com';

if(!preg_match('#^[a-zA-Z0-9]+@[a-zA-Z0-9.-]+$#', $courriel)){
    echo "mail invalide";
}


// 3-
// Ecrire une REGEX permettant de vérifier un numéro de sécurité
// sociale
// Exemple d'une REGEX qui vérifie un début d'URL : "#^(https?|ftp)#"
// elle peut commencer par http, https ou ftp



$num_secu = '1 85 08 75 123 456 12';

if(!preg_match('#^[1-2]\s[0-9]{2}\s[0-9]{2}\s[0-9]{2}\s[0-9]{3}\s[0-9]{3}\s[0-9]{2}$#', $num_secu)){
    echo "num_secu invalide";
}

?>