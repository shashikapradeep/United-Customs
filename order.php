<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $pattern = mysql_real_escape_string($_POST['pat']);
    $shoetype = mysql_real_escape_string($_POST['sho']);
    $combination = mysql_real_escape_string($_POST['comb']);
	$amount=400;
    $bool = true;
    if($pattern == null || $shoetype == null || $combination == null)
    {
        Print '<script>alert("Select all the aspects of combination!!");</script>'; // Prompts the user
		Print '<script>window.location.assign("edit.html");</script>'; // redirects to register.php
        break;
    }
    if($shoetype == "ht")
    {
        $amount = $amount+600;
    }
    else
    {
        $amount = $amount+800;
    }
    if($combination == "c1")
    {
        $amount = $amount+1000;
    }
    else if($combination == "c2")
    {
        $amount = $amount+800;
    }
    else
    {
        $amount = $amount+600;
    }
    $address = "/img/".$pattern.$shoetype.$combination.".jpg";
	mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
	mysql_select_db("data3") or die("Cannot connect to database"); //Connect to database
	mysql_query("INSERT INTO data3.order VALUES ('$pattern','$shoetype','$combination','$amount','$address')"); //Inserts the value to table users
		Print '<script>window.location.assign("final.php");</script>'; // redirects to register.php
}
?>