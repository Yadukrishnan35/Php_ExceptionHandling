<?php
include 'CustomeException.php';
class Area  {
    function findArea($base,$height) {
    try{
        if(is_numeric($base) && is_numeric($height))
        return $base*$height;
    
    else {
        throw new NotValidException("Not a Numeric Value");
    }
    }catch(NotValidException $e) {
        echo $e->getMessage();

    }
}
}
$ar= new Area();
echo $ar->findArea('a',20);
?>