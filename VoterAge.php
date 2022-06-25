<?php
class Vote
{
    function checkVote($age)
    {
        try {
            if ($age < 18) 
            throw new Exception("Age should be greater than 18");    
            else
            echo "Eligible for voting";    
        } catch (Exception $e) {
            echo "Executing catch \n" . $e->getMessage();
        }
    }
}
$age = readline("Enter age:");
$v = new Vote();
$v->checkVote($age);
?>