<?php
$username=$_POST['user'];
$password=$_POST['pass'];
$username=stripcslashes($username);
$password=stripcslashes($password);
$con=mysqli_connect("localhost","root","","election");
if (!$con) {
    die('Could not connect to the server' . mysqli_connect_error());
}
$sql="SELECT * FROM registration WHERE `voterid`='$username' AND `password`='$password'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
if($count==1){
    echo"<b> <center>login success!!!</b> <br> <br>";
echo "<b> <center>VOTER PROFILE</center> </b> <br> <br>";
if ($res = mysqli_query($con,$sql)) {
 
    while ($row = $res->fetch_assoc()) {
        $field1name = $row["voterid"];
        $field2name = $row["password"];
        $field3name = $row["firstname"];
        $field4name = $row["lastname"];
        $field5name = $row["age"];
        $field6name = $row["phoneno"];
        $field7name = $row["aadharno"];
        $field8name = $row["sex"];
        $field9name = $row["dob"];
        $field10name = $row["email"];
        echo "<center><table border=1>
        <tr><td>VOTER ID: </td><td>$field1name</td></tr>
        <tr><td>VOTER Password: </td><td>$field2name</td></tr>
        <tr><td>Firstname: </td><td>$field3name</td></tr>
        <tr><td>Lastname: </td><td>$field4name</td></tr>
        <tr><td>Age: </td><td>$field5name</td></tr>
        <tr><td>Phone no: </td><td>$field6name</td></tr>
        <tr><td>Aadhar no: </td><td>$field7name</td></tr>
        <tr><td>Gender: </td><td>$field8name</td></tr>
        <tr><td>Date Of Birth: </td><td>$field9name</td></tr>
        <tr><td>Email: </td><td>$field10name</td></tr>
        </table>
        <marquee direction=left ><h1>A new election is ON ,to cast your vote click on the below link</h1></marquee>";
        echo "<center><a href=savevote.php><h2>Cast VOTE</h2></a></center>";
        echo "<a href=logout.php>Log out</a>";
    }
$res->free();
}
}
else{
    echo "failed to login!";
    header("refresh:5;url=login.html");
}
?>