<?php
?>
<html>
<head><title>question solve</title></head>
<body>
<table>
<tr><th>username</th><th>ratings</th><th>questions solved</th></tr>
<?php
session_start();
$conn=mysqli_connect('localhost','root','','test');
$check=mysqli_query($conn,"ALTER TABLE user1 ORDER BY rating");
$result=mysqli_query($conn,"SELECT * FROM user1");
while($row=mysqli_fetch_array($result))
{
    $title=$row['username'];
    $tags=$row['rating'];
    $id=$row['num_ques_solved'];
    echo "<tr><td style='width: 200px; text-align:center'>".$title."</td><td style='width: 200px; text-align:center'>".$tags."</td><td style='width: 200px; text-align:center'>".$tags.'</td></tr>';

}
echo "</table>";
?>
</table>
</body>
</html>