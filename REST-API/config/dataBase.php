<?php


 class dataBase {

// database parameters 

    private $host = 'localhost';
    private $dataBaseName = 'blog';
    private $user = 'Reda'; 
    private $password ='123456';
    private $connection;


// database connect 

public function connect(){

    $this->connection = null;


    try {

        $this->connection = new PDO('mysql:host=' . $this->host . ';dbname=' .$this->dataBaseName,
                                    $this->user, $this->password);

  }

  catch(PDOexception $error){

    echo "connection error " .  $error->getMessage();

  }


  return $this->connection;


 
}

}