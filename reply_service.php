<?php 
if(isset($_POST["add"]))
{
  
$event=$_POST['event'];
$service=$_POST['service'];
$reply=$_POST['reply'];
$reason=$_POST['reason'];
$sql ="INSERT INTO replies(event,service,reply,reason)
VALUES('$event','$service','$reply','$reason')";

    
     
    if($conn->query($sql)===TRUE){
        
        echo "data inserted";
       
    }else
    {
    echo "error".$conn->connect_error;
    }
    
}
?>