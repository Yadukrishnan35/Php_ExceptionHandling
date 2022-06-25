<?php
class DivisionOP {
    function findDivision($divident,$divisor) {
        try {
            if($divisor > 0){
                echo "The result is:" .$divident/$divisor ."\n";
              }  
              else {
                throw new Exception("Division By zero Not Possible");
                
        }   }
            catch(Exception $e) {
                echo $e->getMessage();

            }
            finally {
                echo "Program Ended...";
            }

        }
    }
    $divident = readline("Enter Divident:");
    $divisor = readline("Enter Divisor:");
    $d= new DivisionOP();
    $d->findDivision($divident,$divisor);        

?>