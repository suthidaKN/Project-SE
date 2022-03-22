<?php
    class StudentController
    {
        public function newRequirement() {
            //echo "stuSontroller";
            
            $account = Account::getID($_SESSION["user"]);
            $JobRequirment = JobRequirment::getJobReqStudent($account->stuID);
            $maxJobReqStuID= 0;
            foreach($JobRequirment as $J){
                
                settype($J->JobID,"integer" );
                $JID = $J->JobID;
                if($maxJobReqStuID < $JID ){
                    $maxJobReqStuID = $JID;
                    echo $maxJobReqStuID;
                }

            }
            echo $maxJobReqStuID;
            $student = JobRequirment::getID($maxJobReqStuID);
            $JobRequirmentList=JobRequirment::getAll();
            $JobRequirmentList=JobRequirment::getCompany();
            require_once("./views/student/requestStudent.php");
        }
        public function addRequirement(){
            $account = Account::getID($_SESSION["user"]);
            $JobRequirment = JobRequirment::getJobReqStudent($account->stuID);
            $maxJobReqStuID= 0;
            foreach($JobRequirment as $J){
                
                settype($J->JobID,"integer" );
                $JID = $J->JobID;
                if($maxJobReqStuID < $JID ){
                    $maxJobReqStuID = $JID;
                    echo $maxJobReqStuID;
                }

            }
            echo $maxJobReqStuID;
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
            JobRequirment::Add($JID,$Jtype,$date,$JStu,$JPosition,$JBossname,$JBossPosition,$JCompany,$JCoordinatorName,$JCoordinatorTel,$JCoordinatorEmail, $JStartDate,$JEndDate,$JPay,$JAccommodation);
            $student = JobRequirment::getID($maxJobReqStuID);
            require_once("./views/student/requestStudent.php");
        }
        public function addCompany(){

        }
        public function checkStatus(){
            $account = Account::getID($_SESSION["user"]);
            $JobRequirment = JobRequirment::getJobReqStudent($account->stuID);
            $maxJobReqStuID= 0;
            foreach($JobRequirment as $J){
                
                settype($J->JobID,"integer" );
                $JID = $J->JobID;
                if($maxJobReqStuID < $JID ){
                    $maxJobReqStuID = $JID;
                    echo $maxJobReqStuID;
                }

            }
            echo $maxJobReqStuID;
            $JobRequirment = JobRequirment::getID($maxJobReqStuID);
            //echo is_null($student->approvedName);
            require_once("./views/student/status.php");
        }

        public function detailStatus(){
            
            $account = Account::getID($_SESSION["user"]);
            $JobRequirment = JobRequirment::getJobReqStudent($account->stuID);
            $maxJobReqStuID= 0;
            foreach($JobRequirment as $J){
                
                settype($J->JobID,"integer" );
                $JID = $J->JobID;
                if($maxJobReqStuID < $JID ){
                    $maxJobReqStuID = $JID;
                    echo $maxJobReqStuID;
                }

            }
            echo $maxJobReqStuID;
            $JobRequirment = JobRequirment::getID($maxJobReqStuID);
            //echo is_null($student->approvedName);
            require_once("./views/student/requirmentStatus.php");
        }     
    }
?>