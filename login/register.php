<?php
session_start();
$conn=mysqli_connect('localhost','root','','test');
if(isset($_REQUEST["register"]))
{
$fname="";
$lname="";
$email1="";
$email2="";
$password1="";
$password2="";
$error="";

//getting values from the form
if(isset($_REQUEST["fname"]))
    { 
    $fname=  $_REQUEST["fname"];
    $_SESSION['fname']=$fname;
    }  
    if(isset($_REQUEST["lname"]))
    { 
    $lname=  $_REQUEST["lname"];
    $_SESSION['lname']=$lname;
    }   
    if(isset($_REQUEST["email1"]))
    { 
    $email1=  $_REQUEST["email1"];
    $_SESSION['email1']=$email1;
    }  
    if(isset($_REQUEST["email2"]))
    { 
    $email2=  $_REQUEST["email2"];
    $_SESSION['email2']=$email2;
    }  
                if(isset($_REQUEST["password1"]))
                   { 
                    $password1=  $_REQUEST["password1"];
                    $_SESSION['password1']=$password1;

                    }
                    if(isset($_REQUEST["password2"]))
                       { 
                        $password2=  $_REQUEST["password2"];
                        $_SESSION['password2']=$password2;

                        } 
                        //check for password match
                        if($password1!=$password2)
                        {
                           // array_push($error,"passwords shall match");
                           echo "passwords shall match";
                        }
                        //checking that emails match
                        //missing validation of email
                        if($email1!=$email2)
                        {
                            //array_push($error,"emails shall match");
                            echo "emails shall match";
                        }
                        else
                        {
                        //checking if email do not exist already
                        $check=mysqli_query($conn,"SELECT email FROM user1 WHERE email='$email1'");
                        $num=mysqli_num_rows($check);
                        if($num!=0)
                        {
                            //array_push($error,"user already exists");
                            echo "user already exists";
                        }
                     else
                     {
                        ///gnerating a unique username
                        $i=1;
                        $username="";
                        $username=strtolower($fname."_".$lname);
                        $num=1;
                        $val=$username;
                        while($num!=0)
                        {
                            $username=$val."_".$i;
                        $check=mysqli_query($conn,"SELECT username FROM user1 WHERE username='$username'");
                        $num=mysqli_num_rows($check);
                         $i++;
                        } 
                        
                      ///not giving random profile pic
                      ///inserting values
                      //verification if tym permits
                    
                      $check=mysqli_query($conn,"INSERT INTO user1 VALUES('0','$fname','$lname','$username','$email1','$password1','random','0','nll','0','text','0')"); 
                        }
                    }
                    }
                    ?>
                    
                    <html>
    <head>
        <title>
            heading
        </title>
        <link rel="stylesheet" type="text/css" href="registerstyle.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="loginbox">
                <div class="loginheader">
                  <h1>swirlfeed</h1>
                  login /signup
                </div>
        <form action="login.php" method="REQUEST">
            
            
            <input type="email" name="logemail" placeholder="Email address" required><br>
            <input type="password" name="logpass" placeholder="enter password" required><br>
        
            <input type="submit" name="login" value="login"> 
        </form>
            
        <form action="register.php" method="REQUEST">
        <input type="text" name="fname" placeholder="fname" value="<?php if(isset( $_SESSION['fname'])){echo $_SESSION['fname'];}?>" required><br>
        <input type="text" name="lname" placeholder="lname" value="<?php if(isset( $_SESSION['lname'])){echo $_SESSION['lname'];}?>"required><br>
        <input type="email" name="email1" placeholder="email" value="<?php if(isset( $_SESSION['email1'])){echo $_SESSION['email1'];}?>"required><br>
        <input type="email" name="email2" placeholder="email conf" value="<?php if(isset( $_SESSION['email2'])){echo $_SESSION['email2'];}?>"required><br>
        <input type="password" name="password1" placeholder="password" value="<?php if(isset( $_SESSION['password1'])){echo $_SESSION['password1'];}?>"required><br>
        <input type="password" name="password2" placeholder="password conf" value="<?php if(isset( $_SESSION['password2'])){echo $_SESSION['password2'];}?>"required><br>
            
<input type="submit" name="register" value="register">
        </form>
            </div>
            </div>
          </body>
</html>




