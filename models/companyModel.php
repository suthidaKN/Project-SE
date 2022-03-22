<?php
class Company{
    public $CompayID;
    public $CompanyName;
    public $CAddress;
    public $CStreet;
    public $CTumbon;

    public function __construct( $CompayID,$CompanyName, $CAddress,$CStreet, $CTumbon){
        $this->CompayID=$CompayID;
        $this->CompanyName=$CompanyName;
        $this->CAddress=$CAddress;
        $this->CStreet=$CStreet;
        $this->CTumbon=$CTumbon;
    }
    public static function getAll(){
        $companyList=[];
        require("./connection_connect.php");
        $sql = "SELECT * FROM company";
        $result = $conn->query($sql);
        while($row=$result->fetch_assoc()){
            $CompayID = $row['CompayID'];
            $CompanyName = $row['CompanyName']; 
            $CAddress = $row['CAddress'];
            $CStreet = $row['CStreet'];
            $CTumbon = $row['CTumbon'];
            $companylList[] = new Company($CompayID,$CompanyName,$CAddress,$CStreet,$CTumbon);
        }
        require("./connection_close.php");
        return $companyList;
    }
}