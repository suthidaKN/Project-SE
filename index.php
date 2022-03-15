<?php
session_start();
session_destroy();
if(isset($_GET['controller'])&&isset($_GET['action']))
{
    $controller = $_GET['controller'];
    $action = $_GET['action'];
}else
{
    $controller = 'pages';
    $action = 'home';
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv=Content-Type content="text/html; charset=tis-620">
    
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Prompt:wght@200;400;500&display=swap');
    </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">

<style>
  
@keyframes shine {
  0% {
    background-position-x: -500%;
  }
  100% {
    background-position-x: 500%;
  }
}
</style>
</head>
<body>
<nav class="navbar sticky-top navbar-expand-lg navbar-dark" style="background-color: #fff;">
  <div class="container-fluid">
    <a class="navbar-brand" href="?controller=pages&action=home">
      <img src="./images/logo.png" style="width: 140px; height: 80px;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div style="text-align: end;">
            <a class="nav-link active" aria-current="page"  style="width: 100px;  background: #cc99ff; color: #3D0377; font-size: 15px; font-weight: 400; text-align: center; border-radius: 25px;" href="./login.php">เข้าสู่ระบบ</a>
      </div>
  </div>
</nav>
   
<div style="background-color: #04FFC4; text-align: center;" class="text-light">

            <?php echo "controller = ".$controller.", action = ".$action;?>

            </div>
            <?php require_once("./routes.php");?>
        
            <footer class="text-center text-lg-start text-light"style="background-color: #9933ff">
          <div class="container p-4">
            <div class="row" >
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h4 class="text-uppercase">Member</h4>
                <h6>Pheeraya   Pechsangkoon       6220500695</h6>
                <h6>Weerawut   Srikasem           6220502108</h6>
                <h6>Nattawat   Sripatpiriyakul    6220502183</h6>
                <h6>Siripattha Pinyosamosorn      6220503350</h6>
                <h6>Suthida    Khrueanak          6220504798</h6>
              </div>
              <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h4 class="text-uppercase">Thanks</h4>
                <h6>คณะวิศวกรรมศาสตร์ กำแพงแสน</h6>
                <h6>ภาควิชาวิศวกรรมคอมพิวเตอร์</h6>
                <h6>ปีการศึกษา 2564</h6>
                <h6>ภาคปลาย</h6>
                
              </div>
            
            </div>
          </div>
        </footer>
</body>   



</html>