<?php
$conn1=mysqli_connect("localhost","id17282168_root","OnBanking@123","id17282168_banking");
if(!$conn1)
 echo "unable to connect";
else
  echo "connection success";
$sql1="create table Customers(C_id int,Name varchar(20),email varchar(30),Account_no int,Current_Balance int)";
if(mysqli_query($conn1,$sql1))
echo "Table Created<br>";
else
echo "Table Failed<br>";
mysqli_close($conn1);
?>