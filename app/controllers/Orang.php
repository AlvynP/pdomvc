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

  public function detail($id)
  {
    $data['title'] = 'Detail Orang';
    $data['orang'] = $this->model('Orang_model')->getOrangById($id);
    $this->view('templates/header', $data);
    $this->view('orang/detail', $data);
    $this->view('templates/footer');
  }
}
