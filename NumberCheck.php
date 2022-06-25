<?php
class Largest {
   static function findLargest($num1,$num2) {
    try {

        if(is_numeric($num1) && is_numeric($num2)) {
                if($num1>$num2) {
                    echo "$num1 is greater value"."\n";
                }
                else {
                    echo"$num2 is greater value"."\n";
                }
        }else {
            throw new Exception("Not Valid Input");
        }

    }catch(Exception $e) {
        echo "In catch Block"."\n";
        echo $e->getMessage();
    }

}
}
$num1 = readline("Enter the First Number:");
$num2 = readline("Enter the Second Number:");
Largest::findLargest($num1,$num2);
?>