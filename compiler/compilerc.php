<?php
$flag=0;
if(isset($_SESSION['questionsolveid']))
{
$conn=mysqli_connect('localhost','root','','test');
$id=$_SESSION['questionsolveid'];
$check=mysqli_query($conn,"SELECT * FROM questions WHERE id=$id");
$arr=mysqli_fetch_assoc($check);
$input=$arr['input_by_author'];
$ans=$arr['input_answers'];
$flag=1;
}
if(isset($_POST['sub']))
{
$myfile = fopen("hello.c", "w+") ;
$txt = $_POST["code"];
if($flag==0)
$input=$_POST["input"];
fwrite($myfile, $txt);
fclose($myfile);
$inpfile=fopen("inputc.txt","w+");
fwrite($inpfile, $input);
fclose($inpfile);
shell_exec("chmod 777 a.out");
shell_exec("chmod 777 errorc.txt");
shell_exec('gcc -lm hello.c 2> errorc.txt');
$error="errorc.txt";
$file="";
$file=file_get_contents("$error");
if($file!="")
{
$error=str_replace("hello.c","in yr code at position",$file);
echo "<pre>$error</pre>";
}
else
{
    if($flag==0)
    {
    if($input=="")
 echo "output is:". shell_exec('./a.out');
 else
 {
    $output=shell_exec('./a.out < inputc.txt ');
    echo "output is <pre>$output</pre>";
 }
    }
    if($flag==1)
    {
        $output=shell_exec('./a.out < inputc.txt ');
        if($ans==$output)
        {
        echo "accepted"; 
        $check=mysqli_query($conn,"UPDATE questions SET people_solved=people_solved+1 WHERE id=$id");
        }
        else
        {
       echo "wa";
        }  
    }
} 
}
shell_exec("rm inputc.txt");
?>

