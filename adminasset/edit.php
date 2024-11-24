<?php  
require("../configration.php");

if(isset($_POST['uppdate'])){
$nn=$_POST['nana'];
    $name=$_POST['nameee'];
    $advantage=$_POST['advantage'];
    $time=$_POST['time'];
    $price=$_POST['price'];
 $myimage=$_FILES['myimg']['name'];
 $beforeimg=$_POST['before'];

 if($myimage==""){
    $fileImg=$beforeimg;
 }
 else{
    $fileImg=$myimage;
 }

   
    
        $insertQuery = "UPDATE courses SET name='$name', advantage='$advantage', time='$time' , price=$price , img='$fileImg' WHERE name='$nn' ";;
        $res = mysqli_query($connectios, $insertQuery);
        if ($res) {
            move_uploaded_file($_FILES['myimg']['tmp_name'], "../photo/prodect/".$fileImg);
            echo "<script>

     alert('تم حفظ البيانات بنجاح');
    </script>";
    header('Location:product.php');
        
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
              <?php  if (isset($_GET['name']))
         {
            $NAME=$_GET['name'];
        $Query="SELECT * FROM courses WHERE name='$NAME' ";
        $resualt=mysqli_query($connectios,$Query);
        if($resualt){
            $ROW=mysqli_fetch_array($resualt);
        ?>
                <form action ="edit.php" method="POST" class="form" enctype="multipart/form-data">
<input type="hidden" name="nana" value="<?php echo$ROW['name'] ?>">
                    <div class="input-box">
                        <label>اسم الكورس</label>
                        <input type="text" placeholder="ادخل اسم الكورس" name="nameee" value="<?php echo$ROW['name'] ?>" >
                    </div>

                    <div class="input-box">
                        <label>الفوائد من الكورس</label>
                        <input type="text" placeholder="ادخل الفوائد" name="advantage" value="<?php echo $ROW['advantage']?>"
                            >
                            
                    </div>

                    
                        <div class="input-box">
                            <label> كم وقت ياخذ هذا الكورس</label>
                            <input type="text"
                                placeholder="" name="time" value="<?php echo $ROW['time']  ?>">
                               

                        </div>
                
                        <div class="input-box">
                            <label> السعر</label>
                            <input type="number"  placeholder="" name="price" value="<?php echo $ROW['price'] ?>"> 
                        </div>
                
                        <div class="input-box">
                            <label> صوره تريد تحطها للكورس</label>
                            <input type="text" name="before" value="<?php echo $ROW['img']?>">
                            <input type="file"
                                placeholder="" name="myimg">

                        </div>
                   
                        <div class="column-sub">
                        <button type="submit" class="submit"
                            name="uppdate">تعديل المنتج</button>
                     
                    </div>
                  

                  
             
            </form>
            <?php
}
}
?>
        </section>
    </body>
</html>