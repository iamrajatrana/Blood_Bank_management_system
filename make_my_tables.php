<?php

 include_once("db_connect.php");

$tbl_users = "create table if not exists student_db(
                   roll_no int(11) not null,
                   name varchar(16) not null,
                   email varchar(50) not null,
                   blood_grp varchar(10) not null,
                   gender enum('m','f') not null,
                   mobile varchar(13) not null,
                   cur_year varchar(30) not null,
                   primary key(roll_no),
                   unique key username(name,email)
	           )";

$query = mysqli_query($db_conx,$tbl_users);
if($query === TRUE)
	echo "ok";
else
	echo "not created";

?>

