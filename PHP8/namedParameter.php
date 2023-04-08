<?php 
class Invoice 
{
    private $description;
    private $total;
    private $data;
    private $paid;
    
 public function __construct($description,$total,$date,$paid){
    
    $this->description = $description;
    $this->total = $total;
    $this->date = $date;
    $this->paid = $paid;
    
 }  

}

 $invoice = new Invoice(
    description: 'constumer installation',
    date:new DateTime(),
    paid:true,
    total:1000,

 );

 var_dump($invoice);