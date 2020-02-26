<?php
//not placing duplicate question removal functionality
session_start();
$conn=mysqli_connect('localhost','root','','test');
if(isset($_REQUEST['submit']))
{
        $qtitle="";
        $qtext="";
        $qtimelimit=0;
        $qtags="";
        $input="";
        $output="";
        $var="";
        if(isset($_REQUEST["qtitle"]))
        {

                $var=$_REQUEST["qtitle"];
                $qtitle=strtoupper($var);
        }
        if(isset($_REQUEST["qtext"]))
        {
                $qtext=$_REQUEST["qtext"];
        }
        if(isset($_REQUEST["tlimit"]))
        {
                $qtimelimit=$_REQUEST["tlimit"];
        }
        if(isset($_REQUEST["qtags"]))
        {
                $qtags=$_REQUEST["qtags"];
        }
        if(isset($_REQUEST["input"]))
        {
                $input=$_REQUEST["input"];
        }
        if(isset($_REQUEST["output"]))
        {
                $output=$_REQUEST["output"];
        }
        
                $check=mysqli_query($conn,"INSERT INTO questions VALUES('0','$qtitle','$qtext','$qtimelimit','$qtags','0','$input','$output')");
        
}
?>
<html>
<head><title>Submit your own Question</title></head>
<body>
<div class="questioncreate">
        <link href="style3.css" rel="stylesheet">
        <form action="questioncreate.php" method="REQUEST">
        <center>
        <input row="20" cols="60" type="text" name="qtitle" placeholder="Enter Question Name" required><br>
        <textarea rows="20" cols="100" name="qtext" placeholder="Enter Question Text" required></textarea><br>
        <input id="time" type="number" name="tlimit" placeholder="Enter Time Limit" required><br>
        <textarea cols="40" name="qtags" placeholder="Place Question Tags" required></textarea> <br>      
        <textarea rows="20" cols="100" name="input" placeholder="Provide Input" required></textarea> <br>      
        <textarea rows="20" cols="100" name="output" placeholder="Provide Output" required></textarea><br>         
        <input id="submit" type="submit" name="submit" value="Submit" onclick="fun();">
        </center>
        </form>
</div>
        <script>
                function fun()
                {
                        confirm("Do you want to submit data?");
                }
        </script>
</body>
</html>