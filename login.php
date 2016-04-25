<?php 
include('db.php');
session_start();

	$user=$_GET['u'];
	$pass=$_GET['p'];
   
    $fetch=mysql_query("SELECT `username` from `login` where `username`='$user' and `password`='$pass'");
    $row = mysql_fetch_assoc($fetch);
    if( strcmp("$user",$row['username']) == 0)
    {
         $count=mysql_num_rows($fetch);
         if($count!="")
          {
	session_register("sessionusername");
    $_SESSION['login_username']=$user;
   
	header("Location:admin-area.php");	
    }
    else
    {

	   echo "Invalid username or password";
	}
}

else
{
    echo "Invalid username or password";
    
}
?>