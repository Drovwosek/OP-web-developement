<?php

class Person
{
    private $mail, $name, $age;

    function personSurvey()
    {

        echo "Name: " . $this->name ."; Age: " . $this->age . "<br>";
    }
}

$aboba = new Person();
$aboba -> $name = 'aboba';
$aboba -> $age = 36;
$aboba -> personSurvey();