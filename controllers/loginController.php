<?php
 include_once('views/pages/loginView.php');
class LoginController{

    
    public function login_page(){
         $loginView = new LoginView();
         return $loginView->output();
    }

}


?>