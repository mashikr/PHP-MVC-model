<?php

class Home extends Controller {
    public function index($name = '') {
        $user = $this->model('User');
        $user->name = $name;

        $about = ['profession' => 'Student', 'age' => 23];

        $this->view('home/index',['name' => $user->name, 'about' => $about]);
    }
}