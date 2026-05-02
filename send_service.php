<?php 
if(isset($_POST["add"]))
{
$event=$_POST['event'];
$service=$_POST['service'];
$sql ="INSERT INTO services(event,service)
VALUES('$event','$service')";

    
     
    if($conn->query($sql)===TRUE){
        
        echo "data inserted";
       
    }else
    {
    echo "error".$conn->connect_error;
    }
    
}
?>