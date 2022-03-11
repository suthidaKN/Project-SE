<?php
session_start();
if(isset($_GET['controller'])&&isset($_GET['action']))
{
    $controller = $_GET['controller'];
    $action = $_GET['action'];
}else
{
    $controller = '';
    $action = '';
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
</head>
<style>
  p1 {
    font-weight: 200;
    text-align: center;
    font-size: 50px;
    font-family: 'Sriracha', cursive;
    color: #7302E4;
    
  }
  p2{
    text-align: center;
    font-size: 20px;
    color: #fff;
  }
  @keyframes shine {
    0% {
      background-position-x: -500%;
    }
    100% {
      background-position-x: 500%;
    }
  }
  form.example input[type=text] {
          padding: 10px;
          font-size: 17px;
          border: none;
          width: 30%;
          background: #FEF5FF;
          border-radius: 15px;
      }
      form.example input[type=password] {
          padding: 10px;
          font-size: 17px;
          border: none;
          width: 30%;
          background: #FEF5FF;
          border-radius: 15px;
      }
  
      form.example button {
          width: 10%;
          padding: 10px;
          background: #9122F3;
          color: white;
          border: none;
          font-size: 17px;
          border-left: none;
          cursor: pointer;
          border-radius: 20px;
      }
  
      form.example button:hover {
          background: #950BDA;
      }
  
      form.example::after {
          content: "";
          clear: both;
          display: table;
      }
</style>
<body style="font-family: 'Prompt', sans-serif;  background-image: linear-gradient(#91FFE5,#CB8DF5);">
<nav class="navbar sticky-top navbar-expand-lg navbar-dark" style="background-color: #fff;">
  <div class="container-fluid">
    <a class="navbar-brand" href="./indexLogin.php">
      <img src="./images/logo.png" style="width: 140px; height: 80px;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
   
<div style="background-color:  #04FFC4;  text-align: center;" class="text-light">
        <?php
            echo "file:Logout" ;
        ?>
      </div>
      <div style="background-image: linear-gradient(#91FFE5,#CB8DF5);background-repeat: no-repeat; background-size: 100% 80%px;">
    <div style="height: 600px;">
      <br><br><br><br><br><br><br>
        <div style="text-align: center;">
        <p1>คุณต้องการออกจากระบบหรือไม่? </p1><br><br><br>
        <a class="btn btn-default" style="width: 10%;
          padding: 10px;
          background: #44B940;
          color: white;
          border: none;
          font-size: 17px;
          border-left: none;
          cursor: pointer;
          border-radius: 20px;" href="./indexLogin.php">ยกเลิก</a>
          <a class="btn btn-default" style="width: 10%;
          padding: 10px;
          background: #D44E4E;
          color: white;
          border: none;
          font-size: 17px;
          border-left: none;
          cursor: pointer;
          border-radius: 20px;" href="./index.php">ออกจากระบบ</a>

      </div>
</div>
  </div>
        <footer class="text-center text-lg-start text-light"style="background-color: #9933ff">
          <div class="container p-4">
            <div class="row" >
              <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h4 class="text-uppercase">Member</h4>
                <h6>Suthida Khrueanak              6220504798</h6>
              </div>
            
            </div>
          </div>
          <div class="text-center p-3 text-dark" style="background-color: #e5ccff">
            © 2021 Copyright:
            <a class="text-dark" href="http://158.108.207.4/db21/db21_007/?controller=pages&action=home">db21_007</a>
          </div>
        </footer>
</body>   

</html>



  
