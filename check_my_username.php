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
                             $u = mysql_real_escape_string("$u");

                             if(!($u == ""))
                             {
                                 $query="SELECT `username` from `login` where `username` = '$u' ";
                                 if($query1=mysql_query($query))
                                 {
                                      $row = mysql_fetch_assoc($query1);
                                      if( strcmp("$u",$row['username']) == 0)
                                      {
                                        $roll_check = mysql_num_rows($query1); 
                                      if ($roll_check < 1) 
                                      { 
                                          echo "Not Admin"; 
                                          
                                      } 
                                      else 
                                      { 
                                            $query="SELECT `ques1`,`ques2` from `login` where `username` = '$u' ";
                                            if($res = mysql_query($query))
                                            {
                                                $row = mysql_fetch_assoc($res);

                                            }
                                            echo "<p><label for='answ1'>".$row['ques1']."</label></p> <input type = 'text' name='username' value='' id='answ1' required ><p><label for='answ2'>".$row['ques2']."</label></p><input type = 'text' id='answ2' value='' required><p><label for='pass_new'>Enter New Password</label></p><input type='password' id='pass_new' required/><input type = 'submit' value='Reset Password' id='reset' onclick = 'reset_password()'><br><span id='upstat'</span>";

                                              
                                     } 
                                      }

                                      else
                                      {
                                        echo "Not Admin";
                                      }
                                      
                                  }
                              }
                             else
                             {
                                echo "Please Enter Username";
                             }
                             
                                 
                             
?>