<?php
    class PagesController
    {
       public function home(){
            require_once("./views/pages/home.php");
        }
        public function error(){   
            require_once("./views/pages/error.php"); 
        }       
        public function company() {
            require_once("./views/pages/company.php");
        }
    }
?>