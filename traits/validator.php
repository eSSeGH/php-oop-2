<?php

trait Validator {


    public function testString($str_to_test, $min_length, $max_length) {

        if (strlen($str_to_test) < $min_length || strlen($str_to_test) > $max_length) {
            throw new Exception("Il testo inserito deve essere > di $min_length e < di $max_length caratteri.");
        }

        return true;
    }

    public function isEmptyArr(array $array) {

        if (count($array) < 1) {
            throw new Exception("$array deve contenere almeno 1 elemento.");
        }

        return true;
    }

    public function testNum($num_to_test) {

        if ($num_to_test <= 0) {
            throw new Exception("Il numero inserito deve essere maggiore di 0.");
        }

        return true;
    }
}