<?php
$name=$_POST['text'];
$paswd=$_POST['password'];
if($name=="Codeheda" && $paswd=="10641")
{
    //echo "Success";
    header("Location: http://localhost/welcome.html");
}
else
  echo "Failure";
 
 ?>