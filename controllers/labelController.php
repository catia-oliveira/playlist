<?php
require("models/Label.php");
require("models/Artist.php");

if(isset($_GET['id'])){

    //si un ID est reçu, afficher le label en question
    $label = getLabel($_GET['id']);

    if($label == false){

        
    }
}