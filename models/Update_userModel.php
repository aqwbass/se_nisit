<?php
class Update_user{
        public $us_id;
        public $us_phone;
        public $us_firstName ;
        public $us_lastName ;
        public $us_role ;
        public $us_email;
        public $us_img ;
        
        //add methond here
        public function Update_user($us_id,$us_phone,$us_firstName,$us_lastName,$us_role ,$us_email,$us_img)
        {
                $this->us_id = $us_id;
                $this->us_firstName = $us_firstname;
                $this->us_lastName= $us_lastmName ;
                $this->us_phone= $us_phone ;
                $this->us_role= $us_role ;
                $this->us_email= $us_email;
                $this->us_img= $us_img ;
                
        }
        public static function getAll()
        {
                $Update_userlist = [] ;
                require("connection_connect.php");
                $sql = "SELECT * from user";
                $result = $conn->query($sql);
                while($my_row=$result->fetch_assoc())
                {
                     $us_id =$my_row['us_id'];
                     $us_firstName =$my_row['us_firstName'];
                     $us_lastmName=$my_row['us_lastName'];
                     $us_phone =$my_row['us_phone'];
                     $us_role =$my_row['us_role'];
                     $us_email=$my_row['us_email'];
                     $us_img =$my_row['us_img'];
                     


                     $Update_userlist[]=new Update_user($us_id,$us_firstName,$us_lastmName,$us_phone,$us_role,$us_email,$us_img);
                }
                //require("connection_close.php");
                return $Update_userlist;
        }
        
        public static function Add($us_phone,$us_firstName,$us_lastName,$us_role ,$us_email,$us_img)
    {
        require("connection_connect.php");
        $sql = "INSERT INTO `user`(`us_phone`, `us_fristName`, `us_lastName`,`us_role`,`us_email`,`us_img`)
        VALUES ('$area_Name','$us_firstName',$us_lastName,$us_role,$us_email,$us_img)";
        $result= $conn->query($sql);
        if($result === TRUE)
        {
            
            echo "<script>alert('Add success');</script>";
            
             
        }
        else 
        echo "Error :".$sql."<br>".$conn->error;
        require("connection_close.php");
        return "add success $result rows";
    }/*
    public static function get($area_ID) {
        require("connection_connect.php"); 
       $sql = "SELECT  * FROM area  WHERE area_ID = $area_ID"; 
       $result = $conn ->query($sql) ;
        $my_row = $result -> fetch_assoc() ; 
        $area_ID =$my_row['area_ID'];
        $area_Name =$my_row['area_Name'];
        $us_firstName =$my_row['us_fristName'];
        $us_lastName =$my_row['us_lastName']; 
        $us_role =$my_row['us_role']; 

       require ("connection_close.php");
        return new area($area_ID,$area_Name,$us_firstName,$us_lastName,$us_role); }

    public static function update($area_ID,$area_Name,$us_firstName,$us_lastName,$us_role)
    {
        
        require("connection_connect.php");
        $sql="UPDATE `area` SET `area_ID`= $area_ID,`area_Name`='$area_Name',`us_fristName`='$us_firstName',`us_lastName`=$us_lastName,`us_role`=$us_role
         WHERE area_ID = $area_ID";
        $result=$conn->query($sql);
        require("connection_close.php");
        return "$result";
    }
    public static function delete($area_ID)
    {
        require("connection_connect.php");
        $sql ="DELETE from area Where area_ID=$area_ID";
        $result=$conn->query($sql);
        require("connection_close.php");
        return "delete success $result row";
    }/*
    public static function get($cus_ID) {
        require("connection_connect.php"); 
       $sql = "SELECT  * FROM customers  WHERE cus_ID = $cus_ID"; 
       $result = $conn ->query($sql) ;
        $my_row = $result -> fetch_assoc() ; 
        $cus_ID =$my_row['cus_ID'];
        $cus_Fname =$my_row['cus_Fname'];
        $cus_Lname =$my_row['cus_Lname'];
        $cus_BDate =$my_row['cus_BDate'];
        $cus_Gender=$my_row['cus_Gender'] ;
        $cus_Nphone =$my_row['cus_Nphone'];
        $cus_Email =$my_row['cus_Email'];
        $Trainer_ID =$my_row['Trainer_ID'];  
       require ("connection_close.php");
        return new customer($cus_ID,$cus_Fname,$cus_Lname,$cus_BDate,$cus_Gender,$cus_Nphone,$cus_Email,$Trainer_ID); }
        */
}
?>