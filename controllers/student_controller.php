<?php
    class StudentController
    {
        public function newRequirement() {
            //echo "stuSontroller";
            
            $account = Account::getID($_SESSION["user"]);
            $student = JobRequirment::getIDstudent($account->stuID);
            $JobRequirmentList=JobRequirment::getAll();
            $JobRequirmentList=JobRequirment::getCompany();
            require_once("./views/student/requestStudent.php");
        }
        public function addRequirement(){
            $JID = JobRequirment::sentCountAll();
            settype($JID,"integer");
            $JID = $JID+1;
            $Jtype = $_GET['Jtype'];
            date_default_timezone_set('asia/bangkok');
            $date = date('Y-m-d');
           
            $JStu = $_GET['JStu'];
            echo $JStu;
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
            //JobRequirment::Add($JID,$Jtype,$date,$JStu,$JPosition,$JBossname,$JBossPosition,$JCompany,$JCoordinatorName,$JCoordinatorTel,$JCoordinatorEmail, $JStartDate,$JEndDate,$JPay,$JAccommodation);
            echo "$JID,$Jtype,$date,$JStu,$JPosition,$JBossname,$JBossPosition,$JCompany,$JCoordinatorName,$JCoordinatorTel,$JCoordinatorEmail, $JStartDate,$JEndDate,$JPay,$JAccommodation";
            require_once("./views/student/requestStudent.php");
        }
        public function addCompany(){

        }

        public function checkStatus(){
            
            $account = Account::getID($_SESSION["user"]);
            $JobRequirment = JobRequirment::getIDstudent($account->stuID);
            echo is_null($JobRequirment->approvedName);
            require_once("./views/student/requirmentStatus.php");
        }     
    }
?>