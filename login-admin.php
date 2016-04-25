<?php
session_start();
?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Log In </title>
 <link rel="stylesheet" type="text/css" href="css/form.css" />
 <link rel="stylesheet" type="text/css" href="css/admin-dash.css" />
 <link rel="stylesheet" type="text/css" href="css/update.css">


</head>

<body>

 <div id="blood"><h2 align="center" >Welcome to Blood Management System</h2></div> 
          
        <div class="header" id="header">
          <nav align="center" class="head">
            <a class="current-demo" href="login-admin.php">Admin Login</a>
            <a href="nith.ac.in">NIT-H Website</a>
            <a href="acm.html">ACM Website</a>
            <a href="index.php">Go Home</a>
          </nav>

          <h1 align="center">Admin Login</h1>
        </div>
        
         
         <div  class="form">


 <div id="log" class="form">
       <form id="ajaxform"> 
                <p><label for="name" class="labelname"> Username<span id="valid_user"></span> </label></p>
                <input type="text" name="username" id="userid" />

                <p><label for="name" class="labelname"> Password <span id="valid_pass"></span></label></p>
                <input type="password" name="password" id="passid"  /><br>

                <p><input type="button" name="submit" id="submit"  value="Login" onclick="start_sess()"/>
                <span id="stat"></span></p>
                <p><input type = "button" id="forgot" onclick = "forgot_password()" value="Forgot Password ? Click Here to Reset"></p>
       </form>
  </div>

 <div id="forgot_form" class="form">
       <form id="ajaxform" onsubmit = "return false;"> 
                <p><label for="name" class="labelname"> Enter your Username<span id="valid_user1"></span> </label></p>
                <input type="text" name="username" id="userid1" />
                
                <p><input type="button" name="submit" id = "check" value="Check User" onclick="check_my_username()"/></p>
                <span id="answer"></span>
                <div id="click"> 
  
                    

                </div>
               

       </form>
  </div>
  

<span id="status3" class="status3" ></span>

<script type="text/javascript" src = "login-admin.js"></script>
</body>
</html>