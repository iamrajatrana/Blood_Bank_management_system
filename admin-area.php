<?php
include("session.php");
?>



<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<link rel="stylesheet" type="text/css" href="css/update.css">
    <link rel="stylesheet" type="text/css" href="css/form.css">
    
         
	</head>
	<body>
		<div><a href=""> Hello <span id="usrname" class="usrname"><?php echo $login_session; ?> </span></a> <a id="lo" href="admin-area.php">Admin Dashboard</a><a  href="logout.php">LogOut</a></div>
      <div id="blood"><h2 align="center" >Welcome to Blood Management System</h2></div> 
          
         


        <div class="header">
          <nav align="center" class="head">
            <a href="add_entry.php">Add Entry</a>
            <a href="delete_rocord.php">Remove Entry</a>
            <a class="current-demo" href="update_record.php">Modify Entry</a>
          </nav>

          
        </div>


        <div  class="form">

        <form id="ajaxform"> 
                <p><label for="ques1"> Security Question 1<span id="statusq1"></span></label></p>                               
                <select name="ques1" id="ques1" class="select-style">
                                    <option value = "">Please Select</option>
                                    <option value = "What is you Father Name?">Your Father's Name</option>
                                    <option value = "What is your Mother's Maiden Name">Your Mother's Maiden Name</option>
                                    <option value = "What is your Pet Name">Your Pet Name</option>
                                    <option value = "Which is your favourite food? ">Your Favourite Food</option>
                </select><br><br><br>

                <p><label for="ans1">Your Answer 1<span id="ans1_stat"></span></label></p>
                <input type="text" id="ans1" required >

               <p><label for="ques2"> Security Question 2<span id="statusq2"></span></label></p>                               
                <select name="ques2" id="ques2" class="select-style">
                                    <option value = "">Please Select</option>
                                    <option value = "What is the name of your Primary School?">Your primary school name</option>
                                    <option value = "What is your childhood nick name?">Your Childhood Nick name</option>
                                    <option value = "Which is your favourite sport game?">Your Favourite sport</option>
                                    <option value = "What is the name of your last school Principal?">Your Last School principal Name </option>
                </select><br><br><br>

                <p><label for="ans2">Your Answer 2<span id="ans2_stat"></span></label></p>
                <input type="text" id="ans2" >
                
                <p><label>Please Enter your password for Verification<span id="pass1"></span></label></p>
                <input type="password" id="pass" required>

                <input type= "button" value="Save Questions" onclick="saveQuestions()" /><br>
                <span id="totstat"></span>
            </form>
          </div>


	</body>
</html>