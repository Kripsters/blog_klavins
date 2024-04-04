<?php

class Validator {
    static public function string($data, $min = 0, $max = INF) {
        $data = trim($data);

        if (!is_string($data) || strlen($data) < $min || strlen($data) > $max) {
            return false;
        } else {
            return true;
        }
    }
}