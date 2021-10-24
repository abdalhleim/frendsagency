   
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
   <form class="" id="b-form" action="EST-IN.php" method="POST">
   <div class="form1">
  
                <!-- <img class="form__icon11" src="images/LOGIN (1).png" style="margin-right: 100px;"></br>-->
               <span class="form__span" style="margin-right: 20px;">لتسجيل المؤسسة الرجاء ادخال البيانات المطلوبة...</span></br>

    <b class="button1">اسم المؤسسة:<input class="form__input "required type="text" name="EST_NAME" placeholder=""></input></b></br>
    <b class="button1">عنوان العمل:<input class="form__input "required type="text" name="EST_ADDRESS" placeholder=""></input></b></br>
    <b class="button1">كلمة المرور:<input class="form__input "required type="PASSWORD" name="EST_PASSWORD" placeholder=""></input></b></br>
    <b class="button1">رقم الهاتف:<input class="form__input "required type="NUMBER" name="EST_PHONE" placeholder=""></input></b></br>
    <b class="button1">رقم الفاكس:<input class="form__input "required type="NUMBER" name="EST_FAX" placeholder=""></input></b></br>
    <b class="button1">البريد:<input class="form__input " requiredtype="EMAIL" name="EST_EMAIL" placeholder=""></input></b></br>
  
               <div class="form2">
                <input class="button" type="submit" name="GO" value="تسجيل"> &nbsp 
                <input class="button" type="reset" name="" value="الغـاء">  
</div>
</div> 


   </form>
   <?php
   if(isset($_POST['GO']))
{    
include_once 'DB/config.php';
{    
$EST_NAME= $_POST['EST_NAME'];
$EST_ADDRESS= $_POST['EST_ADDRESS'];
$EST_PASSWORD= $_POST['EST_PASSWORD'];
$EST_PHONE= $_POST['EST_PHONE'];
$EST_FAX= $_POST['EST_FAX'];
$EST_EMAIL= $_POST['EST_EMAIL'];
     $sql = "INSERT INTO est_in (EST_NAME,EST_ADDRESS,EST_PASSWORD,EST_PHONE,EST_FAX,EST_EMAIL)
     VALUES ('$EST_NAME','$EST_ADDRESS','$EST_PASSWORD','$EST_PHONE','$EST_FAX','$EST_EMAIL')";
     if (mysqli_query($conn, $sql)) {
        echo "تم تسجيل المؤسسة بنجاح";
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