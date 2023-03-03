<?php
//RENOMMER CE FICHIER EN config.php
// Adresse du serveur bdd
define('DB_SERVEUR', 'ADDRESSE DU SERVEUR');

// Identifiant
define('DB_LOGIN', 'Identifiant');

// Mot de passe
define('DB_PASSWORD','Mot de passe');

// Nom de la base de données
define('DB_NOM', 'Nom de la base de données');

// Driver
define('DB_DSN','mysql:host='.DB_SERVEUR.';dbname='.DB_NOM);

