<?php
class Orang extends Controller
{
  public function index()
  {
    $data['title'] = 'Data Orang';
    $data['orang'] = $this->model('Orang_model')->getAllOrang();
    $this->view('templates/header', $data);
    $this->view('orang/index', $data);
    $this->view('templates/footer');
  }
}
