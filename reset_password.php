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

        $u  = $_GET["u"];
        $answ1 = $_GET["answ1"];
        $answ2 = $_GET["answ2"];
        $pass_new = $_GET["pass_new"];
        if( $answ1 == "" && $answ2 == "" && $pass_new == "")
        {
        	echo "Fill All Fields";
        }
        else
        {
            $query = "SELECT `ans1`,`ans2` from `login` where `username`  = '$u'";
            if( $q = mysql_query($query))
            {
                $row = mysql_fetch_assoc($q);
                if($row["ans1"] == "$answ1" && $row["ans2"] == "$answ2")
                {
                     $query = "UPDATE `login` Set `password` = '$pass_new' where `username` = '$u'";
                     if($q = mysql_query($query))
                     {
                        echo "s";
                     }
                     else
                     {
                        echo 'f';
                     }
                }
                else
                {
                    echo "donotmatch";
                }
            }
            else
            {
                "fail";
            }
        }
?>