<?php
 
    $db_conx = mysql_connect("localhost","root","");
    if(mysql_connect_errno())
    {
    	echo mysql_connect_error();
    	exit();
    }
    else
    {
    	echo "success";
    }

?>