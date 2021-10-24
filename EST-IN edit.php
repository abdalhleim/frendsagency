   
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
<form action="EST-IN edit.php" method="POST">
	<input class="button" type="" name="search" placeholder="ابحث عن مؤسسة معينة">
	<button class="button" type="submit" name="submit-s">بحث...</button>
</form>
<form action="EST-REPORT.php" method="POST">
<button class="button" type="submit" name="delet">حذف المؤسسة</button>

 <table class="button"  style="border: inset;">
   <tr style="font-size: 30px;"> 
      <td style="border: inset;">رقم الموسسة</td>
      <td style="border: inset;">اسم الموسسة</td>
      <td style="border: inset;">عنوان الموسسة</td>
      <td style="border: inset;">هاتف الموسسة</td>
      <td style="border: inset;">فاكس الموسسة</td>
      <td style="border: inset;">بريد الموسسة</td>
  </tr> 
  </div>
  <?php
  if (isset($_POST['submit-s'])) {
    $searchValue = $_POST['search'];
    $con = new mysqli("localhost", "root", "", "agency");
    if ($con->connect_error) {
        echo "connection Failed: " . $con->connect_error;
    } else {
        $sql = "SELECT * FROM est_in WHERE EST_NAME LIKE '%" . $searchValue . "%'";
        $result = $con->query($sql);
        while ($row = $result->fetch_assoc()) {
  ?>
   <tr>
      <td style="border: inset; font-size: 20px;"><?php echo $row['EST_NUMBER']; ?></td>
      <td style="border: inset; font-size: 20px;"><?php echo $row['EST_NAME']; ?></td>
      <td style="border: inset; font-size: 20px;"><?php echo $row['EST_ADDRESS']; ?></td>
      <td style="border: inset; font-size: 20px;"><?php echo $row['EST_PHONE']; ?></td>
      <td style="border: inset; font-size: 20px;"><?php echo $row['EST_FAX']; ?></td>
      <td style="border: inset; font-size: 20px;"><?php echo $row['EST_EMAIL']; ?></td>
  </tr>	
  <?php
        }    
    }   
 }
  ?>
</form>
   <form class="" id="b-form" action="EST-IN edit.php" method="POST">
   <div class="form1">
             <b class="button1">ادخل رقم المؤسسة للتعديل:<input class="form__input "required type="number" name="EST_NUMBER" placeholder=""></input></b></br>
             <b class="button1">اسم المؤسسة:<input class="form__input "required type="text" name="EST_NAME" placeholder=""></input></b></br>
             <b class="button1">عنوان العمل:<input class="form__input "required type="text" name="EST_ADDRESS" placeholder=""></input></b></br>
             <b class="button1">كلمة المرور:<input class="form__input "required type="PASSWORD" name="EST_PASSWORD" placeholder=""></input></b></br>
             <b class="button1">رقم الهاتف:<input class="form__input "required type="NUMBER" name="EST_PHONE" placeholder=""></input></b></br>
             <b class="button1">رقم الفاكس:<input class="form__input "required type="NUMBER" name="EST_FAX" placeholder=""></input></b></br>
             <b class="button1">البريد:<input class="form__input " requiredtype="EMAIL" name="EST_EMAIL" placeholder=""></input></b></br>
     <div class="form2">
                <input class="button" type="submit" name="GO" value="تعديل"> &nbsp 
                <input class="button" type="reset" name="" value="الغـاء">
    </div> 
   </form>
   <?php
   if(isset($_POST['GO']))
{    
include_once 'DB/config.php';
{     $searchValue = $_POST['EST_NUMBER'];
$EST_NAME= $_POST['EST_NAME'];
$EST_ADDRESS= $_POST['EST_ADDRESS'];
$EST_PASSWORD= $_POST['EST_PASSWORD'];
$EST_PHONE= $_POST['EST_PHONE'];
$EST_FAX= $_POST['EST_FAX'];
$EST_EMAIL= $_POST['EST_EMAIL'];
  
     $sql = "UPDATE `est_in` SET `EST_NAME`='$EST_NAME',`EST_ADDRESS`='$EST_ADDRESS' ,`EST_PASSWORD`='$EST_PASSWORD',`EST_PHONE`='$EST_PHONE',`EST_FAX`='$EST_FAX',`EST_EMAIL`='$EST_EMAIL'   WHERE EST_NUMBER LIKE '%" . $searchValue . "%'";
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