<?php
require_once 'personne.php';

$personne1 = new Personne("Dupont", "Alice", "123 Rue du Soleil", "1990-05-15"); 
$personne1->afficherInfos(); 
$personne1->modifierAdresse("456 Avenue de la Lune"); 
echo "Âge : " . $personne1->calculerAge() . " ans\n"; 
 ?> 
