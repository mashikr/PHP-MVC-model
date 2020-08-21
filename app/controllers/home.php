<?php

class Home extends Controller {
    public function index($name = '') {
        echo($name);
        echo '<br>home/index';
    }

    public function test() {
        echo 'home/test';
    }
}