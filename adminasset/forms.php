<?php  

require("../configration.php");
if(isset($_POST['set'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $year_field=$_POST['year_field'];
    $gender=isset($_POST['gender']);
    $type_course=($_POST['type_course']);
    if($gender){
        $newgender="ذكر";
    }
    else{
        $newgender="انثى";
    }
    $insertQuery = "INSERT INTO userscoruse(name,email,phone,year_field,gender,type_course) VALUE('$name','$email',$phone,$year_field,'$newgender','$type_course')";
    $res = mysqli_query($connectios,$insertQuery);
    if($res){
        echo "<script>
        alert('تم ارسال المعلومات بنجاح');
        </script>
        ";
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
            <fieldset>

                <legend>موقع ل حجز الكورسات </legend>
                <form action ="forms.php" method="POST" class="form" >

                    <div class="input-box">
                        <label>الاسم الثلاثي</label>
                        <input type="text" placeholder="ادخل اسمك الثلاثي" name="name"
                            required >
                    </div>

                    <div class="input-box">
                        <label>البريد الالكتروني</label>
                        <input type="email" placeholder="ادخل البريد الالكتروني" name="email"
                            required>
                    </div>

                    <div class="column">
                        <div class="input-box">
                            <label> رقم الهاتف</label> 
                            <input type="number"
                                placeholder="ادخل رقم الهاتف  " name="phone"
                                required>
                        </div>

                        <div class="input-box">
                            <label>كم سنه لك في هذا المجال</label>
                            <input type="number"
                                placeholder="من فضلك جاوب" name="year_field"  required>
                        </div>
                        <div class="input-box">
                            <label> تاريخ ميلادك</label>
                            <input type="datetime-local"
                                placeholder="اذا متحب تكول ف مو ضروري">
                        </div>
                    </div>

                    <div class="gender-box">
                        <h3>ادخل جنسك</h3>
                        <div class="gender-option">
                            <div class="gender">
                                <input type="radio" id="check-male"
                                    name="gender" 
                                    value="male">
                                <label for="check-male">ذكر</label>
                            </div>

                            <div class="gender">
                                <input type="radio" id="check-female"
                                    name="gender"
                                    value="female">
                                <label for="check-female">انثى</label>
                            </div>

                        </div>
                    </div>
                    <div class="input-box">
                        <label> ادخل موقعك</label>
                        <input type="text" placeholder="في اي محافظه">
                        <input type="text" placeholder="في اي منطقه">
                    </div>

                    <div class="select-box">
                        <h3>ياكورس تريد تسجل اله</h3>
                        <select name="type_course">
                            <option value="c++" name="c">C++</option>
                            <option value="python" name="python">Python</option>
                            <option value="php" name="php">Php</option>
                            <option value="sql" name="sql">Sql</option>
                            <option value="java" name="java">Java</option>
                            <option value="c#" name="cc">C#</option>
                            <option value="js" name="js">Java Script</option>

                        </select>
                    </div>

                    <div class="input-box" >
                        <textarea type="text" placeholder="هل عندك شيء او ملاحظه تريد قوله لنا " name="message"></textarea>
                    </div>
                    
                    <div class="column-sub">
                        <button type="submit" class="submit"
                            name="set">ارسال</button>
                        <button type="reset" class="reset"
                            name="reset">مسح البيانات</button>
                    </div>
                </fieldset>
            </form>
        </section>
    </body>
</html>