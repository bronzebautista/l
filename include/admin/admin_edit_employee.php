<?php

     include('../../database/connection.php');
	session_start();
	$EMPLOYEEID1 = $_SESSION['admin'];
    $DATE = date("Y-m-d", time());
    $TIME = date("G:i:s A", time());
    $result1 = mysql_query("select * from existdb.useraccounts WHERE USERID='$EMPLOYEEID1'");
	$row1 = mysql_fetch_array($result1);
	$username = $row1['FULLNAME'];
	$userdep  = $row1['DEPARTMENT'];
	
	mysql_query("INSERT INTO existdb.log_trail(LOG_DATE,LOG_TIME,LOG_DET,USER,ACCOUNT_TYPE,DEPARTMENT) VALUES('$DATE','$TIME','Welcome to Editing Employee Records','$username','User Accounts','$userdep')");

?>
<html>
<title>Edit Employee Records</title>
<header>
		<link rel="stylesheet" type="text/css" href="../../css/styles.css"/>	
</header>
	<div id="wrapper">
		<?php include('admin_login_as.php'); ?>
		<?php include('../header.php'); ?>
		<?php include('admin_navigation.php'); ?>
		<?php include('admin_edit_employee_records.php'); ?>
		<?php include('../footer.php'); ?>
	</div>
</html>