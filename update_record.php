<?php
include("session.php");
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	
    <link rel="stylesheet" type="text/css" href="css/update.css" />
  <link rel="stylesheet" type="text/css" href="css/form.css">


	</head>
	<body>
		
      <div id="qa"><a href=""> Hello <span class="usrname"><?php echo $login_session; ?> </span></a>  <a id="lo" href="logout.php">LogOut</a><a id="lo" href="admin-area.php">Admin Dashboard</a></div>
      <div id="blood"><h2 align="center" >Welcome to Blood Management System</h2></div> 
          
         


        <div class="header">
          <nav align="center" class="head">
            <a href="add_entry.php">Add Entry</a>
            <a href="delete_rocord.php">Remove Entry</a>
            <a class="current-demo" href="update_record.php">Modify Entry</a>
          </nav>

          <h1 align="center">Modify Database<span>Allows you to change data of students</span></h1>
        </div>
				
					
              




               <div  class="form">

        <form id="ajaxform"> 
                <p><label for="roll"> Enter Roll Number <span id="rollstatus"></span></label></p>
                <input id="roll" name="roll" required="required" type="text"  onblur="checkrollno()" />

                <input id= "fs" type="button" value="Check" onclick="checkrollno()" />

            <div id="orig">
                <p class="contact"><label for="username" class="uname"  > Enter name </label></p> 
                <input id="username" name="name" required="required" type="text" /> <br><br>

                
                <select name="branch" id="branch" class="select-style">
                                         <option value="">Select Your branch</option>
                                         <option value="arc">Architecture</option>
                                         <option value="chem">Chemical Engg.</option>
                                         <option value="cse">Computer Science & Engg.</option>
                                         <option value="civ">Civil Engg.</option>
                                         <option value="eee">Electrical Engg.</option>
                                         <option value="ece">Electronics and Communication Engg.</option>
                                         <option value="mec">Mechanical Engg.</option>
                </select><br><br><br>

               
                <select name="year" id="year" class=select-style>
                                      <option value="">Select Current Year</option>
                                         <option value="first">First Year</option>
                                         <option value="second">Second Year</option>
                                         <option value="third">Third Year</option>
                                         <option value="final">Final Year</option>
                                         <option value="Superfinal">Super Final Year</option>
                </select> <br><br><br>

                
                <select id="gender" name="gender" class=select-style>
                                              <option value="">Select Gender</option>
                                               <option value="m">Male </option>
                                               <option value="f">Female</option>
                </select><br><br><br>

               
                <select id="bg" name="blood" class=select-style>
                                               <option value="">Select Blood Group</option>
                                               <option value="A pos">A positive</option>
                                               <option value="A neg">A negative</option>
                                               <option value="B pos">B positive</option>
                                               <option value="B neg">B negative</option>
                                               <option value="O pos">O positive</option>
                                               <option value="O neg">O negative</option>
                                               <option value="AB pos">AB positive</option>
                                               <option value="AB neg">AB negative</option>
                </select><br><br><br>

                <p> <label for="mob" class="youpasswd"> Enter Mobile No. </label></p>
                <input  id="mob" required="required" name="mobile" type="text"  /> <br><br><br>


                <input type="button" value="Add Record" class="buttom"  id="sub" onclick="updateRecords()" />
                <span id="status"></span> 
                
              </div> 
   </form> 
  
</div>      

<script type="text/javascript" src = "update_record.js"></script>
</body>
</html>

