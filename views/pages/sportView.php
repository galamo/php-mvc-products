<?php

class SportView{

public function output(){
    
   $html =  "<button onclick='functions.load()' 
   >show iframe</button><iframe style='display:inline' width='800px' height='800px' id='iframe' src='' frameborder='0'></iframe>
    <iframe style='display:inline' width='800px' height='800px' id='iframe2' src='' frameborder=''></iframe>";
    return $html;
}

}

?>





