<?php
if(isset($_POST['save']))
{
$did=$_POST['did'];
$bid=$_POST['bid'];
$sid=$_POST['sid'];
$hname=$_POST['hname'];
$con=mysqli_connect("127.0.0.1","blood","blood","bloodbank");
mysqli_query($con,"replace into hosp values($did,$bid,$sid,'$hname')");
header("Location: http://localhost/welcome.html");
}

if(isset($_POST['del']))
{
    $did=$_POST['did'];
    $con=mysqli_connect("127.0.0.1","blood","blood","bloodbank");
    mysqli_query($con,"delete  from  hosp where did=$did");
    header("Location: http://localhost/hosp.html");
    
}
?>