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

        $ques1 = $_GET["ques1"];
        $ans1 = $_GET["ans1"];
        $ques2 = $_GET["ques2"];
        $ans2 = $_GET["ans2"];
        $pass = $_GET["pass"];
        $usrname = $_GET["usrname"];

        if($ques1 == "" && $ques2 == "" && $ans1 == "" && $ans2 == "" && $pass == "")
        {
        	echo "Cant Process. Try later";
        }
        else

        {
            $query  = "SELECT `password` from `login` where `username` = '$usrname'";
            if($query_run1=mysql_query($query))
            {
            	$row = mysql_fetch_assoc($query_run1);
            	if($row["password"] == "$pass")
            	{
            		 $query = "UPDATE `login` SET `ques1` = '$ques1', `ans1` = '$ans1', `ques2` = '$ques2', `ans2` = '$ans2' where `username` = '$usrname'";
            		 if($query_run1=mysql_query($query))
            		 {
                              echo "Success. Your can now reset your password if you forget it ";
            		}
            	}
            	else
            	{
            		echo "Wrong Password";
            	}
            }
        	 
        }

?>