<?php
switch ($route){
    case 'client':
        require_once(dirname(__FILE__).'/client/index.php');
        break;
    default:
        require_once(dirname(__FILE__).'/login.html');
        break;        
}