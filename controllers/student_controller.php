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
            $company = Company::getAll();
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
            
            $CompanyName= $_POST['CompanyName']; 
            $CAddress= $_POST['CAddress'];
            $CStreet= $_POST['CStreet'];
            $CTumbon= $_POST['id_amphure'];
            $CType= $_POST['CType'];
            $CPhone= $_POST['CPhone'];
            $CFax= $_POST['CFax'];
            $CManager= $_POST['CManager'];
            $CMngPosition= $_POST['CMngPosition'];
            $CCoordinator= $_POST['CCoordinator'];
            $CCoorPosition= $_POST['CCoorPosition'];
            $CCoorDepartment= $_POST['CCoorDepartment'];
            $CCoorPhone= $_POST['CCoorPhone'];
            $CCoorEmail= $_POST['CCoorEmail'];
            $CRecivePostion= $_POST['CRecivePostion'];
            $CJobDescription= $_POST['CJobDescription'];
            $CNumber= $_POST['CNumber'];
            $CSkillReq= $_POST['CSkillReq'];

            echo $CID,$CompanyName, $CAddress,$CStreet, $CTumbon,$CType,$CPhone,$CFax,$CManager,$CMngPosition,$CCoordinator,$CCoorPosition,$CCoorDepartment,$CCoorPhone,$CCoorEmail,
            $CRecivePostion,$CJobDescription,$CNumber,$CSkillReq;
            Company::Add($CID,$CompanyName, $CAddress,$CStreet, $CTumbon,$CType,$CPhone,$CFax,$CManager,$CMngPosition,$CCoordinator,$CCoorPosition,$CCoorDepartment,$CCoorPhone,$CCoorEmail,
            $CRecivePostion,$CJobDescription,$CNumber,$CSkillReq);
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