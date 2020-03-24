<?php
class Update_user_Controller
{
    public function index()
    {
        $Update_user_list = Update_user::getAll();
        require_once('views/Update_user.php') ;
    }
    
    public function add()
    {
        //$staff_ID = NULL ;
        //ปิดการแจ้งเตือนerror
        @ini_set('display_errors', '0');
        $us_firstName =$_GET['us_fristName'];
        $us_phone =$_GET['us_phone'];
        $us_role=$_GET['us_role'] ;
        $us_email=$_GET['us_email'] ;
        $us_img=$_GET['us_img'] ;
        // กันการไม่มีข้อมูล
        if($area_Name == NULL){
            echo "<script>alert('Error');</script>";
            Update_user_Controller::index(); 
        }
        else{
        Update_user::Add($us_name,$us_phone,$us_role,$us_email,$us_img);
        Update_user_Controller::index(); 
        }
        
        
        
    }
    /*
   public function updateform()
   {
        error_reporting(~E_NOTICE);
        $us_id =$_GET['us_id'];
        $user = Update_user::get($us_id);
        
        //require_once('../');

   }
    public function update()
   {  
    $area_ID =$_GET['area_ID'];  
    $area_Name =$_GET['area_Name'];
    $generality =$_GET['generality'];
    $distance=$_GET['distance'] ;
    $size_area=$_GET['size_area'] ;
    area::update($area_ID,$area_Name,$generality,$distance,$size_area);
    AreaController::index(); 
   }
   
   public function deleteconfirm()
   {
      error_reporting(~E_NOTICE);
      $area_ID =$_GET['area_ID'];
      $area = area::get($area_ID); 
      //require_once('views/staff/deleteconfirm.php');
   }
   public function delete()
   {
    $area_ID =$_GET['area_ID'];
    area::delete($area_ID);
    AreaController::index(); 
   
   }
   
*/
   
}
?>