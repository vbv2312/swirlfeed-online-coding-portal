<html>
<head><title>question solve</title></head>
<body>
<?php
$conn=mysqli_connect('localhost','root','','test');
$check=mysqli_query($conn,"SELECT * FROM editorial");
while($row=mysqli_fetch_array($check))
{
    $title=$row['title'];
    $tags=$row['tags'];
    $id=$row['text'];
    $name=$row['author'];
    echo "<p style='color:red;'>".$title."</p><br>";
    echo "<p style='color:red;'>".$tags."</p><br>";
    echo "<p style='color:red;'>".$id."</p><br>";
    echo "<p style='color:red;'>".$name."</p><br>";

}
?>
</body>
</html>