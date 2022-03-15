<!DOCTYPE html>
<html lang="en">
<head>
    <style>

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
  margin-left: 220px;
  font-size: 50px;
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  color: #58006E;
}

    /*.box:hover{background: #C9C9CC; color: #fff;}
    .box1:hover{background: #b0b0ff; color: #fff;}
    .box2:hover{background: #b0b0ff; color: #fff;}*/
</style>
</head>
<body>
<div style="background-image: linear-gradient(#91FFE5,#CB8DF5);background-repeat: no-repeat; background-size: 100% 80%px;">

        <br>
        <p>
          ตรวจสอบคำร้องของนิสิต
        </p>
        <div class="row" >
            <div class="column">
                <div class="box1">
                    <form method ="get" action="">
                        <input type = "text" placeholder="Search..." name = "key" style="width:78%; border-radius: 50px;  padding: 10px; font-size: 17px; border: none; background: #FEF5FF;">
                        <input type = "hidden" name = "controller" value = "register"/>
                        <button type = "submit" name = "action" value = "search" style="width:20%; border-radius: 50px;  padding: 10px; background: #8A8A8A; color: white; border: none; font-size: 17px; border-left: none; cursor: pointer;">ค้นหา...</button>
                    </form>
                </div>
            </div>
            <div class="column">
                <div class="box" style="background-color: #006c68;">
                    <div class="column2">
                        <div class="box2" style="color: fff;">
                            <p1>ชื่อ-นามสกุล</p1>
                        </div> 
                    </div>  
                    <div class="column2">
                        <div class="box2" style="color: fff;">
                            <p1>รหัสนิสิต</p1>
                        </div> 
                    </div>  
                    <div class="column2">
                        <div class="box2" style="color: fff;">
                            <p1>ประเภท</p1>
                        </div> 
                    </div>  
                    <div class="column2">
                        <div class="box2" style="color: fff;">
                            <p1>สถานะ</p1>
                        </div> 
                    </div>
                </div> 
            </div>
            <div class="column">
                <div class="box">
                    <div class="column2">
                        <div class="box2">
                            <p1>สุธิดา เครือนาค</p1>
                        </div> 
                    </div>  
                    <div class="column2">
                        <div class="box2">
                            <p1>6220504798</p1>
                        </div> 
                    </div>  
                    <div class="column2">
                        <div class="box2">
                            <p1>ฝึกงาน</p1>
                        </div> 
                    </div>  
                    <div class="column2">
                        <div class="box2">
                            <p1>อนุมัติ</p1>
                        </div> 
                    </div>
                    <form method ="get" action="">
                        <input type = "hidden" name = "controller" value = "register"/>
                        <button type = "submit" name = "action" value = "detail" style="width:10%; border-radius: 50px;  padding: 5px; background: #EE87FC; color: #440058; border: none; font-size: 15px; border-left: none; cursor: pointer;">รายละเอียด</button> 
                </div> 
            </div>
        </div>
         <br><br><br>
</div>
</body>
</html>