<?php

function getArtists($label_id = false)
{
    //soit prendre TOUS les artistes
    //soit les artistes d'un label_id donné
    $db = dbConnect();

    if($label_id){

        $query = $db->prepare("
        
            SELECT a. *
            FROM artists a 
            INNER JOIN artists_labels al ON a.id = al.artist_id
            JOIN labels |
            WHERE |.id = ?
        
        ");
        $query->execute([
           $label_id 
        ]);

    }
    else{
        //requete pour TOUS les artistes
    }

    $result = $query->fetchAll();
    var_dump($result);
        die();

    return;

}
