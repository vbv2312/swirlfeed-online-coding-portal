<?php
session_start();
$conn=mysqli_connect('localhost','root','','test');
$check=mysqli_query($conn,"SELECT * FROM questions WHERE id='$_REQUEST[id]'");
$_SESSION['questionsolveid']=$_REQUEST['id'];
$GLOBALS['id']=$_REQUEST['id'];
echo $_SESSION['questionsolveid'];
$row=mysqli_fetch_array($check);
echo "<h1>".$row['question_title']."</h1><br>";
echo "<b>tags</b> :".$row['ques_tags']."<br>";
echo "<p>".$row['ques_text']."<br><br>";
echo 'wanna solve?? ';
?>
 <html>
    <head>
        <title>
            heading
        </title>      </head>
        <body>
        <a href="../compiler/index.php?id=<?php echo $_SESSION['questionsolveid'];?>">submit</a>
    </body>
</html>