<?php

    class Student{
        public $voornaam = "Hallo";
        function voorNaam(){
            print $voornaam;
        }
    }
    $new_object = new Student();
    $new_object->voorNaam();

?>