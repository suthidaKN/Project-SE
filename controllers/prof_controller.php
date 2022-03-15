<?php
    class ProfController
    {
       public function home(){
            require_once("./views/Prof/homeProf.php");
        }     
        public function company() {
            require_once("./views/Prof/companyProf.php");
        }
        public function request() {
            require_once("./views/Prof/request.php");
        }
    }
?>