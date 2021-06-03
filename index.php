<?php
require 'include.php';

//5.Dans votre index.php créer un nouvel objet Session
$session = new Session();

$session->name = 'ezra';
$session->address = 'Andrezieux Bt';


var_dump($session->add('lastname', 'John'));

var_dump(isset($session->name));

//6.Utilisez la méthode magique get pour retrouver la valeur de votre attribut
var_dump($session->address);

var_dump($session->attribute);


//7.Si le nouvel attribut n’existe pas, créez le (utilisation de la méthode magique SET

var_dump($session->ville);
$session->ville = 'Saint Etienne';
var_dump($session->ville);

//unset($session->);