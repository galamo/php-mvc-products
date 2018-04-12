<?php
//require_once('views/pages/sportView.php');
//require_once('views/pages/shoppingView.php');
class NewsController{

    public function __construct($view){
        require_once('views/pages/'.$view);
    }

    public function sport(){
        $sportView = new SportView();
        return $sportView->output();
    }

    public function shopping(){
        $shoppingView = new ShoppingView();
        return $shoppingView->output();
    }
}


?>