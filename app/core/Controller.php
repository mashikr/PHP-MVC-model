<?php

class Controller {
    protected $db;
    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=test', 'root', '');
    }
    protected function model($model) {
        require_once '../app/models/' . $model . '.php';

        return new $model;
    }

    protected function view($view, $data = []) {
        require_once '../app/views/' . $view . '.php';
    }
}