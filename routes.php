<?php
$controllers = array('profile'=>['home','error']
,'Update_user'=>['index','new','add','updatefrom','update','deleteconfirm','delete']);
//list controller and action
function call($controller, $action)
{
 require_once("controllers/".$controller."_controllers.php");
 switch($controller)
 {
    case "profile": $controller =new ProfileController();
    break;

    case "Update_user": require_once("models/Update_userModel.php");
    $controller = new Update_user_Controller();
    break;
 }
 $controller->{$action}();

}
if(array_key_exists($controller,$controllers))
{
if(in_array($action,$controllers[$controller]))
{
    call($controller,$action);
}
else
{
call('pages','error');
}
}
else
{
call('pages','error'); }
?>