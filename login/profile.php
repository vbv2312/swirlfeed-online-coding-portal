 <?php 
 //session access;
 $conn=mysqli_connect('localhost','root','','test');
 $id=15;
 $check=mysqli_query($conn,"SELECT * FROM user1 WHERE id='$id'");
$result=mysqli_fetch_array($check);
$username=$result['username'];
$prfpic=$result["profile_pic"];
$quesdone=$result['num_ques_solved'];
$followers=$result['followers_array'];
$blogs=$result['num_editorials'];
$qnames=$result['questions_solved'];
$rating=$result['rating'];
 ?>
  <html>
    <head>
        <title>
            heading
        </title>
            </head>
    <body>
       username <?php echo $username;?><br>
        profile pic<?php echo $prfpic;?><br>
        number of questions done <?php echo $quesdone;?><br>
        followers<?php echo $followers;?><br>
        number of blogs<?php echo $blogs;?><br>

    </body>
</html>