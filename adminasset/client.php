<?php
require('sidebar.php');
require('../configration.php');
if (isset($_SESSION['login']) != 'login') {
    header('Location:../mylogin.php');
}
if($connectios){
    $myQuery = "SELECT * FROM userscoruse";
    $res = mysqli_query($connectios, $myQuery);
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
            <p>صفحه المستخدمين </p>
            <i class="fas fa-table"></i>
        </div>

        <table>
            <thead>
                <tr>
                    <th>الاسم</th>
                    <th>البريد الالكتروني</th>
                    <th>الرقم</th>
                    <th>عدد السنوات في المجال</th>
                    <th>الجنس</th>
                    <th>نوع الكورس اليريده</th>
                </tr>
            </thead>
            <tbody>
            <?php
                            if ($res == true && mysqli_num_rows($res) > 0) {
                                for ($i = 0; $i < mysqli_num_rows($res); $i++) {
                                    $row = mysqli_fetch_array($res);
                            ?>
                
                                    <tr>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['phone']; ?></td>
                                        <td><?php echo $row['year_field']; ?></td>
                                        <td><?php echo $row['gender']; ?></td>
                                        <td><?php echo $row['type_course']; ?></td>
                                    
                                          
                                        

                                    </tr>
                                    <?php
                                }
                            }
                            ?>

                
            </tbody>
        </table>
    </div>
</body>

</html>