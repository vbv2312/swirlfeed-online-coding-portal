<?php   
$conn=mysqli_connect('localhost','root','','test');
if(isset($_REQUEST["login"]))
{
$email=$_REQUEST['logemail'];
$_SESSION['logemail']=$email;
$password=$_REQUEST['logpass'];

$check=mysqli_query($conn,"SELECT * FROM user1 WHERE email='$email' AND password='$password'");
$num=mysqli_num_rows($check);
if($num==1)
{
    $row=mysqli_fetch_array($check);
    $username=$row['username'];
    $_SESSION['username']=$username;
include ('profile.php');        //profile.php
    exit(); 
}
else
{
echo "email or password was incorrect";
}
///not adding user closed account
}
?>
