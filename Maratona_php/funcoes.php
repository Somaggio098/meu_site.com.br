<?php
function delta($a, $b, $c){
    $delta = ($b**2 - 4 *$a *$c);
    return $delta;

}
function x1($a, $b ,$delta){
    return (-$b + $delta**0.5)/(2*$a);

}
function x2($a, $b, $delta){
    return (-$b - $delta**0.5)/(2*$a);
    
}