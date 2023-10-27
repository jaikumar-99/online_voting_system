<?php
$username=$_POST['user'];
$password=$_POST['pass'];
$username=stripcslashes($username);
$password=stripcslashes($password);
$con=mysqli_connect("localhost","root","","election");
if (!$con) {
    die('Could not connect to the server' . mysqli_connect_error());
}
$sql="SELECT * FROM login_admin WHERE `user_name`='$username' AND `user_pass`='$password'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
if($count==1){
    echo"login success!!!";
    header("refresh:2,url=admindashboard.html");
}
else{
    echo "failed to login!";
    header("refresh:2;url=login.html");
}
?>