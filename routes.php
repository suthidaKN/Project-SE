<?php

$controllers = array('pages'=>['home', 'error' , 'company','logout'], 
                     'prof'=>['home','company','request','search','detail','approve'],
                     'student'=>['home','newRequirement','addRequirement','checkStatus', 'detailStatus']);
function call($controller, $action){
    require_once("controllers/".$controller."_controller.php");
    switch($controller)
    {
        case "pages":   $controller = new PagesController();
                        require_once("./models/jobRequirmentModel.php");
                        break;
        case "student": 
                        require_once("./models/jobRequirmentModel.php");
                        require_once("./models/studentModel.php");
                        require_once("./models/accountModel.php");
                        require_once("./models/companyModel.php");
                        $controller = new StudentController();
                        break;
  





                        break;
        case "prof":   require_once("./models/jobRequirmentModel.php");
                        $controller = new ProfController();
                        break;

    }

    $controller->{$action}();
}

if(array_key_exists($controller, $controllers)) 
{    if(in_array($action, $controllers [$controller]))
    {    call($controller, $action); }
    else
    {    call('pages', 'error'); }

}
else
{    call('pages', 'error');} 
?>