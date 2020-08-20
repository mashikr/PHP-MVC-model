<?php

class App {
    public function __construct() {
        $url = $this->parseUrl();
        print_r($url);
    }

    protected function parseUrl() {
        if(isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }
}