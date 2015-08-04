<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="zaraffa"; // Database name 
$tbl_name="user"; // Table name 

// Connect to server and select databse.
$mysqli = mysqli_connect($host, $username, $password, $db_name);

if (mysqli_connect_errno($mysqli)) {
    echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
}

$res = mysqli_query($mysqli, "SELECT * FROM user");
$row = mysqli_fetch_assoc($res);
echo $row['login'];

$mysqli = new mysqli($host, $username, $password, $db_name);
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: " . $mysqli->connect_error;
}

$res = $mysqli->query("SELECT firstName from user");
$row = $res->fetch_assoc();
echo $row['firstName'];

// if (mysqli_connect_errno($mysqli)) {
//     echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
// }

// mysql_select_db("$db_name")or die("cannot select DB");

// // username and password sent from form 
// $myusername=$_POST['myusername']; 
// $mypassword=$_POST['mypassword']; 

// // To protect MySQL injection (more detail about MySQL injection)
// $myusername = stripslashes($myusername);
// $mypassword = stripslashes($mypassword);
// $myusername = mysql_real_escape_string($myusername);
// $mypassword = mysql_real_escape_string($mypassword);
// $sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
// $result=mysql_query($sql);

// // Mysql_num_row is counting table row
// $count=mysql_num_rows($result);

// // If result matched $myusername and $mypassword, table row must be 1 row
// if($count==1){

// // Register $myusername, $mypassword and redirect to file "login_success.php"
// session_register("myusername");
// session_register("mypassword"); 
// header("location:login_success.php");
// }
// else {
// echo "Wrong Username or Password";
// }
?>