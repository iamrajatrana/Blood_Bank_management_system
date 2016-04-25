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

              $query = "UPDATE `student_db` set `name` = '$name', `branch` = '$branch', `cur_year` = '$year', `gender` = '$gender',`blood_grp` = '$blood', `mobile` = $mobile where `roll_no` = $roll";
              if(mysql_query($query))
              {
                 echo "Data updated Successfully";
                 
              }
             
?>