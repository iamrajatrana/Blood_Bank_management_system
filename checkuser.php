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

                             $u = $_GET["u"];
                             
                             if(is_numeric($u))
                             {
                                $query="SELECT * from `student_db` where `roll_no` = $u ";
                                if($query1=mysql_query($query))
                                 {
                                      $roll_check = mysql_num_rows($query1); 
                                      if ($roll_check < 1) 
                                      { 
                                          echo "ok"; 
                                          
                                      } 
                                      else 
                                      { 
                                            echo "use"; 
                                              
                                     } 
                                  }
                             }
                             else
                             {
                                echo "Invalid";
                             }
                             
?>