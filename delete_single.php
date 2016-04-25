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
      $roll=$_GET['roll'];
      if(!(is_numeric($roll)))
      {
        echo "enum";

      }
      else
      {
        $query = "SELECT `name` from `student_db` where `roll_no` = $roll";
      $query1 = mysql_query($query);
      $count = mysql_num_rows($query1);
      if($count < 1)
      {
        echo "nodel";
      }
      else
      {
              $query="DELETE from `student_db` where `roll_no` = $roll";
              if($query_run1=mysql_query($query))
              {
                 echo "del";
              }
              else
              {
                echo 'cant';
              }
      }
      
      }
      
             
?>