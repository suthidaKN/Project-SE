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
            $JobRequirment_List = JobRequirment::getAll();
            require_once("./views/Prof/request.php");
        }
    }
?>