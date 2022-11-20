<?php
class People extends Controller
{
  public function index()
  {
    $data['title'] = 'Data People';
    $data['people'] = $this->model('People_model')->getAllPeople();
    $this->view('templates/header', $data);
    $this->view('people/index', $data);
    $this->view('templates/footer');
  }
}
