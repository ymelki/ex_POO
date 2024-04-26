<?php

class Fournisseur extends Personne {
 

    public function travaille(Client $client )
    {
       echo "le fournisseur travaille : ". $client->afficher();
    }
    
    
}