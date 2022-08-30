<?php
$total = moyenne(10,15,22);
echo "la moyenne des sommes est égale a : moyenne(10,15,22)";
function moyenne($nbr1, $nbr2, $nbr3):float{
    return ($nbr1 + $nbr2 + $nbr3)/3;
}
?>