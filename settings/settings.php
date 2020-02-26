<?php
$conn=mysqli_connect('localhost','root','','test');
$check=mysqli_query($conn,"SELECT FROM * user1 WHERE id=$_SESSION['id']");//values can be displayed via session variables too
$row=mysqli_fetch_array();
echo "hello";
//if(isset($_REQUEST['submit']))
//{
  //  $check=mysqli_query($conn,"INSERT INTO user1 (first name,last name,email,password)VALUES('0','$fname','$lname','$username','$email1','$password1','random','0','nll','0','text','0')"); 

//}



?>
<html>
<head><title>settings</title></head>
<body>
<form action="settings.php" method="REQUEST">
        <label for="fnamechange">change first name</label><input type="text" id="namechange" name="fname" placeholder="fname"  ><br>
        <label for="lnamechange">change second name</label><input type="text" name="lname" id="" placeholder="lname" required><br>
        <label for="email">change email</label><input id="email" type="email" name="email1" placeholder="email" ><br>
        <label for="password">change password</label><input id="password" type="password" name="password1" placeholder="password" ><br>
        <label for="prof pic">change profile picture</label><input id="profile picture" type="text" name="" placeholder="password" ><br>

<input type="submit" name="submit" value="submit">
        </form>
</body>
</html>