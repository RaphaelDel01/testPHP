<?php
    $nbr1 = 10;
    $nbr2 = 13;
    // test si nbr1 est le plus grand
    testNbr(10, 50);
    function testNbr(int $nb1, int $nb2){
        if($nb1>$nb2 AND $nb1 !=0 AND $nb2 !=0){
            echo 'le nombre 1 est le plus grand';
        }
        else if($nb1 == $nb2){
            echo 'Les nombres 1 et 2 sont identiques';
        }
        else{
            echo 'Le nombre 2 est le plus grand';
        }
    }
?>
