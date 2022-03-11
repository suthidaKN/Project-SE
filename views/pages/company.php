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
    background-color: #FFFFFFB9;
    margin-left: 200px;
    margin-right: 200px;
    margin-top: 10px;
    margin-bottom: 20px;
    height: 200px;
    border-radius: 50px;
    padding: 30px;
}
.box1{
    margin-left: 210px;
    margin-right: 200px;
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
          รายชื่อสถานประกอบการ
        </p>
        <div class="row" >
        <div class="column">
        <div class="box1">
        <form method ="get" action="">
            <input type = "text" placeholder="Search..." name = "key" style="width:78%; border-radius: 50px;  padding: 10px; font-size: 17px; border: none; background: #FEF5FF;">
            <input type = "hidden" name = "controller" value = "register"/>
            <button type = "submit" name = "action" value = "search" style="width:20%; border-radius: 50px;  padding: 10px; background: #9122F3; color: white; border: none; font-size: 17px; border-left: none; cursor: pointer;">Search</button>
        </form>
        </div>
        </div>
          
          <div class="column">
              <div class="box">
              </div> 
          </div>
          <div class="column">
              <div class="box">
              </div> 
          </div>  
          <div class="column">
              <div class="box">
                
              </div> 
          </div>  
          <div class="column">
              <div class="box">
                
              </div> 
          </div>  
          <div class="column">
              <div class="box">
                
              </div> 
          </div>  
         </div>
         <br><br><br>
</div>
</body>
</html>