<?php
$connection = mysqli_connect("localhost", "root", "","election");
if(isset($_POST['submit'])){
$Firstname = $_POST['fname'];
$Lastname=$_POST['lname'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$partyname = $_POST['partyname'];
$descr=$_POST['descr'];
if($partyname !=''){
    function random_ID($length_of_string) {
        $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!@#$%^&*()_+'; 
        return substr(str_shuffle($str_result),0, $length_of_string); 
    }
    function random_PWD($length_of_string) {
        $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!@#$%^&*()_+'; 
        return substr(str_shuffle($str_result),0, $length_of_string); 
    }
    $username=random_ID(10);
    $password=random_PWD(10); 
$query = mysqli_query($connection,"INSERT INTO `candidates`
(`firstname`, `lastname`, `age`,`sex`,`partyname`,`descr`,`username`,`password`) 
VALUES ('$Firstname','$Lastname','$age','$gender','$partyname','$descr','$username','$password')");
echo "<center><br/><br/><span>You have been registered successfully...!!</span></center>";
echo "<center><h2>Candidate profile:</h2></center><br>";
echo "<center>FirstName:$Firstname</center><br>";
echo "<center>Lastname:$Lastname</center><br>";
echo "<center>Age:$age</center><br>";
echo "<center>Sex:$gender</center><br>";
echo "<center>Email ID:$partyname</center><br>";
echo "<center>Description:$descr</center><br>";
echo("<center><h3>Your CandidateID :</h3>$username<br>");
echo("<center><h3>Your CandidatePassword :</h3>$password<br>");
echo "<a href=logout.php>Go to HOME page</a>";
}else{
echo "<center><h1><p>Insertion Failed <br/> Some Fields are Blank....!!</p></h1></center>";
header("refresh:2;url=candidate_reg.html");
}
}
mysqli_close($connection); // Closing Connection with Server
?>