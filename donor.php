<?php
if(isset($_POST['save']))
{
$did=$_POST['did'];
$sid=$_POST['sid'];
$dname=$_POST['dname'];
$bid=$_POST['bid'];
$con=mysqli_connect("127.0.0.1","blood","blood","bloodbank");
mysqli_query($con,"replace into donor values($did,$sid,'$dname',$bid)");
header("Location: http://localhost/welcome.html");
}

if(isset($_POST['del']))
{
    $did=$_POST['did'];
    $con=mysqli_connect("127.0.0.1","blood","blood","bloodbank");
    mysqli_query($con,"delete  from  donor where did=$did");
    header("Location: http://localhost/donor.html");
    
}
?>