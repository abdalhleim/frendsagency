   
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
<form action="user-report edit.php" method="POST">
	<input class="button" type="" name="search" placeholder="ابحث عن مستخدم">
	<button class="button" type="submit" name="submit-s">بحث...</button>
 
</form>
<form action="user-report edit.php" method="POST">
<input class="button" type="" name="search" placeholder="للحذف اخل رقم المستخدم">
<button class="button" type="submit" name="delet">حذف المستخدم</button>
</form>
 <table class="button"  style="border: inset;">
 <tr> 
    <td style="border: inset; ">&nbsp;رقم </td>
    <td style="border: inset;">&nbsp;اسم </td>
    <td style="border: inset;">&nbsp;الهاتف</td>
    <td style="border: inset;">&nbsp;بريد </td>
    <td style="border: inset;">&nbsp;جنسية </td>
    <td style="border: inset;">&nbsp;نوع </td>
    <td style="border: inset;">&nbsp;سكن </td>
    <td style="border: inset;">&nbsp;ميلاد </td>
    <td style="border: inset;">&nbsp;مؤهل </td>

  </tr> 
  </div>
  <?php
 if (isset($_POST['delet'])) {
    $searchValue = $_POST['search'];
    $con = new mysqli("localhost", "root", "", "agency");
    if ($con->connect_error) {
        echo "connection Failed: " . $con->connect_error;
    } else {
        $sql = "DELETE FROM `users` WHERE USER_NUMBER LIKE '%" . $searchValue . "%'";

        $result = $con->query($sql);?>
<?php
        }
    }   
?>
  <?php
  if (isset($_POST['submit-s'])) {
    $searchValue = $_POST['search'];
    $con = new mysqli("localhost", "root", "", "agency");
    if ($con->connect_error) {
        echo "connection Failed: " . $con->connect_error;
    } else {
        $sql = "SELECT * FROM  users WHERE USER_NAME LIKE '%" . $searchValue . "%'";
        $result = $con->query($sql);
        while ($row = $result->fetch_assoc()) {
  ?>
   <tr>
    <td style="border: inset; font-size: 20px;"><?php echo $row['USER_NUMBER']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['USER_NAME']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['USER_PHONE']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['USER_EMAIL']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['USER_NATION']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['USER_SEX']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['USER_LIVE']; ?></td> 
   <td style="border: inset; font-size: 20px;"><?php echo $row['USER_DATA']; ?></td>
    <td style="border: inset; font-size: 20px;"><?php echo $row['USER_QU']; ?></td>
  </tr>	<?php
        }
    } 
 }

  ?>

</form>
   <form class="" id="b-form" action="user-report edit.php" method="POST">
   <div class="form1">
   <b class="button1">رقم المستخدم:<input class="form__input " type="number"required name="USER_NUMBER"required placeholder=""></input></b></br>
   <b class="button1">اسم المستخدم:<input class="form__input " type="text"required name="USER_NAME"required placeholder=""></input></b></br>
    <b class="button1">رقم الهاتف:<input class="form__input " type="NUMBER"required name="USER_PHONE"required placeholder="" required=""></input></b></br>
    <b class="button1">بريدالكتروني:<input class="form__input " type="EMAIL" name="USER_EMAIL"required placeholder=""></input></b></br>
    <b class="button1">الجنسية:<input class="form__input " type="TEXT" name="USER_NATION" required placeholder=""></input></b></br>
    <b class="button1">الجنس:<input class="form__input " type="text" name="USER_SEX" required placeholder=""></input></b></br>
    <b class="button1">محل الاقامة:<input class="form__input " type="text" name="USER_LIVE"required placeholder=""></input></b></br>
    <b class="button1">تاريخ الميلاد:<input class="form__input " type="DATE" name="USER_DATA"required placeholder=""></input></b></br>
    <b class="button1">المؤهل:<input class="form__input " type="text" name="USER_QU"required placeholder=""></input></b></br>
    <b class="button1">كلمة المرور <input class="form__input " type="PASSWORD" name="USER_PASSWORD" placeholder=""require></input></b></br>
     <div class="form2">
                <input class="button" type="submit" name="GO" value="تعديل"> &nbsp 
                <input class="button" type="reset" name="" value="الغـاء">
    </div> 
   </form>
   <?php
   if(isset($_POST['GO']))
{    
include_once 'DB/config.php';
{    
 $searchValue = $_POST['USER_NUMBER'];
$USER_NAME= $_POST['USER_NAME'];
$USER_PHONE= $_POST['USER_PHONE'];
$USER_EMAIL= $_POST['USER_EMAIL'];
$USER_NATION= $_POST['USER_NATION'];
$USER_SEX= $_POST['USER_SEX'];
$USER_LIVE= $_POST['USER_LIVE'];
$USER_DATA= $_POST['USER_DATA'];
$USER_QU= $_POST['USER_QU'];
$USER_PASSWORD= $_POST['USER_PASSWORD'];
  
     $sql = "UPDATE `users` SET `USER_NAME`='$USER_NAME',`USER_PHONE`='$USER_PHONE' ,`USER_EMAIL`='$USER_EMAIL',`USER_NATION`='$USER_NATION'
     ,`USER_SEX`='$USER_SEX',`USER_LIVE`='$USER_LIVE',`USER_DATA`='$USER_DATA' ,`USER_QU`='$USER_QU' ,`USER_PASSWORD`='$USER_PASSWORD'   WHERE USER_NUMBER LIKE '%" . $searchValue . "%'";
     if (mysqli_query($conn, $sql)) {
        echo " تم تعديل بيانات المؤسسة بنجاح";
     } else {
        echo "يوجد اسماء متطابقة الرجاء في احد البيانات ";
     }
     mysqli_close($conn);
    }
}
?>
</div>
<form>
</body>
</html>