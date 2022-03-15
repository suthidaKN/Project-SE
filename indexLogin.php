<?php
session_start();
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
        body{
                background-image: linear-gradient(#91FFE5,#CB8DF5);
                font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                
            }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 15%;
            background-color:#FFF;
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        li a {
            display: block;
            color: #7863a0;
            padding: 8px 16px;
            text-decoration: none;
            font-size: 18px;
        }

        li a.active {
            background-color: #08571C;
            color: white;
        }

        li a:hover:not(.active) {
            background-color: #7863a0;
            color: white;
        }

        
        h5{
            background-color: #0fcbff;
            font-size: 15px;
        }
       

    </style>
</head>
<body>
    <ul>
        <a style="text-align: center;" href="?controller=pages&action=home">
          <img src="./images/logo.png" style="width: 175px; height: 100px;">
        </a>
        <?php
          require_once("./models/accountModel.php");
          $account = Account::getID($_SESSION["user"]);
          if(!is_null($account->stuID)){ ?>
            <li><a class="active" ><?php echo "$account->titleName$account->stuFN $account->stuLN" ?></a> </li>
            <li><a href="?controller=pages&action=home">หน้าหลัก</a></li>
            <li><a href="?controller=pages&action=company">รายชื่อสถานประกอบการ</a></li>
            <li><a href="?controller=student&action=index">ยื่นคำร้องขอฝึกงาน</a></li>
            <li><a href="?controller=student&action=index">ตรวจสอบผลการอนุมัติ</a></li>
            <li><a href="?controller=student&action=index">ส่งรายงานการฝึกงาน</a></li>
            <li><a href="?controller=student&action=index">ตรวจสอบผลการฝึกงาน</a></li>
          <?php
          }
          elseif(!is_null($account->pID)){ ?>
            <li><a class="active" ><?php echo "$account->pTitle$account->pFN $account->pLN" ?></a> </li>
            <li><a href="?controller=prof&action=home">หน้าหลัก</a></li>
            <li><a href="?controller=prof&action=company">รายชื่อสถานประกอบการ</a></li>
            <li><a href="?controller=prof&action=request">ตรวจสอบคำร้องของนิสิต</a></li>
            <li><a href="?controller=prof&action=index">ตรวจสอบรายงาน</a></li>
            <li><a href="?controller=prof&action=index">ตรวจสอบประวัตินิสิต</a></li>
         <?php
          }
          elseif(!is_null($account->oID)){ ?>
            <li><a class="active" ><?php echo "$account->oFN $account->oLN" ?></a> </li>
            <li><a href="?controller=officer&action=home">หน้าหลัก</a></li>
            <li><a href="?controller=officer&action=company">รายชื่อสถานประกอบการ</a></li>
            <li><a href="?controller=officer&action=index">ตรวจสอบคำร้องของนิสิต</a></li>
            <li><a href="?controller=officer&action=index">ตรวจสอบรายงาน</a></li>
          <?php
          }
          
        ?>

        <li><a href="./Logout.php">ออกจากระบบ</a></li>
    </ul>
    <div style="margin-left:15%;">
            <?php echo "controller = ".$controller.", action = ".$action;?>
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
            
    </div>
        
</body>   



</html>