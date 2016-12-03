$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="mydb"; 
$tbl_name="metbl";


mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

if(isset($_POST['enq_submit']))
{ 
$name=$_POST['co_name'];
$mobile=$_POST['co_mobile'];
$email=$_POST['co_email'];
$message=$_POST['co_message'];
$sql="INSERT INTO $tbl_name(fco_name, fco_mobile, fco_email,fco_text)VALUES('$name',                                                     '$mobile', '$email','$message' )";
$result=mysql_query($sql);

if($result){
echo "OK";

else {
echo "ERROR";
}
?> 

<?php 

mysql_close();
}
?>