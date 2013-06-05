<?php
// Ici on r�cup�re les valeurs du formulaire (tu les voies sur la barre d'addresse):
$name=$_GET["name"];
$ip=$_GET["ip"];

// On �crit sur la page les valeurs trouv�es:
echo "valeurs du formulaire:<br>name:$name<br>ip:$ip";

///////////////////////////////////////////////////////////////////
//  ENREGISTREMENT EN BASE DE DONNEES
///////////////////////////////////////////////////////////////////

// Maintenant tu souhaites les enregistrer en base de donn�es.
// Attention, les fonctions utilis�es existent a partir de php 5.3.0! (je ne v�rifie pas pour plus de claret�)

// on d�finit les variable pour se connecter � la base de donn�es:
$db_host="localhost";
$db_user="monUtilisateurDeLaBaseMysql";
$db_pwd="monMotDePasseDeLaBaseMysql";
$db_database="nomDeLaBaseDeDonnees";

// on se connecte:
$mysqli = mysqli_connect($db_host, $db_user, $db_pwd,$db_database);

if ($mysqli->connect_error) 
{ // une erreur est survenue lors de la tentative de connection � la base de donn�es.
  // on affiche l'erreur et on arrete l'execution (avec 'die')
    die('Erreur de connexion (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

// on execute la requete:
$query="INSERT INTO ... blah blah blah";
$result = mysqli->query($query); // on r�cup�re le r�sultat dans $result

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