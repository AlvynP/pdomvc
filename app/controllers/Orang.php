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

  public function create()
  {
    // var_dump($_POST);
    if ($this->model('Orang_model')->createDataOrang($_POST) > 0) {
      Flasher::setFlash('berhasil', 'ditambahkan', 'success');
      header('Location: ' . BASEURL . '/orang');
      exit;
    } else {
      Flasher::setFlash('gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASEURL . '/orang');
      exit;
    }
  }
}
