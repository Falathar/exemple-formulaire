<?php
// Ici on récupère les valeurs du formulaire (tu les voies sur la barre d'addresse):
$name=$_GET["name"];
$ip=$_GET["ip"];

// On écrit sur la page les valeurs trouvées:
echo "valeurs du formulaire:<br>name:$name<br>ip:$ip";

///////////////////////////////////////////////////////////////////
//  ENREGISTREMENT EN BASE DE DONNEES
///////////////////////////////////////////////////////////////////

// Maintenant tu souhaites les enregistrer en base de données.
// Attention, les fonctions utilisées existent a partir de php 5.3.0! (je ne vérifie pas pour plus de clareté)

// on définit les variable pour se connecter à la base de données:
$db_host="localhost";
$db_user="monUtilisateurDeLaBaseMysql";
$db_pwd="monMotDePasseDeLaBaseMysql";
$db_database="nomDeLaBaseDeDonnees";

// on se connecte:
$mysqli = mysqli_connect($db_host, $db_user, $db_pwd,$db_database);

if ($mysqli->connect_error) 
{ // une erreur est survenue lors de la tentative de connection à la base de données.
  // on affiche l'erreur et on arrete l'execution (avec 'die')
    die('Erreur de connexion (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

// on execute la requete:
$query="INSERT INTO ... blah blah blah";
$result = mysqli->query($query); // on récupère le résultat dans $result

if($result == TRUE)
{
  echo "Donnees enregistrees avec succes.";
}
else
{
  echo "Erreur lors de l'enregistrement.";
}

// N'oublie pas de fermer la connexion!!!:
$mysqli->close();

?>