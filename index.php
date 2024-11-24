<?php
require('configration.php');
$myQuery = "SELECT *  FROM courses";
$res = mysqli_query($connectios, $myQuery);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="style.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="ahmedtest.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script
        src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs"
        type="module"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


</head>

<body dir="rtl">

    <script src="ahmedtsest.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <header>
        <div id="nabvar">
            <img src="photo/logo.webp" alt="food lover logo" />
            <nav>
                <ul>
                    <li><a href="#home"> الصفحة الرئيسية</a></li>
                    <li><a href="#about">عن الموقع والادارة</a></li>
                    <li><a href="#langPop">لغات البرمجة</a></li>
                    <li><a href="#cycles">الكورسات</a></li>
                    <li><a href="#contact">التواصل معنا</a></li>
                </ul>
            </nav>
        </div>
        <div class="content">
            <h1>اهلا وسهلا بك في معهد <span
            class="primary-text">برمجلي-BARMIGLY</span>  ل دورات <span
                    class="primary-text">البرمجة</span>
                و تقويه وتطوير التفكير المنطقي و توسيع الافكار</h1>
            <p>هنا ستلقى اشهر لغات برمجه و اين تستخدم و هنالك كورسات ايضا ل
                تطويرها
            </p>
            <button id="toggleButton" onclick="showMore()" class="bbttn">اقرأ المزيد</button>

            <p id="more" class="textmore">
            هذا المشروع تم عمله بواسطه طلاب مرحله ثانيه معلومات واتصالات مع الاسماء الذين شاركو في تكوين البرنامج حيث تم عمل هذا البرنامج بأستخدام اللغات الآتية: <br>
            1-HTML, 2-CSS, 3-JAVASCRIPT, 4-PHP,AND BOOTSTRAP
            نشكر جامعة بغداد كلية الخوارزمي لأعطائنا هذه الفرصة لتقديم البرنامج المتكامل " BARMIGLY"


            </p>
            <br><br>


        </div>



        <div class="typewriter">
            <span id="typed-text"></span>
        </div>

        <script>
            const phrases = ['أهلاً_بكم_في_موقعنا', 'أستمع_للموسيقا_الهادئة', 'أنظر_لهذا_العرض', ];
            let index = 0,
                letterIndex = 0;

            function type() {
                if (letterIndex < phrases[index].length) {
                    document.getElementById('typed-text').innerText += phrases[index][letterIndex];
                    letterIndex++;
                    setTimeout(type, 100);
                } else {
                    setTimeout(erase, 2000);
                }
            }

            function erase() {
                if (letterIndex > 0) {
                    document.getElementById('typed-text').innerText = phrases[index].slice(0, --letterIndex);
                    setTimeout(erase, 100);
                } else {
                    index = (index + 1) % phrases.length;
                    setTimeout(type, 1000);
                }
            }

            type();
        </script>

        <style>
            .typewriter {
                font-size: 90px;
                color: #ffea00;
                font-family: 'Courier New', Courier, monospace;
                height: 1000px;
                overflow: hidden;
                text-align: left;
                padding-left: 50px;
            }
        </style>


    </header>

    <main>
        <section id="about">
            <div class="container">

                <div class="title">
                    <h2>
                        اعضاء الفريق هم في قسم<span class="primary-text">
                            المعلومات والاتصالات </span>
                        مرحله ثانيه
                    </h2>
                    <p><span class="primary-text">حيث يتم تدريس المواد
                            البرمجيه منذ عشرات سنين</span></p>
                </div>

                <div class="about-content">

                    <div class="aboutt">

                        <div class="box">
                            <img src="photo/ph1.jpg" alt />
                            <div>
                                <h2 class="primary-text"> بشر عبدالزاق </h2>
                                <p>قسم data analysis </p>
                                <a href="https://www.facebook.com/login/?next=https%3A%2F%2Fwww.facebook.com%2F"><i
                                        class="fa-brands fa-facebook"></i></a>
                                <a href="https://www.instagram.com/?hl=en"><ion-icon name="logo-instagram"><i
                                            class="fa-brands fa-instagram"></i></a>
                                <a href="https://www.youtube.com/account"><i
                                        class="fa-brands fa-youtube"></i></a>

                            </div>
                        </div>
                        <div class="box">
                            <img src="photo/ph2.avif" alt />
                            <div>
                                <h2 class="primary-text">يوسف اياد</h2>
                                <p>قسم wep design</p>
                                <a href="https://www.facebook.com/login/?next=https%3A%2F%2Fwww.facebook.com%2F"><i
                                        class="fa-brands fa-facebook"></i></a>
                                <a href="https://www.instagram.com/?hl=en"><ion-icon name="logo-instagram"><i
                                            class="fa-brands fa-instagram"></i></a>
                                <a href="https://www.youtube.com/account"><i
                                        class="fa-brands fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="box">
                            <img src="photo/ph3.avif" alt />
                            <div>
                                <h2 class="primary-text"> احمد اياد</h2>
                                <p>قسم game devloper </p>
                                <a href="https://www.facebook.com/login/?next=https%3A%2F%2Fwww.facebook.com%2F"><i
                                        class="fa-brands fa-facebook"></i></a>
                                <a href="https://www.instagram.com/?hl=en"><ion-icon name="logo-instagram"><i
                                            class="fa-brands fa-instagram"></i></a>
                                <a href="https://www.youtube.com/account"><i
                                        class="fa-brands fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="box">
                            <img src="photo/ph4.jpg" alt />
                            <div>
                                <h2 class="primary-text"> امنه عامر</h2>
                                <p>قسم IOT </p>
                                <a href="https://www.facebook.com/login/?next=https%3A%2F%2Fwww.facebook.com%2F"><i
                                        class="fa-brands fa-facebook"></i></a>
                                <a href="https://www.instagram.com/?hl=en"><ion-icon name="logo-instagram"><i
                                            class="fa-brands fa-instagram"></i></a>
                                <a href="https://www.youtube.com/account"><i
                                        class="fa-brands fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="box">
                            <img src="photo/ph4.jpg" alt />
                            <div>
                                <h2 class="primary-text">اية وسام</h2>
                                <p>قسم networks</p>
                                <a href="https://www.facebook.com/login/?next=https%3A%2F%2Fwww.facebook.com%2F"><i
                                        class="fa-brands fa-facebook"></i></a>
                                <a href="https://www.instagram.com/?hl=en"><ion-icon name="logo-instagram"><i
                                            class="fa-brands fa-instagram"></i></a>
                                <a href="https://www.youtube.com/account"><i
                                        class="fa-brands fa-youtube"></i></a>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>
    </main>

    <div id="langPop">
        <div class="container">

            <h2>اشهر لغات البرمجة واستخداماتها</h2>

            <div class="langPop-items">

                <div class="langPop-item">

                    <img src="photo/c++.jpg">
                    <div>
                        <h3>C++</h3>

                        <p>
                            تعتبر C++ لغة برمجة قوية وعالية الأداء، تستخدم
                            على نطاق واسع في تطوير الأنظمة والبرمجيات، برمجة
                            الألعاب، والمحاكاة في الوقت الحقيقي. تدعم ميزات
                            البرمجة الشيئية، الإجرائية، والجنسية. تعقدها
                            ومرونتها تجعلها مناسبة للتطبيقات ذات الموارد
                            المحدودة
                        </p>
                    </div>

                </div>
                <div class="langPop-item">
                    <img src="photo/python.jpg">
                    <div>
                        <h3>python</h3>

                        <p>
                            بايثون هي لغة برمجة مفسرة وعالية المستوى وعامة
                            الأغراض. تركز على قراءة الكود باستخدام التباعد
                            البارز ولديها مكتبة معيارية ضخمة. بايثون شائعة
                            في تطوير الويب، تحليل البيانات، الذكاء
                            الاصطناعي، الحوسبة العلمية، والأتمتة
                        </p>
                    </div>
                </div>
                <div class="langPop-item">
                    <img src="photo/php.jpg">
                    <div>
                        <h3>php</h3>

                        <p>
                            هي لغة برمجة نصية من جهة الخادم تستخدم على نطاق
                            واسع لتطوير الويب، ولكنها تستخدم أيضًا كلغة
                            برمجة عامة الأغراض. يتم تضمينها في HTML، مما
                            يجعل من السهل إنشاء صفحات ويب ديناميكية. تدعم
                            منصات شائعة مثل ووردبريس ومعروفة بسهولة تعلمها
                            وسرعة تنفيذها.
                        </p>
                    </div>
                </div>
                <div class="langPop-item">
                    <img src="photo/wpdesing.jpg">
                    <div>
                        <h3>front end</h3>

                        <p>
                            هذه هي التقنيات الأساسية لبناء صفحات الويب. HTML
                            يهيكل المحتوى، CSS تضيف الشكل، وJavaScript تضيف
                            التفاعلية. معًا، يخلقون مواقع ويب ديناميكية
                            وجذابة توفر تجربة مستخدم ممتعه
                        </p>
                    </div>
                </div>
                <div class="langPop-item">
                    <img src="photo/java.png">
                    <div>
                        <h3>java</h3>

                        <p>
                            جافا هي لغة برمجة موجهة للكائنات تُستخدم على
                            نطاق واسع لتطوير تطبيقات المؤسسات، تطبيقات
                            الجوال (أندرويد)، وبرامج الأنظمة الكبيرة. فلسفة
                            "اكتب مرة، شغل في أي مكان" تجعلها خيارًا قويًا
                            للتطوير عبر المنصات
                        </p>
                    </div>
                </div>
                <div class="langPop-item">
                    <img src="photo/CSHARP.jpg">
                    <div>
                        <h3>C#</h3>

                        <p>
                            سي شارب هي لغة برمجة حديثة وموجهة للكائنات
                            طورتها مايكروسوفت كجزء من مبادرة .NET. تستخدم
                            لتطوير مجموعة واسعة من التطبيقات، بما في ذلك
                            الويب، الجوال، سطح المكتب، والألعاب باستخدام
                            محرك Unity. تجمع بين قوة C++ وسهولة Visual
                            Basic، مما يجعلها متعددة الاستخدامات وسهلة
                            الاستخدام.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="cycles" id="cycles">

        <div class="cycles-desc">
            <h2 class="primary-text">
                دورات تدريبة في مجال برمجة
            </h2>

            <p style="font-size: 30px;">
                البرمجة هي عملية كتابة تعليمات للتحكم في أجهزة الكمبيوتر
                لأداء مهام محددة. هي اللغة التي تمكننا من بناء التطبيقات
                والمواقع الإلكترونية والألعاب. من فوائد البرمجة أنها تساهم
                في حل المشكلات، أتمتة العمليات، وتحليل البيانات. نستخدم
                البرمجة لتطوير البرمجيات التي تجعل حياتنا أسهل وأكثر كفاءة،
                مثل تطبيقات الهاتف الذكي وأنظمة الإدارة. كما تساعد البرمجة
                في الابتكار التكنولوجي، حيث تفتح الأبواب أمام حلول جديدة
                وأفكار إبداعية. بشكل عام، البرمجة أساس التطور التقني في
                عصرنا الحالي، وتمكننا من تحويل الأفكار إلى واقع ملموس.
            </p>

        </div>
        <div class="cycles-img">

            <dotlottie-player
                src="https://lottie.host/f5bc4e99-5ce1-4eb9-8215-039e75d19810/qyyMGvQDaw.json"
                background="transparent" speed="1"
                style="width: 400px; height: 400px;" loop
                autoplay></dotlottie-player>
        </div>
    </section>

    <section id="courses">
        <?php
        if ($res == true && mysqli_num_rows($res) > 0) {
            for ($i = 0; $i < mysqli_num_rows($res); $i++) {
                $ROW = mysqli_fetch_array($res);

        ?>

                <div class="content">
                    <h3><?php echo $ROW['name'] ?></h3>
                    <img src="photo/prodect/<?php echo $ROW['img'] ?>" alt>
                    <p> <span
                            class="primary-text tac">الوقت:</span><?php echo $ROW['time'] ?> <br>
                        <span class="primary-text tac">الفوائد:</span>
                        <?php echo $ROW['advantage'] ?>
                    </p>

                    <h6 class="primary-text"> <span class="tac" style="font-size: 22px;font-weight: bold; color: #2f2f2f;;">السعر: </span><?php echo $ROW['price'] ?>$</h6>
                    <ul>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star-half"></i></li>
                    </ul>

                    <button class="course1"><a href="adminasset/forms.php">لاشتراك ب كورس</a></button>
                </div>



        <?php }
        } ?>

    </section>



    <section class="contact" id="contact">
        <div class="content">
            <h2>للتواصل معنا</h2>
            <p style="font-size: 40px;"> اذا اردت التسجيل في اي من الكورسات السابقة, يرجي ملأ المعلومات الآتية: </p>
        </div>
        <div class="continer">
            <div class="contactinfo">
                <div class="box">
                    <div class="icon"><ion-icon name="location-outline"></ion-icon></div>
                    <div class="text">
                        <h3 style="margin-right: 10px;"> Address</h3>
                        <p>Iraq_Baghdad</p>
                    </div>
                </div>


                <div class="box">
                    <div class="icon"><ion-icon name="call-outline"></ion-icon></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>+964 789 845 2045</p>
                    </div>
                </div>

                <div class="box">
                    <div class="icon"><ion-icon name="mail-outline"></ion-icon></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>Codly&Barmijly
                            @gmail.com</p>
                    </div>
                </div>

                <h2 class="txt">تواصل معنا</h2>
                <ul class="sci">
                    <li><a href="https://www.facebook.com/login/?next=https%3A%2F%2Fwww.facebook.com%2F"><ion-icon name="logo-facebook"></ion-icon></a></li>
                    <li><a href="https://www.instagram.com/?hl=en"><ion-icon name="logo-instagram"></ion-icon></a></li>
                    <li><a href="https://x.com/i/flow/login"><ion-icon name="logo-twitter"></ion-icon></a></li>
                    <li><a href="https://www.linkedin.com"><ion-icon name="logo-linkedin"></ion-icon></a></li>
                </ul>
            </div>
            <div class="contactform">
                <form style="font-size: 45px;" method="post" action="adminasset/message.php">
                    <h2>ارسل رسالة</h2>
                    <div class="inputbox">
                        <input type="text" name="name" required="required">
                        <span>الاسم الكامل</span>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="email" required="required">
                        <span>البريد الالكتروني</span>
                    </div>
                    <div class="inputbox">
                        <textarea required="required" name="messg"></textarea>
                        <span>اكتب رسالتك...</span>
                    </div>
                    <div class="inputbox">
                        <input type="submit" value="send" name="tmm">

                    </div>
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3335.645902893237!2d44.38531027629338!3d33.27576135833012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15577fd90674b805%3A0x8886ee3106858542!2z2KzYp9mF2LnYqSDYqNi62K_Yp9ivINin2YTYrNin2K_YsdmK2Yc!5e0!3m2!1sen!2siq!4v1732466392673!5m2!1sen!2siq" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </form>
            </div>


        </div>



    </section>

    <div class="footer">
        <div class="container">
            <img src="photo//amm.jpg" alt="Logo">
            <p>انضم الى مجتمعنا للبرمجة</p>
            <div class="social-icons">
                <i class="fas fa-home"></i>
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-linkedin"></i>
            </div>

            <p class="copyright">
                &copy; 2024 <span>Codly & برمجلي</span> All Rights Reserved
            </p>
            <br>
            <p>استع للموسيقا الهادئة***<iframe src="https://www.youtuberepeater.com/watch?v=jfKfPfyJRdk#gsc.tab=0" frameborder="0"></iframe>
        </div>

    </div>

</body>

</html>
</body>

</html>