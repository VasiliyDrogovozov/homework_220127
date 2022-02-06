<?php
namespace App;

interface Prog{
    public function programming();
}
class Computer implements Prog{
    public function programming() {
        echo "hello";
    }
}