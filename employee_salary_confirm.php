<?php

session_start();

$sales=$_POST['salary'];
$month= $_POST['month'];
$amount= $_POST['amount'];

include_once 'db_con.php';
$conn = connect();

foreach($sales as $sale)  {  
  $in_ch=mysqli_query($conn,"insert into salary_confirmed(employee_id, month, amount) values ('$sale', '$month', '$amount')");   
  
            $_SESSION['msg']= '<i style="color:green;margin-left:14px;font-size:20px;font-family:calibri ;"> Salary Added Successfully </i><br>';
            header('location:employee_salary_list.php');
}  


?>  

