   
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
   <form class="" id="b-form" action="USER-IN.php" method="post">
   <div class="form1">
  
                <!-- <img class="form__icon11" src="images/LOGIN (1).png" style="margin-right: 100px;"></br>-->
               <span class="form__span" style="margin-right: 20px;">الرجاء ادخال البيانات</span></br>
    <b class="button1">اسم المستخدم:<input class="form__input " type="text"required name="USER_NAME"required placeholder=""></input></b></br>
    <b class="button1">رقم الهاتف:<input class="form__input " type="NUMBER"required name="USER_PHONE"required placeholder="" required=""></input></b></br>
    <b class="button1">بريدالكتروني:<input class="form__input " type="EMAIL" name="USER_EMAIL"required placeholder=""></input></b></br>
    <b class="button1">الجنسية:<input class="form__input " type="TEXT" name="USER_NATION" required placeholder=""></input></b></br>
    <b class="button1">الجنس:<input class="form__input " type="text" name="USER_SEX" required placeholder=""></input></b></br>
    <b class="button1">محل الاقامة:<input class="form__input " type="text" name="USER_LIVE"required placeholder=""></input></b></br>
    <b class="button1">تاريخ الميلاد:<input class="form__input " type="DATE" name="USER_DATA"required placeholder=""></input></b></br>
    <b class="button1">المؤهل:<input class="form__input " type="text" name="USER_QU"required placeholder=""></input></b></br>
    <b class="button1">كلمة المرور <input class="form__input " type="PASSWORDrequired" name="USER_PASSWORD" placeholder=""require></input></b></br>
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
    
    $USER_NAME= $_POST['USER_NAME'];
    $USER_PHONE= $_POST['USER_PHONE'];
    $USER_EMAIL= $_POST['USER_EMAIL'];
    $USER_NATION= $_POST['USER_NATION'];
    $USER_SEX= $_POST['USER_SEX'];
    $USER_LIVE= $_POST['USER_LIVE'];
    $USER_DATA= $_POST['USER_DATA'];
    $USER_QU= $_POST['USER_QU'];
    $USER_PASSWORD= $_POST['USER_PASSWORD'];
         $sql = "INSERT INTO users (USER_NAME,USER_PHONE,USER_EMAIL,USER_NATION,USER_SEX,USER_LIVE,USER_DATA,USER_QU,USER_PASSWORD)
         VALUES ('$USER_NAME','$USER_PHONE','$USER_EMAIL','$USER_NATION','$USER_SEX','$USER_LIVE','$USER_DATA','$USER_QU','$USER_PASSWORD')";
         if (mysqli_query($conn, $sql)) {
            echo "تم التسجيل بنجاح الان استمتع معنا !";
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