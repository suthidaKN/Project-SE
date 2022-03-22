<?php
    class StudentController
    {
       public function home(){
            require_once("./views/student/homeStudent.php");
        }     
        public function newRequirement() {
            //echo "stuSontroller";

            $JobRequirment_List = JobRequirment::getAll();
            //$studentList=student::getAll();
            require_once("./views/student/requestStudent.php");
        }
        public function addRequirement(){
            $JID = $_GET['JID'];
            $Jtype = $_GET['Jtype'];
            $JDate = $_GET['JDate'];
            $JStu = $_GET['JStu'];
            $JPosition = $_GET['JPosition'];
            $JBossname = $_GET['JBossname'];
            $JBossPosition = $_GET['JBossPosition'];
            $JCompany = $_GET['JCompany'];
            $JCoordinatorName = $_GET['JCoordinatorName'];
            $JCoordinatorTel = $_GET['JCoordinatorTel'];
            $JCoordinatorEmail = $_GET['JCoordinatorEmail'];
            $JStartDate = $_GET['JStartDate'];
            $JEndDate = $_GET['JEndDate'];
            $JPay = $_GET['JPay'];
            $JAccommodation = $_GET['JAccommodation'];
            JobRequirment::Add($JID,$Jtype,$JDate,$JStu,$JPosition,$JBossname,$JBossPosition,$JCompany,$JCoordinatorName,$JCoordinatorTel,$JCoordinatorEmail, $JStartDate,$JEndDate,$JPay,$JAccommodation);
            StudentController :: home();
        
        }
        public function checkStatus(){
            
            $account = Account::getID($_SESSION["user"]);
            $JobRequirment = JobRequirment::getIDstudent($account->stuID);
            echo is_null($JobRequirment->approvedName);
            require_once("./views/student/requirmentStatus.php");
        }     
    }
?>