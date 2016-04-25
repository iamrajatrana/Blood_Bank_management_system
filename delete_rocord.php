<?php
include("session.php");
?>



<html>
<head>
   
    <link rel="stylesheet" type="text/css" href="css/update.css">
    <link rel="stylesheet" type="text/css" href="css/delete.css">
 
<script type="text/javascript">


</script>
</head>
<body>
      <div id="qa"><a href=""> Hello <span class="usrname"><?php echo $login_session; ?> </span></a>  <a id="lo" href="logout.php">LogOut</a><a id="lo" href="admin-area.php">Admin Dashboard</a></div>
      <div id="blood"><h2 align="center" >Welcome to Blood Management System</h2></div> 
          
         


        <div class="header">
          <nav align="center" class="head">
            <a href="add_entry.php">Add Entry</a>
            <a  class="current-demo" href="delete_rocord.php">Delete Entry</a>
            <a  href="update_record.php">Modify Entry</a>
          </nav>

          <h1 align="center">Delete Student Data<span>Allows you to delete data of students</span></h1>
        </div>
        
           
					<section>
						  
						 <form name="myForm" id="myForm"><p align = "center">Has year changed?
                              <input id = "yes" type = "radio" name = "year_change" onclick = "show();" value="Yes" >Yes
                              <input id = "no" type = "radio" name = "year_change" onclick = "dontshow();" value="No">No
                            </p>
                              <div style="display:none;" id="scroll">
                                   <p align="center">
                                         As the year has changed, new records must be added. Final Year and Super Final Year students record must be removed.
                                  </p>
                                  <div>

                                    <input id="sub" type="button" name="delete" value="Delete" onclick= "deleteRecords()"><br><br>
                                  <span align="center" id= "status0"></span>

                                  </div>
                                  
                              </div>
                             
						 </form>

             <form name = "form2" id="form2">
                  <h2>Delete a particular record</h2>
                  <p><label for="roll"> Enter Roll Number <span id="status"></span></label></p>
                  <input type = "text" name="roll" id="roll" required>
                  <input type = "button" id="dele" onclick = "checkrollno()" value = "Check Student"><br><br>
                  <input type = "button" id="del" onclick = "delete_single_record()" value = "Delete Student" disabled />
                  <input type = "reset" value="Reset" onclick = "resett()" ><br>
                  <span id= "status1"></span>
             </form>
					</section>
<script type="text/javascript" src = "delete_record.js"></script>

        
</body>
</html>