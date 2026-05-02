<?php
if(isset($_POST["login"]))
{
  

$u_email=$_POST['u_email'];
$u_password=$_POST['u_password'];


$sql ="select * from users where u_email='$u_email' and u_password='$u_password' ";

$result= $conn->query($sql);
if($result->num_rows > 0){
    header("location:particpant_page.php");
}
else{
    echo "error";
}
}
 ?>