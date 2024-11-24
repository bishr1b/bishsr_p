<?php
require("../configration.php");
if(isset($_POST['tmm'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['messg'];
  
    $insertQuery = "INSERT INTO messageusers(name,email,message) VALUE('$name','$email','$message')";
    $res = mysqli_query($connectios,$insertQuery);
    if($res){
        echo "<script>
        alert('تم ارسال الرسالة بنجاح');
        </script>
        ";
        header('Location:../index.php');
    }

}