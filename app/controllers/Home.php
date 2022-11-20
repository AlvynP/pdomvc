<?php

class Home extends Controller
{
  public function index()
  {
    // echo 'Home/index';
    $data['title'] = 'Home';
    $data['name'] = $this->model('User_model')->getUser();
    $this->view('templates/header', $data);
    $this->view('home/index', $data);
    $this->view('templates/footer');
  }
}
