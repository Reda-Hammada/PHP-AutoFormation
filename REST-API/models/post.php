<?php

class post{
    
    private $table = 'posts';
    private $connect;





// cons
    public function __construct($dataBase){

        $this->connect = $dataBase;
    }
    

    public function read(){


        $sql = 'SELECT * FROM '. $this->table .' INNER JOIN categories on posts.id_category = categories.id';
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();

        return $stmt;

    }
}



?>