<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@500&family=Kanit&family=Short+Stack&family=Sriracha&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="//apps.bdimg.com/libs/jqueryui/1.10.4/css/jquery-ui.min.css">
  <script src="//apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="//apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="jqueryui/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  });
  </script>
  <style>
    .dropbtn {
      background-color: #BD59FF; 
      color: #fff;
      padding: 10px;
      font-size: 17px;
      border-radius: 8px;
      border: none;
      cursor: pointer;
    }

    .dropdown {
      position: relative;
      border-radius: 10px;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #F6DAFF;
      min-width: 160px;
      text-align: start;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    .dropdown-content a {
      color: #440058;
      font-family: 'Kanit', sans-serif ;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      border-radius: 10px;
    }

    .dropdown-content a:hover {background-color: #B037D4;color:#F6DAFF;}

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .dropdown:hover .dropbtn {
      background-color: #440058;
    }
    @keyframes shine {
      0% {
        background-position-x: -500%;
      }
      100% {
        background-position-x: 500%;
      }
    }
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    .column {
      float: left;
      width: 100%;
    }
    
    .box{
        background-color: #FFFFFF;
        margin-left: 200px;
        margin-right: 200px;
        margin-top: 10px;
        height: 60px;
        border-radius: 40px;
        padding: 15px;
    }
    .box1{
        margin-left: 210px;
        margin-right: 200px;
    }
    .column2 {
      float: left;
      width: 22%; 
    }
    
    .box2{
        padding-left: 20px;
        color: #000;
        font-size: 20px;
    }
    p{
      margin-left: 400px;
      font-weight: 500;
      font-size: 50px;
      font-family: 'IBM Plex Sans Thai', sans-serif;
      color: #58006E;
    }
    p2{
      font-size: 16px;
      font-family: 'Kanit', sans-serif ;

    }
    p3{
      font-size: 18px;
      font-weight: 600;
      font-family: 'Kanit', sans-serif;
      color: #FFC802;
    }
    p4{
      font-size: 20px;
      font-weight: 600;
      font-family: 'Kanit', sans-serif;
      color: #006c68;
    }
    p5{
      font-size: 18px;
      font-weight: 600;
      font-family: 'Kanit', sans-serif;
      color: #FF0202;
    }
    .box:hover{background: #D2FFC9;}
    /*.box1:hover{background: #b0b0ff; color: #fff;}
    .box2:hover{background: #b0b0ff; color: #fff;}*/
  </style>
</head>
<body>
<div style="background-image: linear-gradient(#91FFE5,#CB8DF5);background-repeat: no-repeat; background-size: 100% 80%px;">

        <br>
        <p>
          ยื่นคำร้องขอฝึกงาน
        </p>
           
        <div class="row" >
            <div class="column">
            <img src="./images/timeline" style="width: 80px; height: 80px; text-align:center" >
                <div class="box" style="background-color: #481C80;">
                    <div class="column2">
                    

                    </div>
                </div>
         <br><br><br><br><br><br>
</div>
</body>
</html>