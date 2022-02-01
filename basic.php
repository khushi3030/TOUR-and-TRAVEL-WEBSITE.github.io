<?php 

$host= 'localhost';
$user='root';
$db = 'hotels_packages';
$con = mysqli_connect($host,$user,'',$db);

if(mysqli_connect_errno())
{
    echo "Connection to packages/hotels database failed.";
    mysqli_close($con);
}

?>