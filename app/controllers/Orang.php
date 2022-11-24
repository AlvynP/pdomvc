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
      Flasher::setFlash('successfully', 'added', 'success');
      header('Location: ' . BASEURL . '/orang');
      exit;
    } else {
      Flasher::setFlash('failed', 'to added', 'danger');
      header('Location: ' . BASEURL . '/orang');
      exit;
    }
  }

  public function delete($id)
  {
    // var_dump($_POST);
    if ($this->model('Orang_model')->deleteDataOrang($id) > 0) {
      Flasher::setFlash('successfully', 'delete', 'success');
      header('Location: ' . BASEURL . '/orang');
      exit;
    } else {
      Flasher::setFlash('failed', 'to delete', 'danger');
      header('Location: ' . BASEURL . '/orang');
      exit;
    }
  }

  public function getEdit()
  {
    // echo 'ok';
    // echo $_POST['id'];
    echo json_encode($this->model('Orang_model')->getOrangById($_POST['id']));
  }

  public function edit()
  {
    // var_dump($_POST);
    if ($this->model('Orang_model')->editDataOrang($_POST) > 0) {
      Flasher::setFlash('successfully', 'edit', 'success');
      header('Location: ' . BASEURL . '/orang');
      exit;
    } else {
      Flasher::setFlash('failed', 'to edit', 'danger');
      header('Location: ' . BASEURL . '/orang');
      exit;
    }
  }

  public function search()
  {
    $data['title'] = 'Data Orang';
    $data['orang'] = $this->model('Orang_model')->searchDataOrang();
    $this->view('templates/header', $data);
    $this->view('orang/index', $data);
    $this->view('templates/footer');
  }
}
