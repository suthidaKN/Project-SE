<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@500&family=Kanit&family=Short+Stack&family=Sriracha&display=swap" rel="stylesheet">
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
  margin-left: 400px;
  font-weight: 500;
  font-size: 50px;
  font-family: 'IBM Plex Sans Thai', sans-serif;
  color: #58006E;
}
p2{
  font-size: 20px;

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
                            <p2>ชื่อ-นามสกุล</p2>
                        </div> 
                    </div>  
                    <div class="column2">
                        <div class="box2" style="color: fff;">
                            <p2>รหัสนิสิต</p2>
                        </div> 
                    </div>  
                    <div class="column2">
                        <div class="box2" style="color: fff;">
                            <p2>ประเภท</p2>
                        </div> 
                    </div>  
                    <div class="column2">
                        <div class="box2" style="color: fff;">
                            <p2>สถานะ</p2>
                        </div> 
                    </div>
                </div> 
            </div>
            <div class="column">
                <div class="box">
                    <div class="column2">
                        <div class="box2">
                            <p2>สุธิดา เครือนาค</p2>
                        </div> 
                    </div>  
                    <div class="column2">
                        <div class="box2">
                            <p2>6220504798</p2>
                        </div> 
                    </div>  
                    <div class="column2">
                        <div class="box2">
                            <p2>ฝึกงาน</p2>
                        </div> 
                    </div>  
                    <div class="column2">
                        <div class="box2">
                            <p2>อนุมัติ</p2>
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