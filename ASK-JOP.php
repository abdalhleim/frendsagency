   
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
   <form class="" id="b-form" action="ASK-JOP.php" method="post">
   <div class="form1">
  
                <!-- <img class="form__icon11" src="images/LOGIN (1).png" style="margin-right: 100px;"></br>-->
               <span class="form__span" style="margin-right: 20px;">لطلب الوظيفة...</span></br>
    <b class="button1">الاسم:<input class="form__input " type="text"required name="ASK_NAME" placeholder=""></input></b></br>
    <b class="button1">الرقم الجامعي:<input class="form__input "required type="number" name="UNVER_NUMBER" placeholder=""></input></b></br>
    <b class="button1">العنوان:<input class="form__input " type="text"required name="ASK_ADDRESS" placeholder=""></input></b></br>
    <b class="button1">النوع:<input class="form__input " type="text"required name="ASK_SEX" placeholder=""></input></b></br>
    <b class="button1">تاريخ الميلاد:<input class="form__input" type="date" name="ASK_BDAY" placeholder=""></input></b></br>
    <b class="button1">الجامعة:<input class="form__input " type="text" name="UNVERCITY" placeholder=""></input></b></br>
    <b class="button1">الكلية:<input class="form__input " type="text" name="COLLOGE" placeholder=""></input></b></br>
    <b class="button1">التخصص:<input class="form__input " type="text" name="ASK_SPEC" placeholder=""></input></b></br>
    <b class="button1">التقدير: <input class="form__input " type="text" name="ASK_DIGREE" placeholder=""></input></b></br>
    <b class="button1">تاريخ الشهادة:<input class="form__input " type="date" name="CERT_DATE" placeholder=""></input></b></br>
    <b class="button1">اثبات شخصية:<input class="form__input " type="text" name="ID_CARD" placeholder=""></input></b></br>
    <b class="button1">رقم الاثبات:<input class="form__input " type="number" name="ID_NUMBER" placeholder=""></input></b></br>
    <b class="button1">اسم الوظيفة:<input class="form__input " type="text" name="JOP_NAME" placeholder=""></input></b></br>
    <b class="button1">اسم الؤسسة:<input class="form__input " type="text" name="EST_NAME" placeholder=""></input></b></br>
    <b class="button1">تاريخ التقديم:<input class="form__input " type="date" name="DATE_ASKING" placeholder=""></input></b></br>
    <b class="button1">رقم الهاتف:<input class="form__input " type="number" name="ASK_PHONE" placeholder=""></input></b></br>
    <b class="button1">المؤهل:<input class="form__input " type="text"required name="ASK_QUL" placeholder=""></input></b></br>
    <b class="button1">بريد الاكتروني:<input class="form__input " type="email"required name="ASK_EMAIL" placeholder=""></input></b></br>
               <div class="form2">
                
                <input class="button" type="submit" name="GO" value="تقديم"> &nbsp 
                <input class="button" type="reset" name="" value="الغـاء">  
</div>          </div>     
   </form>
   <?php
   if(isset($_POST['GO']))
{    
    
    include_once 'DB/config.php';

    {    
    
    $ASK_NAME= $_POST['ASK_NAME'];
    $UNVER_NUMBER= $_POST['UNVER_NUMBER'];
    $ASK_ADDRESS= $_POST['ASK_ADDRESS'];
    $ASK_SEX= $_POST['ASK_SEX'];
    $ASK_BDAY= $_POST['ASK_BDAY'];
    $UNVERCITY= $_POST['UNVERCITY'];
    $COLLOGE= $_POST['COLLOGE'];
    $ASK_SPEC= $_POST['ASK_SPEC'];
    $ASK_DIGREE= $_POST['ASK_DIGREE'];
    $CERT_DATE= $_POST['CERT_DATE'];
    $ID_CARD= $_POST['ID_CARD'];
    $ID_NUMBER= $_POST['ID_NUMBER'];
    $JOP_NAME= $_POST['JOP_NAME'];
    $EST_NAME= $_POST['EST_NAME'];
    $DATE_ASKING= $_POST['DATE_ASKING'];
    $ASK_PHONE= $_POST['ASK_PHONE'];
    $ASK_QUL= $_POST['ASK_QUL'];
    $ASK_EMAIL= $_POST['ASK_EMAIL'];
    
         $sql = "INSERT INTO jop_ask (ASK_NAME,UNVER_NUMBER,ASK_ADDRESS,ASK_SEX,ASK_BDAY,UNVERCITY,COLLOGE,ASK_SPEC,ASK_DIGREE,CERT_DATE,ID_CARD,ID_NUMBER,JOP_NAME,EST_NAME,DATE_ASKING,ASK_PHONE,ASK_QUL,ASK_EMAIL)
                            VALUES ('$ASK_NAME','$UNVER_NUMBER','$ASK_ADDRESS','$ASK_SEX','$ASK_BDAY','$UNVERCITY','$COLLOGE','$ASK_SPEC','$ASK_DIGREE','$CERT_DATE','$ID_CARD','$ID_NUMBER','$JOP_NAME','$EST_NAME','$DATE_ASKING','$ASK_PHONE','$ASK_QUL','$ASK_EMAIL')";
         if (mysqli_query($conn, $sql)) {
            echo "تم التقديم بنجاح الرجاء البقاء علي التواصل لمعرفة نتجية القبول!";
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