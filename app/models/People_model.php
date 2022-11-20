<?php
class People_model
{
  private $data;
  private $people;

  public function __construct()
  {
    $this->data = file_get_contents('http://localhost/mvc/public/json/data_people_dummy.json');
    $this->people = json_decode($this->data, true);
  }

  public function getAllPeople()
  {

    return $this->people;
    // $this->people = 
  }
}
