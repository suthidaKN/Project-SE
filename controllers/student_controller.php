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
                $CID = $J->JobID;
                if($maxJobReqStuID < $CID ){
                    $maxJobReqStuID = $CID;
                    echo $maxJobReqStuID;
                }

            }
            $CID = JobRequirment::sentCountAll();
            settype($CID,"integer");
            $CID = $CID+1;
            //echo $maxJobReqStuID;
            $student = JobRequirment::getID($maxJobReqStuID);
            $JobRequirmentList=JobRequirment::getCompany();
            require_once("./views/student/requestStudent.php");
        }
        public function newCompany(){
        
            require_once("./views/student/addCompany.php");
        }
        
        public function addCompany(){
            $CID = Company::CountCompanyAll();
            settype($CID,"integer");
            $CID = $CID+1;
            
            $CompanyName= $_GET['CompanyName']; 
            $CAddress= $_GET['CAddress'];
            $CStreet= $_GET['CStreet'];
            $CTumbon= $_GET['id_amphure'];
            $CType= $_GET['CType'];
            $CPhone= $_GET['CPhone'];
            $CFax= $_GET['CFax'];
            $CManager= $_GET['CManager'];
            $CMngPosition= $_GET['CMngPosition'];
            $CCoordinator= $_GET['CCoordinator'];
            $CCoorPosition= $_GET['CCoorPosition'];
            $CCoorDepartment= $_GET['CCoorDepartment'];
            $CCoorPhone= $_GET['CCoorPhone'];
            $CCoorEmail= $_GET['CCoorEmail'];
            $CRecivePostion= $_GET['CRecivePostion'];
            $CJobDescription= $_GET['CJobDescription'];
            $CNumber= $_GET['CNumber'];
            $CSkillReq= $_GET['CSkillReq'];

            echo $CID,$CompanyName, $CAddress,$CStreet, $CTumbon,$CType,$CPhone,$CFax,$CManager,$CMngPosition,$CCoordinator,$CCoorPosition,$CCoorDepartment,$CCoorPhone,$CCoorEmail,
            $CRecivePostion,$CJobDescription,$CNumber,$CSkillReq;
            /*Company::Add($CID,$CompanyName, $CAddress,$CStreet, $CTumbon,$CType,$CPhone,$CFax,$CManager,$CMngPosition,$CCoordinator,$CCoorPosition,$CCoorDepartment,$CCoorPhone,$CCoorEmail,
            $CRecivePostion,$CJobDescription,$CNumber,$CSkillReq);*/
            StudentController::newRequirement();
        
        }
        public function checkStatus(){
            $account = Account::getID($_SESSION["user"]);
            $JobRequirment = JobRequirment::getJobReqStudent($account->stuID);
            $maxJobReqStuID= 0;
            foreach($JobRequirment as $J){
                
                settype($J->JobID,"integer" );
                $CID = $J->JobID;
                if($maxJobReqStuID < $CID ){
                    $maxJobReqStuID = $CID;
                    //echo $maxJobReqStuID;
                }

            }
            //echo $maxJobReqStuID;
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
                $CID = $J->JobID;
                if($maxJobReqStuID < $CID ){
                    $maxJobReqStuID = $CID;
                    //echo $maxJobReqStuID;
                }

            }
            //echo $maxJobReqStuID;
            $JobRequirment = JobRequirment::getID($maxJobReqStuID);
            //echo is_null($student->approvedName);
            require_once("./views/student/requirmentStatus.php");
        }     
    }
?>