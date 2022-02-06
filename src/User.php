<?php

namespace App;
class User {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }
    public function work(Prog $var) {
        var_dump($var);
    }
}