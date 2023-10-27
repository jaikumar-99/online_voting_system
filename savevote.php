<html>
<center>
<table border="10">
<form action="savevote.php" method="post">
<head><h3>CAST YOUR VOTE</h3></head>
<tr><td><input type="radio" name="radio" value="YSR">YSR<br></td></tr>
<tr><td><input type="radio" name="radio" value="Janasena">Jansena<br></td></tr>
<tr><td><input type="radio" name="radio" value="congress">Congress<br></td></tr>
<br><br><br>
</form>
</table>
<br><br>
<table >
<marquee>Before casting your vote you can check the candidate details by clicking on below link</marquee>
<a href="ViewCandidateDetails.php">View Candidate details</a>
</body>
<tr><td><input type="submit" name="submit" value="submit vote" /></td></tr>
</table>
</center>
<?php
$connection = mysqli_connect("localhost", "root", "","election");
if (isset($_POST['submit'])) {
if(isset($_POST['radio'])){
$selected_party=$_POST['radio'];
$query = mysqli_query($connection,"UPDATE `candidates` SET `votes`= `votes`+1 WHERE `partyname`='$selected_party'");
echo "<center><h2>You have selected :".$_POST['radio']."</h2></center>"; 
echo "<a href=logout.php>Log out</a>";
}
}