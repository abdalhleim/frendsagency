   
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
<div class="maina">
   <form class="" id="b-form" action="login.php" method="post">
   <div class="form1">
   <h2 class="form_title title" style="margin-right: 100px;">للتسجيل الدخول</h2>
                <img class="form__icon11" src="images/LOGIN (1).png" style="margin-right: 100px;"></br>
                <span class="form__span" style="margin-right: 20px;">   الرجاء ادخال البريد الالكتروني مع كلمة المرور</span></br>
                <b class="button1">ادخل الايمل <input class="form__input "required type="text" name="EST_EMAIL" placeholder=""></input></b></br>
              <b class="button1">كلمة المرور <input class="form__input "required type="PASSWORD" name="EST_PASSWORD" placeholder=""></input></b></br>
               <div class="form2">
                <input class="button" type="submit" name="GO" value="دخول"> &nbsp 
                <input class="button" type="reset" name="" value="الغـاء">  
</div>          </div>     
   </form>
   <?php
   if(isset($_POST['GO']))
{    
include_once 'DB/config.php';

{    
session_start();
require"DB/config.php";
$EST_EMAIL=$_POST["EST_EMAIL"];
$EST_PASSWORD=$_POST["EST_PASSWORD"];
$query= "SELECT * FROM est_in WHERE EST_EMAIL='$EST_EMAIL' and EST_PASSWORD='$EST_PASSWORD'";
$reg =mysqli_query($conn,$query);
$row =mysqli_num_rows($reg);
if($row==1){

    header("location:./JOP-INFO.php");
}
 else {
    echo"عفوأ الرجاء التاكد من صحة المعلومات والمحاولة مرة اخرة";}
 }
 }
?>
</div>
</body>

</html>