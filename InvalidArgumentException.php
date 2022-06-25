<?php
function divide($divident, $divisor) {
   try{
    if(!is_numeric($divident) || !is_numeric($divisor)) {
        throw new InvalidArgumentException("Function accepts only numeric values");
    }
    return $divident / $divisor;
}catch(InvalidArgumentException $e) {
  echo  $e->getMessage();
}
}
echo divide(10,5);
?>