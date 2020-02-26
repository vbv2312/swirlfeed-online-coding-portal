<?php
//session_start();
//$conn=mysqli_connect('localhost','root','','test');
//$result=mysqli_query($conn,"SELECT * FROM questions");
//while($row=mysqli_fetch_array($result))
//{
  //  $title=$row['question title'];
   // $tags=$row['ques tags'];
   // $id=$row['id'];
    //echo "<tr><td style='width: 200px; text-align:center'>".$title."</td><td style='width: 200px; text-align:center'>".$tags.'</td><td><form action="questiondisplay.php" ><input type="submit" name="submit" value="solve this out"></form></td></tr>';

//}
//echo "</table>";
if(isset($_POST['submit']))
echo 'HMM';
?>
<html>
<head>
    <title>question solve</title>
    <style>

    </style>
</head>
<body>
<div class="questiontable">
<link href="style2.css" rel="stylesheet">
<table align="center">
<tr>
    <thead>
        <th>Title</th>
        <th>Tags</th>
        <th>Status</th>
        <th>Submissions</th>
    </thead>
</tr>
<tbody>
<?php
session_start();
$conn=mysqli_connect('localhost','root','','test');
$result=mysqli_query($conn,"SELECT * FROM questions");
while($row=mysqli_fetch_array($result))
{
    $title=$row['question_title'];
    $tags=$row['ques_tags'];
    $id=$row['id'];
    echo "<tr><td>".$title."</td><td>".$tags.'</td><td><a href="questionsolve.php?id='.$id.'">solve</a></td></tr>';

}
echo "</table>";
?>
</tbody>
</table>
</div>
</body>
</html>