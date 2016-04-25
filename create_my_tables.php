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
 $tbl_users = "create table if not exists login(
 	              username varchar(255) not null,
 	              password varchar(40) not null,
 	              ques1 varchar(255) null,
 	              ans1 varchar(255) null,
 	              ques2 varchar(255) null,
 	              ans2 varchar(255) null,
 	              primary key(username)
                  
	           )";

$query = mysql_query($tbl_users);
if($query === TRUE)
	echo "ok";
else
	echo "not created";


$stud = "create table if not exists student_db(
              roll_no int not null,
              name varchar(255) not null,
              branch varchar(255) not null,
              cur_year varchar(255) not null,
              gender varchar(255) not null,
              blood_grp varchar(20) not null,
              mobile int(15) not null,
              primary key(roll_no)

	)";

$query = mysql_query($stud);
if($query === TRUE)
	echo "ok";
else
	echo "not created";

$query = "INSERT into login(`username`,`password`) values('RajatRana','rajat13541')";
$query = mysql_query($query);
if($query === TRUE)
	echo "ok";
else
	echo "not created";

?>