<?php
class phpTest{
    function squareNumber($number) {
        if(!is_int($number) {
        throw new InvalidArgumentException('provided argument is not a number!');
        }
        return $number * $number;
        }
        

}
?>