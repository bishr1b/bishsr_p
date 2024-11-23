<?php
require('sidebar.php');
require('../configration.php');
if (isset($_SESSION['login']) != 'login') {
    header('Location:../mylogin.php');
}
if($connectios){
    $myQuery = "SELECT * FROM courses";
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
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css">
</head>

<body dir="rtl">

    <div class="content">



        <div class="title-info">
            <p>صفحه الكورسات </p>
            <i class="fas fa-table"></i>
        </div>

        <table>
            <thead>
                <tr>
                    <th>اسم الكورس</th>
                    <th>الفوائد</th>
                    <th>الوقت</th>
                    <th>السعر</th>
                    <th>الصوره</th>
                    <th>تعديل</th>
                    <th>حذف</th>
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
                    <td><?php echo $row['advantage']; ?></td>
                    <td><?php echo $row['time']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td>
                        <img style="width:120px; heigth:40px;" src="../photo/prodect/<?php echo $row['img']; ?>" alt="">
                    </td>


                    <td>
                        <a href="edit.php?name=<?php echo $row['name']; ?>" class="btn btn-primary">تعديل</a>
                    </td>

                    <td>
                                            <form action="delete.php" method="post">

                                                <input type="submit" class="btn btn-danger" value="حذف" name="del">
                                                <input type="hidden" value="<?php echo $row['name'] ?>" name="name">
                                                <input type="hidden" name="myimg" value="<?php echo $row['img'] ?>">

                                            </form>
                                        </td>

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