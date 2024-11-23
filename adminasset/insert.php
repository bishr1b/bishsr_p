<?php  
require("../configration.php");
$name = "";
$advantage = "";
$time = "";
$price="";
$myimage = "";


$nameErorr = "";
$advantageErorr = "";
$timeErorr = "";
$imageErorr = "";
$emptyErorr = "";
$k = 1;
if(isset($_POST['insert'])){

    $name=$_POST['namee'];
    $advantage=$_POST['advantage'];
    $time=$_POST['time'];
    $price=$_POST['price'];
 $myimage=$_FILES['myimg']['name'];
 $extensionImage = pathinfo($myimage,PATHINFO_EXTENSION);
    $accept = array('jpg', 'png', 'gif', 'jpeg', 'mp4','webp');

    if (empty($name) || empty($advantage) || empty($time) ||empty($price)|| empty($myimage)) {
        $k = 0;
    }
    if (in_array($extensionImage, $accept) == false && $k == 1) {
        $imageErorr = "هذا الامتداد غير مسموح به";
    }
    if ($time <= 0 && $k == 1) {
        $timeErorr = "ادخل الوقت ب صوره صحيحه";
    }
    if ($k == 0) {
        $emptyErorr = "رجاء ادخل كل المعلومات";
    }
    if ($nameErorr == "" && $advantageErorr == ""  && $timeErorr == "" && $imageErorr == "" && $emptyErorr == "") {
        $insertQuery = "INSERT INTO courses(name,advantage,time,price,img) VALUE('$name','$advantage','$time',$price,'$myimage')";
        $res = mysqli_query($connectios, $insertQuery);
        if ($res) {
            move_uploaded_file($_FILES['myimg']['tmp_name'], "../photo/prodect/".$myimage);
            echo "<script>

     alert('تم حفظ البيانات بنجاح');
    </script>";
    header('Location:product.php');
        }
    }
   
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="form.css">
    </head>
    <body dir="rtl">

        <section class="container">
       

                <legend>اضافه كورس الى موقع</legend>
                <form action ="insert.php" method="POST" class="form" enctype="multipart/form-data">

                    <div class="input-box">
                        <label>اسم الكورس</label>
                        <input type="text" placeholder="ادخل اسم الكورس" name="namee" value="<?php echo $name ?>"
                             >
                            <div style="font-size:bold;color:red;"><?php echo $nameErorr; ?></div>
                    </div>

                    <div class="input-box">
                        <label>الفوائد من الكورس</label>
                        <input type="text" placeholder="ادخل الفوائد" name="advantage" value="<?php echo $advantage ?>"
                            >
                            <div style="font-size:bold;color:red;"><?php echo $advantageErorr; ?></div>
                    </div>

                    
                        <div class="input-box">
                            <label> كم وقت ياخذ هذا الكورس</label>
                            <input type="text"
                                placeholder="" name="time" value="<?php echo $time ?>">
                                <div style="font-size:bold;color:red;"><?php echo $timeErorr; ?></div>

                        </div>
                
                        <div class="input-box">
                            <label> السعر</label>
                            <input type="number"  placeholder="" name="price" value="<?php echo $price ?>"> 
                        </div>
                
                        <div class="input-box">
                            <label> صوره تريد تحطها للكورس</label>
                            <input type="file"
                                placeholder="" name="myimg">
                                <div style="font-size:bold;color:red;"><?php echo $imageErorr; ?></div>

                        </div>
                   
                        <div class="column-sub">
                        <button type="submit" class="submit"
                            name="insert">ارسال</button>
                        <button type="reset" class="reset"
                            name="reset">مسح البيانات</button>
                    </div>
                    <br><br>
                    <div style="font-size:bold;color:red;"><?php echo $emptyErorr; ?></div>

                  
             
            </form>
        </section>
    </body>
</html>