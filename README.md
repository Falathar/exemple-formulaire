exemple-formulaire
==================

En pièce jointe, un petit exemple de formulaire; envoie du formulaire; et traitement des données en php.
Il faut que tu :
  - crées une base de donnée (sous mysql)
  - modifie les variables pour se connecter (lignes 17 à 20 de "traitement_formulaire.php")
  - crées ta requête d'insertion (ligne 32 de "traitement_formulaire.php")
  - place les fichiers du zip sous htdocs! (de ton serveur web; enfin celui où tu as ton index.html - les wamp et compagnie ont peut être renommé le dossier htdocs ^^).

Exemple de création de table (on souhaite que les noms de pc et adresses ip soient uniques):
$query="CREATE TABLE IF NOT EXISTS Ordinateurs ( 
  `idOrdi` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NOT NULL ,
  `ip` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idOrdi`) ,
  UNIQUE INDEX `name_UNIQUE` (`name` ASC) )
  UNIQUE INDEX `ip_UNIQUE` (`ip` ASC) )
  ENGINE=InnoDB DEFAULT CHARSET=utf8;";

Exemple d'insertion de données (dans la table crée ci-dessus):
$query="INSERT INTO Ordinateurs (`name`, `ip`) VALUES ('$name', '$ip')";
(A noter, que $name et $ip ont été récupérés lignes 3 et 4 de "traitement_formulaire.php". ;-)


Sinon télécharges la documentation de php.net ici : http://fr2.php.net/distributions/manual/php_manual_fr.tar.gz
Tu dervais pouvoir la décompresser sans soucis.
Le cas échéant, en mode console: tar xvfz php_manual_fr.tar.gz
Ensuite ouvres le fichiers index.html.
Tu peux aussi ouvrir le fichier mysqli.html, il contient les fonctions et exemples pour manipuler la base de données.

Je pense que ça devrait t'occuper la journée ;)
