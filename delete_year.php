
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

              $query = "DELETE from `student_db` where (`cur_year` = 'final' and `branch` <> 'arc') or ( `cur_year` = 'Superfinal' and `branch` ='arc')";
              if($query_run1=mysql_query($query))
              {
                 
                 $query = "UPDATE `student_db` set `cur_year` = 'Superfinal' where `cur_year` = 'final' and `branch` = 'arc'";
                 mysql_query($query);
                 $query = "UPDATE `student_db` set `cur_year` = 'final' where `cur_year` = 'third'";
                 mysql_query($query);
                 $query = "UPDATE `student_db` set `cur_year` = 'third' where `cur_year` = 'second'";
                 mysql_query($query);
                 $query = "UPDATE `student_db` set `cur_year` = 'second' where `cur_year` = 'first'";
                 mysql_query($query);
                 echo "success";
                
              }
              else
              {
                echo "Try Later";
              
              }
                
          
     
              
                
       

?>