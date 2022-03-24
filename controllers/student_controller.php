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
            $JID = JobRequirment::sentCountAll();
            settype($JID,"integer");
            $JID = $JID+1;
            echo $maxJobReqStuID;
            $student = JobRequirment::getID($maxJobReqStuID);
            $JobRequirmentList=JobRequirment::getAll();
            $JobRequirmentList=JobRequirment::getCompany();
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