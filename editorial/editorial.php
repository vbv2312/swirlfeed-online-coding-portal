<?php
//link it from the navigation bar
session_start();
$conn=mysqli_connect('localhost','root','','test');
$check=mysqli_query($conn,"SELECT * FROM user1 WHERE id='$id'");
$row=mysqli_fetch_array($check);
echo 'wanna read editorials??"<a href=readeditorial.php?"ok"</a>"';

if($row['num ques solved']>=1)
{
//display editorials
}
else 
{
    echo "sorry you do not meet sufficient criteria to write an editorial";
}
?>
<html>
<head><title>write editorial</title></head>
<body>
<form action="editorial.php">
<textarea rows="30" cols="30" name="title" placeholder="enter title" required></textarea><br>
<textarea rows="30" cols="30" name="tags" placeholder="enter tags" required></textarea><br>
<textarea rows="30" cols="30" name="text" placeholder="enter texts" required></textarea><br>
<input type="submit" name="register" value="submit">
</form>
</body>
</html>