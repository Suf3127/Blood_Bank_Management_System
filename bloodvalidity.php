<?php
if(isset($_POST['save']))
{
$bid=$_POST['bid'];
$bdate=$_POST['bdate'];

$con=mysqli_connect("127.0.0.1","blood","blood","bloodbank");
mysqli_query($con,"replace into bloodvalidity values($bid,'$bdate')");
header("Location: http://localhost/welcome.html");
}

if(isset($_POST['del']))
{
    $bid=$_POST['bid'];
    $con=mysqli_connect("127.0.0.1","blood","blood","bloodbank");
    mysqli_query($con,"delete  from  bloodvalidity where bid=$bid");
    header("Location: http://localhost/bloodvalidity.html");
    
}
?>