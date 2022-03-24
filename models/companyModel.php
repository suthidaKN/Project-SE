<?php
class Company{
    public $CompansyID;
    public $CompanyName;
    public $CAddress;
    public $CStreet;
    public $CTumbon;
    public $district_id;
    public $zip_code;
    public $district_name_th;
    public $amphure_id;
    public $amphure_name_th;
    public $provinceid;
    public $province_name_th;
    public $CType;
    public $CPhone;
    public $CFax;
    public $CManager;
    public $CMngPosition;
    public $CCoordinator;
    public $CCoorPosition;
    public $CCoorDepartment;
    public $CCoorPhone;
    public $CCoorEmail;
    public $CRecivePostion;
    public $CJobDescription;
    public $CNumber;
    public $CSkillReq;


    public function __construct($CompanyID,$CompanyName, $CAddress,$CStreet, $CTumbon,$district_id,$district_name_th,$amphure_id,$amphure_name_th,$province_id,
    $province_name_th,$zip_code,$CType,$CPhone,$CFax,$CManager,$CMngPosition,$CCoordinator,$CCoorPosition,$CCoorDepartment,$CCoorPhone,$CCoorEmail,
    $CRecivePostion,$CJobDescription,$CNumber,$CSkillReq){
        $this->CompanyID=$CompanyID;
        $this->CompanyName=$CompanyName;
        $this->CAddress=$CAddress;
        $this->CStreet=$CStreet;
        $this->CTumbon=$CTumbon;
        $this->zip_code=$zip_code;
        $this->district_id=$district_id;
        $this->district_name_th=$district_name_th;
        $this->amphure_id=$amphure_id;
        $this->amphure_name_th=$amphure_name_th;
        $this->province_id=$province_id;
        $this->province_name_en=$province_name_th;
        $this->CType=$CType;
        $this->CPhone=$CPhone;
        $this->CFax=$CFax;
        $this->CManager=$CManager;
        $this->CMngPosition=$CMngPosition;
        $this->CCoordinator=$CCoordinator;
        $this->CCoorPosition= $CCoorPosition;
        $this->CCoorDepartment=$CCoorDepartment;
        $this->CCoorPhone=$CCoorPhone;
        $this->CCoorEmail= $CCoorEmail;
        $this->CRecivePostion=$CRecivePostion;
        $this->CJobDescription=$CJobDescription;
        $this->CNumber=$CNumber;
        $this->CSkillReq=$CSkillReq;
    
    }
    public static function getAll(){
        $companyList=[];
        require("./connection_connect.php");
        $sql = "SELECT * FROM company,districts,provinces
        where company.CTumbon = districts.district_id and districts.amphure_id = provinces.province_id";
        $result = $conn->query($sql);
        while($row=$result->fetch_assoc()){
            $CompanyID = $row['CompanyID'];
            $CompanyName = $row['CompanyName']; 
            $CAddress = $row['CAddress'];
            $CStreet = $row['CStreet'];
            $CTumbon = $row['CTumbon'];
            $district_id = $row['district_id'];
            $zip_code = $row['zip_code'];
            $district_name_th = $row['district_name_th'];
            $amphure_id = $row['amphure_id'];
            $amphure_name_th = $row['amphure_name_th'];
            $province_id = $row['province_id'];
            $province_name_th = $row['province_name_th'];
            $CType = $row['CType'];
            $CPhone = $row['CPhone'];
            $CFax = $row['CFax'];
            $CManager = $row['CManager'];
            $CMngPosition = $row['CMngPosition'];
            $CCoordinator = $row['CCoordinator'];
            $CCoorPosition = $row['CCoorPosition'];
            $CCoorDepartment = $row['CCoorDepartment'];
            $CCoorPhone = $row['CCoorPhone'];
            $CCoorEmail = $row['CCoorEmail'];
            $CRecivePostion = $row['CRecivePostion'];
            $CJobDescription = $row['CJobDescription'];
            $CNumber = $row['CNumber'];
            $CSkillReq = $row['CSkillReq'];
        

            $companylList[] = new Company($CompanyID,$CompanyName, $CAddress,$CStreet, $CTumbon,$district_id,$district_name_th,$amphure_id,$amphure_name_th,$province_id,
            $province_name_th,$zip_code,$CType,$CPhone,$CFax,$CManager,$CMngPosition,$CCoordinator,$CCoorPosition,$CCoorDepartment,$CCoorPhone,$CCoorEmail,
            $CRecivePostion,$CJobDescription,$CNumber,$CSkillReq);
        }
        require("./connection_close.php");
        return $companyList;
    }
    public static function Add(){
        $companyList=[];
        require("./connection_connect.php");
        $sql = "INSERT INTO `company` (`CompanyID`, `CompanyName`, `CAddress`, `CStreet`, `CTumbon`, 
        `CType`, `CPhone`, `CFax`, `CManager`, `CMngPosition`, `CCoordinator`, `CCoorPosition`,
         `CCoorDepartment`, `CCoorPhone`, `CCoorEmail`, `CReceivePosition`, `CJobDescription`,
          `CNumber`, `CSkillReq`) VALUES ('$CompanyID', '$CompanyName', '$CAddress', $CStreet, 
          '$CTumbon', '$CType', '$CPhone', '$CFax', '$CManager', '$CMngPosition', '$CCoordinator', '$CCoorPosition', '$CCoorDepartment',
           '$CCoorPhone', '$CCoorEmail', '$CRecivePostion', '$CJobDescription', '$CNumber','$CSkillReq')
        ";
        $result = $conn->query($sql);
        while($row=$result->fetch_assoc()){
            $CompanyID = $row['CompanyID'];
            $CompanyName = $row['CompanyName']; 
            $CAddress = $row['CAddress'];
            $CStreet = $row['CStreet'];
            $CTumbon = $row['CTumbon'];
            $district_id = $row['district_id'];
            $zip_code = $row['zip_code'];
            $district_name_th = $row['district_name_th'];
            $amphure_id = $row['amphure_id'];
            $amphure_name_th = $row['amphure_name_th'];
            $province_id = $row['province_id'];
            $province_name_th = $row['province_name_th'];
            $CType = $row['CType'];
            $CPhone = $row['CPhone'];
            $CFax = $row['CFax'];
            $CManager = $row['CManager'];
            $CMngPosition = $row['CMngPosition'];
            $CCoordinator = $row['CCoordinator'];
            $CCoorPosition = $row['CCoorPosition'];
            $CCoorDepartment = $row['CCoorDepartment'];
            $CCoorPhone = $row['CCoorPhone'];
            $CCoorEmail = $row['CCoorEmail'];
            $CRecivePostion = $row['CRecivePostion'];
            $CJobDescription = $row['CJobDescription'];
            $CNumber = $row['CNumber'];
            $CSkillReq = $row['CSkillReq'];

            $companylList[] = new Company($CompanyID,$CompanyName, $CAddress,$CStreet, $CTumbon,$district_id,$district_name_th,$amphure_id,$amphure_name_th,$province_id,
            $province_name_th,$zip_code,$CType,$CPhone,$CFax,$CManager,$CMngPosition,$CCoordinator,$CCoorPosition,$CCoorDepartment,$CCoorPhone,$CCoorEmail,$CStuPosition,
            $CRecivePostion,$CJobDescription,$CNumber,$CSkillReq);
        }
        require("./connection_close.php");
        return $companyList;
        }

}