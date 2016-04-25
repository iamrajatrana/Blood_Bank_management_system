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

       
              $roll=$_GET['roll_no'];
              $name=$_GET['name'];
              $gender=$_GET['gender'];
              $year=$_GET['cur_year'];
              $mobile=$_GET['mobile'];
              $blood=$_GET['blood_grp'];
              $branch=$_GET['branch'];

              $query="INSERT into `student_db` values($roll,'$name','$branch','$year','$gender','$blood','$mobile')";
              if($query_run1=mysql_query($query))
              {
                 echo "<strong style='color:#009900;'>Data added Successfully";
                 
              }
             
?>