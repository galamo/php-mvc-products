<?php

class Product{

    public $id;
    public $name;
    public $category;
    public $price;
 public function __construct($id,$name,$category,$price){
    $this->id = $id;
    $this->name = $name;
    $this->category = $category;
    $this->price = $price;

 }   
}

?>