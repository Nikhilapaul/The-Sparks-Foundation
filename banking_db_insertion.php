<?php
$conn=mysqli_connect("localhost","id17282168_root","OnBanking@123","id17282168_banking");
if(!$conn)
echo "Failed\n";
else
echo " Database Connection Success\n" ;
$sql="insert into Customers(C_id,Name,email,Account_no,Current_Balance) values('1001','Nikhila','nikhilapaul@gmail.com','48554785 ','450000')"; 
if(mysqli_query($conn,$sql))
echo "Inserted<br>";
else
echo "Failed<br>".mysqli_error($conn);



$sql="insert into Customers(C_id,Name,email,Account_no,Current_Balance) values('1002','Anand','anand@gmail.com','78144215 ','947000')"; 
if(mysqli_query($conn,$sql))
echo "Inserted<br>";
else
echo "Failed<br>".mysqli_error($conn);


$sql="insert into Customers(C_id,Name,email,Account_no,Current_Balance) values('1003','Kartik',' kartik@gmail.com','86589215 ','50000')"; 
if(mysqli_query($conn,$sql))
echo "Inserted<br>";
else
echo "Failed<br>".mysqli_error($conn);



$sql="insert into Customers(C_id,Name,email,Account_no,Current_Balance) values('1004','Madhu',' madhu@gmail.com','79213013 ','105236')"; 
if(mysqli_query($conn,$sql))
echo "Inserted<br>";
else
echo "Failed<br>".mysqli_error($conn);


$sql="insert into Customers(C_id,Name,email,Account_no,Current_Balance) values('1005','Sherlin','sherlin@gmail.com','24635869 ','368500')"; 
if(mysqli_query($conn,$sql))
echo "Inserted<br>";
else
echo "Failed<br>".mysqli_error($conn);


$sql="insert into Customers(C_id,Name,email,Account_no,Current_Balance) values('1006','Likitha',' likhitapaul@gmail.com','48668842 ','74500')"; 
if(mysqli_query($conn,$sql))
echo "Inserted<br>";
else
echo "Failed<br>".mysqli_error($conn);


$sql="insert into Customers(C_id,Name,email,Account_no,Current_Balance) values('1007','Jasmine',' jasmine@gmail.com','78956622 ','52000')"; 
if(mysqli_query($conn,$sql))
echo "Inserted<br>";
else
echo "Failed<br>".mysqli_error($conn);


$sql="insert into Customers(C_id,Name,email,Account_no,Current_Balance) values('1008','Meghana',' meghana@gmail.com','12397584 ','100000')"; 
if(mysqli_query($conn,$sql))
echo "Inserted<br>";
else
echo "Failed<br>".mysqli_error($conn);


$sql="insert into Customers(C_id,Name,email,Account_no,Current_Balance) values('1009','Saroja','saroja@gmail.com','47965812 ','600520')"; 
if(mysqli_query($conn,$sql))
echo "Inserted<br>";
else
echo "Failed<br>".mysqli_error($conn);


$sql="insert into Customers(C_id,Name,email,Account_no,Current_Balance) values('1010','Israel',' israel@gmail.com','65842788 ','732000')"; 
if(mysqli_query($conn,$sql))
echo "Inserted<br>";
else
echo "Failed<br>".mysqli_error($conn);

mysqli_close($conn);
?>