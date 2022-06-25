<?php
    class NotValidException extends Exception {
        function validateNumeric($num) {
            if(is_numeric($num)) {
                return true;
                return false;
            }
        }
    }
?>