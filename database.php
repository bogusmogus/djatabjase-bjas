<?php

class database {
  private $localhost;
  private $root;
  private $password;
  private $bjas;
  private $conn;

  public function __construct($localhost, $root, $password, $bjas) {
    $this->localhost = $localhost;
    $this->root = $root;
    $this->password = $password;
    $this->bjas = $bjas;
  }

  public function connect() {
    $this->conn = new mysqli($this->localhost, $this->root, $this->password, $this->bjas);

    // Check connection
    if ($this->conn->connect_error) {
      die("helaas: " . $this->conn->connect_error);
    }

    echo "verbonden";
  }

}
?>