<?php
class Orang_model
{

  private $table = 'orang';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }
  // private $dbh;
  // private $stmt;

  // public function __construct()
  // {

  //   // PDO

  //   //data source name
  //   $dsn = 'mysql:host=localhost;dbname=mvc';

  //   try {
  //     $this->dbh = new PDO($dsn, 'root', '');
  //   } catch (PDOException $e) {
  //     die($e->getMessage());
  //   }

  //   // MYSQLI

  //   // $this->databaseHandler = mysqli_connect('localhost', 'root', '', 'mvc');

  //   // $this->databaseHandler = mysqli_query($this->databaseHandler, $query);
  //   // if (mysqli_num_rows($this->databaseHandler) == 1) {
  //   //   return mysqli_fetch_assoc($this->databaseHandler);
  //   // }

  //   // $rows = [];
  //   // while ($row = mysqli_fetch_assoc($result)) {
  //   //   $rows[] = $row;
  //   // }
  // }

  public function getAllOrang()

  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();


    // $this->stmt = $this->dbh->prepare('SELECT * FROM orang');
    // $this->stmt->execute();
    // // var_dump($this->stmt);
    // return $this->stmt->fetchAll(PDO::FETCH_ASSOC);


    // $this->people =

    // $this->statement = $this->databaseHandler->query('SELECT * FROM all');
    // if (mysqli_num_rows($this->databaseHandler) == 1) {
    //   return mysqli_fetch_assoc($this->databaseHandler);
    // }
    // $rows = [];
    // while ($row = mysqli_fetch_assoc($this->statement)) {
    //   $rows[] = $row;
    // }
  }

  public function getOrangById($id)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }
}
