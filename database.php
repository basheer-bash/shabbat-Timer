<?php

class mngr
{ 
    private $mysqli;
    
    function __construct($conn)
    {
        $this->mysqli=$conn;
    }
    
    function myquery($query)
    {
        $result = mysqli_query($this->mysqli,$query);
        return $result;
    }
    
    function insertData($timeStart,$stopTimer,$date)
    {
        $query = "INSERT INTO `timerofshabat` (`Day`, `Beginning_Time`, `End_Time`) VALUES ('$date', '$timeStart', '$stopTimer')";
        $result = mysqli_query($this->mysqli,$query);
        return $result;
    }
    
    function remove($id)
    {
        $query = "DELETE FROM `timerofshabat` WHERE id='$id' ";
        $result = mysqli_query($this->mysqli,$query);
        
        return $result;
    }
    function power($result)
    {
        if(mysqli_num_rows($result) > 0)
        {
            return "red";
        }
        else 
       {
            return "black";
       }
    }
    function power1($Begin,$End,$S1)
    {
        if($Begin < $S1 && $End > $S1)
        {
            return "on";
        }
        else 
        {
            return "off";
        }
    }
}