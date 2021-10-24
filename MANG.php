   
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
   <form class="" id="b-form" action="MANG.php" method="post">
   <div class="form1">
  
                <!-- <img class="form__icon11" src="images/LOGIN (1).png" stا yle="margin-right: 100px;"></br>-->
               <span class="button" style="margin-right: 20px;">  تسجيل طالب جديد داخل الادارة العامة</span></br>
    <b class="button1">الرقم الجامعي:<input class="form__input " type="NUMBER"required name="STUDANT_ID" placeholder=""></input></b></br>
    <b class="button1">اسم الطالب:<input class="form__input " type="TEXT"required name="STUDANT_NAME" placeholder=""></input></b></br>
    <b class="button1">الجامعة:<input class="form__input " type="TEXT" name="UNVER" placeholder=""></input></b></br>
    <b class="button1">الكلية:<input class="form__input " type="TEXT" name="COLLAGE" placeholder=""></input></b></br>
    <b class="button1">التخصص:<input class="form__input " type="text" name="STUDANT_SPE" placeholder=""></input></b></br>
    <b class="button1">التقدير:<input class="form__input " type="text" name="STUDANT_DIG" placeholder=""></input></b></br>
    <b class="button1">تاريخ الشهادة:<input class="form__input " type="DATE" name="CER_DATE" placeholder=   ""></input></b></br>
    <b class="button1">الخدمة الوطنية:<input class="form__input " type="text" name="NATION_SER" placeholder=""></input></b></br>
    <b class="button1">النوع: <input class="form__input " type="TEXT" name="STUDANT_SIX" placeholder=""></input></b></br>
    <b class="button1">المؤهل:<input class="form__input " type="text"required name="QLU" placeholder=""></input></b></br>
    <b class="button1">تاريخ الميلاد: <input class="form__input " type="DATE" name="STUDANT_DATE" placeholder=""></input></b></br>
               <div class="form2">
                
                <input class="button" type="submit" name="GO" value="تسجيل"> &nbsp 
                <input class="button" type="reset" name="" value="الغـاء">  
</div>          </div>     
   </form>
   <?php
   if(isset($_POST['GO']))
{    
    
   include 'DB/config.php';

{    

$STUDANT_ID= $_POST['STUDANT_ID'];
$STUDANT_NAME= $_POST['STUDANT_NAME'];
$UNVER= $_POST['UNVER'];
$COLLAGE= $_POST['COLLAGE'];
$STUDANT_SPE= $_POST['STUDANT_SPE'];
$STUDANT_DIG= $_POST['STUDANT_DIG'];
$CER_DATE= $_POST['CER_DATE'];
$NATION_SER= $_POST['NATION_SER'];
$STUDANT_SIX= $_POST['STUDANT_SIX'];
$QLU= $_POST['QLU'];
$STUDANT_DATE= $_POST['STUDANT_DATE'];
     $sql = "INSERT INTO mang (STUDANT_ID,STUDANT_NAME,UNVER,COLLAGE,STUDANT_SPE,STUDANT_DIG,CER_DATE,NATION_SER,STUDANT_SIX,QLU,STUDANT_DATE)
     VALUES ('$STUDANT_ID','$STUDANT_NAME','$UNVER','$COLLAGE','$STUDANT_SPE','$STUDANT_DIG','$CER_DATE','$NATION_SER','$STUDANT_SIX','$QLU','$STUDANT_DATE')";
     if (mysqli_query($conn, $sql)) {
        echo "تم تسجيل الطالب بنجاح !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
}
?>

</body>

</html>