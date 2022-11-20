<?php

class About extends Controller
{
  public function index($name = 'Alvyn', $status = 'Homelless')
  {
    // echo "Hello, my name is $name, I'm $status";
    $data['name'] = $name;
    $data['status'] = $status;

    $data['title'] = 'About';
    $this->view('templates/header', $data);
    $this->view('about/index', $data);
    $this->view('templates/footer');
  }

  public function page()
  {
    $this->view('about/page');
  }
}
