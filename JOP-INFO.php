   
<!DOCTYPE html>
<html lang="en">
<html dir="rtl">
<head>

    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<header>


<nav class="navbar">
    
    
    <div class="diva1"><a href="login_admin_report.php"><img class="diva" src="images/server.png"></a></div>
    <div class="diva2"><a href="av_jop.php"><img class="diva" src="images/work.png"></a></div>
    <div class="diva3"><a href="RESULT.php"><img class="diva" src="images/ex.png"></a></div>
    <div class="diva4"><a href="login.php"><img class="diva" src="images/co.png"></a></div>
    <div class="diva5"><a href="login_admin_report1.php"><img class="diva" src="images/about.png"></a></div>
    <div class="diva6"><a href="REG.php"><img class="diva" src="images/reg.png"></a></div>

        <a href="login_admin_report.php">الادارة</a>
        <a href="av_jop.php">الوظائف المتاحة</a>
        <a href="RESULT.php">نتيجة القبول</a>
        <a href="login.php">اعلان وظيفة</a>
        <a href="login_admin_report1.php">التقارير</a>
        <a href="REG.php">التسجيلات</a>
    
    </nav> 
    <a href="index.html" class="logo"><span>وكالة الاصدقاء</span> للتوظيف</a>

</header>

<div class="main">
   <form class="" id="b-form" action="JOP-INFO.php" method="POST">
   <div class="form1">
  

                <!-- <img class="form__icon11" src="images/LOGIN (1).png" style="margin-right: 100px;"></br>-->
               <span class="form__span" style="margin-right: 20px;">لاعلان وظيفة ادخال البيانات المطلوبة...</span></br>

    <b class="button1">اسم الوظيفة:<input class="form__input "required type="text" name="JOP_NAME" placeholder=""></input></b></br>
    <b class="button1">اسم المؤسسة:<input class="form__input "required type="text" name="JOP_EST_NAME" placeholder=""></input></b></br>
    <b class="button1">العنوان:<input class="form__input " required type="TEXT" name="JOP_ADDRESS" placeholder=""></input></b></br>
    <b class="button1">التخحصص:<input class="form__input "required type="TEXT" name="JOP_SPEC" placeholder=""></input></b></br>
    <b class="button1">المؤهل:<input class="form__input "required type="TEXT" name="JOP_QUL" placeholder=""></input></b></br>
    <b class="button1">اخر يوم للتقديم:<input class="form__input " required type="DATE" name="LAST_DAY" placeholder=""></input></b></br>
    <b class="button1">تاريخ الاعلان:<input class="form__input "required type="DATE" name="DAY_OF" placeholder=""></input></b></br>
  
               <div class="form2">
                
                <input class="button" type="submit" name="GO" value="اعلان..."> &nbsp 
                <input class="button" type="reset" name="" value="الغـاء">  
</div>          </div>     
   </form>
   <a href="logout.php" class="button">خروج</a>
   <?php
   if(isset($_POST['GO']))
{    
    
include 'DB/config.php';

{    

$JOP_NAME= $_POST['JOP_NAME'];
$JOP_EST_NAME= $_POST['JOP_EST_NAME'];
$JOP_ADDRESS= $_POST['JOP_ADDRESS'];
$JOP_SPEC= $_POST['JOP_SPEC'];
$JOP_QUL= $_POST['JOP_QUL'];
$LAST_DAY= $_POST['LAST_DAY'];
$DAY_OF= $_POST['DAY_OF'];

     $sql = "INSERT INTO jop_info (JOP_NAME,JOP_EST_NAME,JOP_ADDRESS,JOP_SPEC,JOP_QUL,LAST_DAY,DAY_OF)
     VALUES ('$JOP_NAME','$JOP_EST_NAME','$JOP_ADDRESS','$JOP_SPEC','$JOP_QUL','$LAST_DAY','$DAY_OF')";
     if (mysqli_query($conn, $sql)) {
        echo "تم نشر الاعلان بنجاح";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}

}
?>

</div>
</body>

</html>