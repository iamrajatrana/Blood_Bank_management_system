
							<?php

							 $host="localhost";
		                     $user="root";
		                     $password="";
		
		                     $database="2mylogin";
                             $connect=mysql_connect($host,$user,$password);
		                     if($connect)
		                     {
		                             mysql_select_db($database);
		                            
	                         }

	                         $bg = $_GET["bg"];
	                         $gen = $_GET["gen"];
	                         $branch =$_GET["branch"];
                             
	                         if( $gen == "" && $branch == "")
	                         {
	                              $query="SELECT `roll_no`,`name`,`branch`,`cur_year`,`gender`,`blood_grp`,`mobile` FROM `student_db` WHERE `blood_grp`= '$bg' order by `roll_no` asc ";

	                         }
	                         else if ( $gen == "")
	                         {
	                         	  $query="SELECT `roll_no`,`name`,`branch`,`cur_year`,`gender`,`blood_grp`,`mobile` FROM `student_db` WHERE `blood_grp`= '$bg' and `branch` = '$branch' order by `roll_no` asc ";

	                         }
	                         else if( $branch == "")
	                         {
	                         	  $query="SELECT `roll_no`,`name`,`branch`,`cur_year`,`gender`,`blood_grp`,`mobile` FROM `student_db` WHERE `blood_grp`= '$bg' and `gender` = '$gen' order by `roll_no` asc";

	                         }
	                         else
	                         {
	                               $query="SELECT `roll_no`,`name`,`branch`,`cur_year`,`gender`,`blood_grp`,`mobile` FROM `student_db` WHERE `blood_grp`= '$bg' and  `branch` = '$branch' and `gender` = '$gen' order by `roll_no` asc";

	                         }

					if($query_run=mysql_query($query))
					{
					 
					      if(mysql_num_rows($query_run)==NULL)
						        echo "<h2 align='center'>Sorry, no data found</h2>";
						  else
						  {
						  	     echo  "<h2 align = 'center'>NIT Record</h2><table><thead><tr><th>Roll No</th><th>Name</th><th>Branch</th><th>Current Year</th><th>Gender</th><th>Blood Group</th><th>Mobile</th></tr></thead><tbody>";
					             while($fetch_data=mysql_fetch_assoc($query_run))
						         {
						             $rn=$fetch_data['roll_no'];
									 $name=$fetch_data['name'];

									 $branch=$fetch_data['branch'];
									 $cury=$fetch_data['cur_year'];
									 $gen=$fetch_data['gender'];
									 $bg=$fetch_data['blood_grp'];
									 $mob=$fetch_data['mobile'];
									 
									 
                                      
                                     
									 echo "<tr><td class='user-name'>$rn</td><td class='user-name'>$name</td><td class='user-bg'>$branch</td><td class='user-cur'>$cury</td><td class='user-email'>$gen</td><td class='user-name'>$bg</td><td class='user-mobile'>$mob</td></tr>";
									 
									 }echo "</tbody></table>";
						  }
					}


?>