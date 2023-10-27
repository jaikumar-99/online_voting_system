<?php
include"config.php";
$partyname=$_POST['partyname'];
$sql="SELECT * FROM candidates WHERE `partyname`='$partyname'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
if($count==1){
echo "<b> <center>CANDIDATE PROFILE</center> </b> <br> <br>";
if ($res = mysqli_query($con,$sql)) {
 
    while ($row = $res->fetch_assoc()) {
        $field1name = $row["username"];
        $field2name = $row["password"];
        $field3name = $row["firstname"];
        $field4name = $row["lastname"];
        $field5name = $row["age"];
        $field6name = $row["sex"];
        $field7name = $row["partyname"];
        $field8name = $row["descr"];
        echo "<center><table border=1>
        <tr><td>CANDIDATE ID: </td><td>$field1name</td></tr>
        <tr><td>CANDIDATE Password: </td><td>$field2name</td></tr>
        <tr><td>Firstname: </td><td>$field3name</td></tr>
        <tr><td>Lastname: </td><td>$field4name</td></tr>
        <tr><td>Age: </td><td>$field5name</td></tr>
        <tr><td>Gender: </td><td>$field6name</td></tr>
        <tr><td>PartyName: </td><td>$field7name</td></tr>
        <tr><td>Description: </td><td>$field8name</td></tr>
        </table>";
        echo "<a href=logout.php>Log out</a>";
    }
$res->free();
}
}
?>