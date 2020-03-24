<?php
        
        $servername = "localhost";
        $username = "se62_17";
        $password = "se62_17";
        $dbname = "se62_17";
        //Create connection
        $conn = new mysqli($servername,$username, $password);
        //check connection
        if($conn->connect_error){
                die("Connection failed: ".$conn->connect_error);
        
        }
        


        //Connect database
        if(!$conn->select_db($dbname)){
                die("Connection failed: ".$conn->connect_error);
        }

        
?>