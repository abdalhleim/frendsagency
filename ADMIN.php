   
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
   <form class="" id="b-form" action="ADMIN.php" method="post">
   <div class="form1">
  
                <!-- <img class="form__icon11" src="images/LOGIN (1).png" style="margin-right: 100px;"></br>-->
               <span class="form__span" style="margin-right: 20px;">لتسجيل في ادارة الموقع ادخال البيانات المطلوبة...</span></br>
    <b class="button1">الاسم :<input class="form__input " type="text"required name="ADMIN_NAME" placeholder=""></input></b></br>
    <b class="button1">رقم الهاتف:<input class="form__input " type="number"required name="ADMIN_PHONE" placeholder=""></input></b></br>
    <b class="button1">البريد:<input class="form__input " type="email"required name="ADMIN_EMAIL" placeholder=""></input></b></br>
    <b class="button1">الصلاحيات:<input class="form__input " type="text"required name="ADMIN_SED" placeholder=""></input></b></br>
    <b class="button1">كلمة المرور:<input class="form__input " type="password" name="ADMIN_PASSWORD" placeholder=""></input></b></br>
  
               <div class="form2">
                
                <input class="button" type="submit" name="GO" value="تسجيل"> &nbsp 
                <input class="button" type="reset" name="" value="الغـاء">  
</div>          </div>     
   </form>
   <?php
      if(isset($_POST['GO']))
   {    
include_once 'DB/config.php';

{    

$ADMIN_NAME= $_POST['ADMIN_NAME'];
$ADMIN_PHONE= $_POST['ADMIN_PHONE'];
$ADMIN_EMAIL= $_POST['ADMIN_EMAIL'];
$ADMIN_SED= $_POST['ADMIN_SED'];
$ADMIN_PASSWORD= $_POST['ADMIN_PASSWORD'];

     $sql = "INSERT INTO  admin (ADMIN_NAME,ADMIN_PHONE,ADMIN_EMAIL,ADMIN_SED,ADMIN_PASSWORD)
     VALUES ('$ADMIN_NAME','$ADMIN_PHONE','$ADMIN_EMAIL','$ADMIN_SED','$ADMIN_PASSWORD')";
     if (mysqli_query($conn, $sql)) {
        echo "تم التسجيل بنجاح الف مبروك";
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