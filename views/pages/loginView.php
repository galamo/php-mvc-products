<?php

class LoginView{

public function output(){
    
           $html = "<div class='login-page'>
           <div class='form'>
     
             <form class='login-form' action='index.php?controller=login&action=login' method='POST'>
               <input type='email' placeholder='email' name='email'/>
               <input type='password' placeholder='password' name='password'/>
               <button>login</button>
             </form>
           </div>
         </div>";
        return $html;
}

}

?>


