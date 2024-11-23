<?php
require('sidebar.php');
require("../configration.php");
if (isset($_SESSION['login']) != 'login') {
    header('Location:../mylogin.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Dashboard</title>
</head>

<body dir="rtl">

    <div class="content">
        <div class="title-info">
            <p>لوحه التحكم</p>
            <i class="fas fa-chart-bar"></i>
        </div>


        
    </div>
</body>

</html>