<?php

class Fournisseur extends Personne {
 

    public function travaille(Client $client )
    {
       echo "le ". $this::class ." travaille : 
       avec le : " . $client::class ." ".
        $client->afficher();
    }
    
    
}