<?php

session_start();

$doctor=$_POST['doctor'];

$slots=$_POST['slot'];
echo $slots;
  exit;
$date= $_POST['date'];


include_once 'db_con.php';
$conn = connect();

foreach($slots as $slot)  {  
  $in_ch=mysqli_query($conn,"insert into appoinment(doctor_id, date, time) values ('$doctor','$date','$slot')");  

            $_SESSION['msg']= 'Success<br>';
            header('location:doctor_appoinment_form.php');
}  


?>