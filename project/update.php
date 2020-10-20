<?php
session_start();
$con=mysqli_connect('localhost','root','','bankingsystem');
$name1=$_SESSION['name'];
$q="select CurrentBalance from userdetails where name='$name1'";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
$var=$row['CurrentBalance'];
$from=$_SESSION['name'];
$to=$_POST['receiver'];
$q1="select CurrentBalance from userdetails where name='$to'";
$result1=mysqli_query($con,$q1);
$row1=mysqli_fetch_array($result1);
$var1=$row1['CurrentBalance'];
session_destroy();
if ( $var > $_POST["amount"] )
{
    $sub=$var-$_POST["amount"];
    $q="update userdetails set CurrentBalance='$sub' where Name='$from' ";
    $result=mysqli_query($con,$q);
    $sum=$var1+$_POST["amount"];
    $q="update userdetails set CurrentBalance='$sum' where Name='$to' ";
    $result=mysqli_query($con,$q);
	$c=$_POST["amount"];
  date_default_timezone_set("Asia/kolkata");
$ct= date("Y-m-d H:i:s");
	$q="insert into transactionlog (Date,Amount,YourId,BenificiaryId)
		values('$ct',$c,'$from','$to')";
	$result=mysqli_query($con,$q);
   include 'back.php';
        $message="Successful transfer";
   echo"<script type='text/javascript'>alert('$message');
   </script>";
    
    
}
else
{   include 'back.php';
    $message="Insufficient Balance";
   echo"<script type='text/javascript'>alert('$message');
   </script>";
   
    
    

}
?>