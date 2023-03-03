<?php
//Connection à la base de données

function PDOConnect($dbDSN, $dbUser, $dbPass){
    try{
        $oPDO = new PDO($dbDSN, $dbUser, $dbPass);
    }
    catch(PDOException $e){
        die("Connection failed: ".$e->getMessage());
    }
    return $oPDO;
}

function login($oPDO, $username, $password){ 
    $oPDOStatement = $oPDO->prepare(
        'SELECT * FROM user WHERE username = (:u) AND mdp = MD5(:p)'
    );
    $oPDOStatement->execute(
        [
            'u'=> $username,
            'p'=> $password
        ]
        );
    if($oPDOStatement->fetchAll(PDO::FETCH_OBJ)){
        return true;
    }
    return false;
}