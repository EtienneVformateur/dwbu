<?php
//Objet connexion BDD
$oPDO = null;

//Route à envoyer à la vue
$route = null;

//Message erreur à afficher
$message = null;

//Initialisation de la connexion à la bdd
$oPDO = PDOConnect(DB_DSN, DB_LOGIN, DB_PASSWORD);

//Formulaire de connexion reçu
if (isset( $_POST['username']) && isset($_POST['password'])){
   $username = trim($_POST['username']);
   $password = trim($_POST['password']);

   $loginCorrect = login($oPDO, $username, $password);

   if ($loginCorrect){
        $message = "Connexion réussite";
        $route = "attribution";
   }
   else $message = "Mauvais identifiant";
   echo($message);
}
