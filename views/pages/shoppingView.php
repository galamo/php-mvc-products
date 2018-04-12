<?php
require_once('models/product.php');
class ShoppingView{

public $products;
public $ps;

public function __construct(){
    
    $this->products [] = new Product(1,"Milk","Diary",7);
    $this->products [] = new Product(1,"coffee","kashot",12);
    $this->products [] = new Product(1,"apple","Diary",1);
    $this->products [] = new Product(1,"Kaved Avaz","Meat",22);
    $this->ps = array("aa","sdsd");
}

public function output(){
    
    ?>

<h1>Products </h1>

    
   <?php
   foreach ($this->products as $value) {
       ?>
    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $value->id ?></h5>
    <p class="card-text"><?php echo $value->name . $value->price ?>.</p>
    <a href="#" class="btn btn-primary">buy</a>
  </div>
</div>
       <?php
   }
}

}

?>





