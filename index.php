<?php

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
<body>
            <a class="active" href="?controller=pages&action=home">Home </a>
            <a class="active" href="?controller=test&action=home">test</a>
        

            <?php echo "controller = ".$controller.", action = ".$action;?>
            <?php require_once("./routes.php");?>
        
        
</body>   



</html>