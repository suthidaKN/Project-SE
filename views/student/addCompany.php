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

  <script type="text/javascript">
    $(document).ready(function(){
        $("#province").change(function(){
            var province_id=$(this).val();
            $.ajax({
                url:"provincexDistrictOnchange.php",
                method:"POST",
                data:{provinceID:province_id},
                success:function(data){
                    $("#district").html(data);
                }
            });
        });

    });
</script>
  <script>
  $(function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  });
  </script>
  <style>
     form.example input[type=text] {
          padding: 12px;
          font-size: 17px;
          border: none;
          width: 75%;
          background: #FEF5FF;
          border-radius: 30px;
          color: #58006E;
        
      }
  
      form.example button {
          width: 100px;
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
      .container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}
.container {
  display: block;
  position: relative;
  padding-left: 50px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 16px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  color : #440058;
  font-family: 'IBM Plex Sans Thai', sans-serif;
  margin-left: 13px;
}


/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #FEF5FF;
;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #CB8DF5;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #7000FF;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: #fff;
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
        background-color: #FFFFFF7C;
        margin-left: 160px;
        margin-right: 160px;
        margin-top: 10px;
        height: 1900px;
        border-radius: 50px;
        padding: 30px;
        
    }
    .row1:after {
    content: "";
    display: table;
    clear: both;
    }

    .column1 {
    float: left;
    width: 100%;
    }
    
    .box1{
        background-color: #FFFFFF7C;
        margin-left: 160px;
        margin-right: 160px;
        margin-top: 10px;
        height: 220px;
        border-radius: 50px;
        padding: 30px;
        text-align: center;
    }
    .column2 {
        float: left;
        width: 65%; 
    }
    .column3 {
        float: left;
        width: 25%; 
    }
        
    .box2{
        padding-left: 10px;
        padding-top: 10px;
       
    }
    p{
      margin-left: 450px;
      font-weight: 500;
      font-size: 50px;
      font-family: 'IBM Plex Sans Thai', sans-serif;
      color: #58006E;
    }
    p2{
      font-size: 16px;
      font-family: 'Kanit', sans-serif ;
      color:#440058;
      margin-left: 13px;

    }
    p3{
      font-size: 20px;
      font-family: 'Kanit', sans-serif ;
      color:#440058;
      margin-left: 13px;

    }
    p4{
      font-size: 35px;
      font-weight: 600;
      font-family: 'Kanit', sans-serif;
      color: #FFC802;
    }
    p3{
      font-size: 35px;
      font-family: 'Kanit', sans-serif ;
      color: #006c68;
      font-weight: 600;
    
    }

    /*.box:hover{background: #D2FFC9;}
    .box1:hover{background: #b0b0ff; color: #fff;}
    .box2:hover{background: #b0b0ff; color: #fff;}*/
  </style>
</head>
<body>
<div style="background-image: linear-gradient(#91FFE5,#CB8DF5);background-repeat: no-repeat; background-size: 100% 80%px;">

        <br>
        <p>
            เสนอสถานที่ฝึกงานใหม่
        </p>
           
        <div class="row" >
            <div class="column">
                <div class="box">
            
            <div class="box2">
              
                
                <form class="example" action="" method="GET">
                 
                    <p2>ลำดับที่ </p2><br> <input type="text" name="CompayID"/><br><br>
                    <p2>ชื่อสถานประกอบการ/หน่วยงาน </p2><br><input type="text" name="CompanyName"  value="<?php echo "$CompanyID"?>"/><br><br>
                    <p2>ประเภทธุรกิจ</p2><br> <input type="text" name="CType"/><br><br>
                    <p2>ที่อยู่ </p2><br>
                   

                    <select name="PV_id" style="width: 75%;; border-radius: 20px; padding: 10px; background: #f6efff; color:#9122F3; font-size: 17px;" id="province">
                                    <option value=" " >-เลือกจังหวัด-</option>
                                    <?php
                                        require("./connection_connect.php");
                                        $sql="SELECT * FROM provinces order by province_name_th";
                                        $result = $conn->query($sql);
                                        while($my_row = $result->fetch_assoc()){
                                    ?>
                                    <option value="<?= $my_row["province_id"];?>"><?=$my_row["province_name_th"]; ?></option>
                                    <?php } ?>        
                                </select>
                                <br><br>
                                <select name="id_amphure" style="width: 75%;; border-radius: 20px; padding: 10px; background: #f6efff; color:#9122F3; font-size: 17px;" id="district">
                                    <option value=" ">-เลือกอำเภอ-</option>
                                </select><br><br>
               

                    <p2>เบอร์โทรศัพท์ ของสถานประกอบการ/หน่วยงาน </p2><br> <input type="text" name="CPhone"/><br><br>
                    <p2>เบอร์โทรสาร ของสถานประกอบการ/หน่วยงาน </p2><br><input type="text" name="CFax"/><br><br>
                    <p2>ชื่อผู้จัดการ สถานประกอบการ/หัวหน้าหน่วยงาน </p2><br><input type="text" name="CManager"/><br><br>
                    <p2>ตำแหน่ง ของผู้จัดการ/หัวหน้าหน่วยงาน </p2><br><input type="text" name="CMngPosition" ><br><br>
                    <p2>ชื่อผู้ประสานงาน ของสถานประกอบการ/หน่วยงาน </p2><br><input type="text" name="CCoordinator"/><br><br>
                    <p2>ตำแหน่ง ของผู้ประสานงาน </p2><br> <input type="text" name="CCoorPosition"/><br><br>
                    <p2>แผนก/ฝ่าย ของผู้ประสานงาน </p2><br> <input type="text" name="JCCoorDepartment"/><br><br>
                    <p2>เบอร์โทรศัพท์ของผู้ประสานงาน </p2><br> <input type="text" name="CCoorPhone"/><br><br>
                    <p2>อีเมล (E-mail) ของผู้ประสานงาน </p2><br> <input type="text" name="CCoorEmail"/><br><br>
                    <p2>ตำแหน่งงานที่ต้องการรับนิสิตฝึกงาน/สหกิจศึกษา </p2><br> <input type="text" name="CRecivePostion"/><br><br>
                    <p2>ลักษณะงานที่นิสิตต้องปฏิบัติ (Job Description) </p2><br> <input type="text" name="CJobDescription"/><br><br>
                    <p2>จำนวนที่รับ (คน) </p2><br> <input type="text" name="CNumber"/><br><br>
                    <p2>ความสามารถทางวิชาการหรือทักษะที่นิสิตควรมี </p2><br> <input type="text" name="CSkillReq"/><br><br>


                    <div style="margin-left: 20%;">
                    <input type="hidden" name="controller" value="newRequirement"/><br><br>
                    <a class="btn btn-default" style="background-color: #7000FF; color: #fff; border-radius: 20px; font-family: 'IBM Plex Sans Thai', sans-serif; " href=?controller=student&action=newRequirement>ยกเลิก</a><br><br>
                    <a class="btn btn-default" style="background-color: #7000FF; color: #fff; border-radius: 20px; font-family: 'IBM Plex Sans Thai', sans-serif; " href=?controller=student&action=addCompany></a>เสนอสถานที่ฝึกงานใหม่<br><br>                        
                    </div>
                
                  </form>
                 
                 
              
                
              </div>
              </div>
            </div> 
            </div>
            <br><br><br><br><br><br>
         
</div>
</body>
</html>