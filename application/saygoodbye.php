<?php

namespace App;

/**
 * trait for say good bye
 */
trait SayGoodBye
{
    public function goodBye($name)
    {
        if (is_noll($name)) {
            echo "Good bye<br>";
        } else {
            echo "Good bye ".$name, "<br>";
        }
    }
}