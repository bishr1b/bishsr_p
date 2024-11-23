<?php
require("../configration.php");

if(isset($_SESSION['login'])!='login')
{
    header('Location:../mylogin.php');
}
if(isset($_POST['del']))
{
$myname=$_POST['name'];
$img=$_POST['myimg'];
$Query="DELETE FROM courses WHERE name='$myname'";
mysqli_query($connectios,$Query);
unlink("../photo/prodect/".$img);
header('Location:product.php');
}
?>