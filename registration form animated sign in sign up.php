<?php
    $host="localhost";
    $user="root";
    $password="";
    $db="demo";
    
    mysql_connect($host,$user.$password);
    mysql_select_db($db);

    if(isset($_POST['username'])){
        $uname=$_POST['User Name'];
        $password=$_POST['password'];

        $sql="select* from loging where username='".$uname."' AND password '".$password."' limit  1";

        $result=mysql_query($sql);

        if(mysql_num_roqs($result)==1){
            echo"you have successfully logged in";
            exit();
        }
        else{
            echo"you have entered incorrect password";
            exit();
        }
    }

?>


<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=0.1">
        <title>sign upand sign in </title>
        <link rel="stylesheet" type="text/css" href="signupform.css">
    </head>

    <body>
        <section>
           <div class="container">
               <div class="user signinBx">
                   <div class="imgBx"><img src="flower02.jpg"></div>
                   <div class="formBx">
                       <form method="POST" action="#">
                           <h2> Sign In </h2>
                           <input type="text" name="" placeholder="User Name">
                           <input type="password" name="" placeholder="password">
                           <input type="submit" name="" value="Login">
                           <P class="signup"> Don't have an account?<a href="#" onclick="toggleForm();">signup.</a></P>
                       </form>
                   </div>
               </div>
               <div class="user signupBx">
                
                <div class="formBx">
                    <form>
                        <h2> Create an account </h2>
                        <input type="text" name="" placeholder="User Name">
                        <input type="email" name="" placeholder="Email address">
                        <input type="password" name="" placeholder="Create password">
                        <input type="password" name="" placeholder="confirm password">
                        <input type="submit" name="" value="sign up">
                        <P class="signup"> Already have an account?<a href="#" onclick="toggleForm();">sign in.</a></P>
                    </form>
                </div>
                <div class="imgBx"><img src="girl.jpg"></div>
            </div>
           </div> 
        </section>
        <script type="text/javascript"> 
          function toggleForm(){
              var container = document.querySelector('.container');
              container.classList.toggle('active')
          }
        </script>
    </body>
</html>