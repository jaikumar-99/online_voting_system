
<?php
$connection = mysqli_connect("localhost", "root", "","election");
if(isset($_POST['submit'])){
$Firstname = $_POST['fname'];
$Lastname=$_POST['lname'];
$age=$_POST['age'];
$phoneno=$_POST['phoneno'];
$aadharno=$_POST['aadharno'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$email = $_POST['email'];
if($email !=''){
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
$query = mysqli_query($connection,"INSERT INTO `registration`
(`firstname`, `lastname`, `age`, `phoneno`,`aadharno`,`sex`,`dob`,`email`,`voterid`,`password`) 
VALUES ('$Firstname','$Lastname','$age','$phoneno','$aadharno','$gender','$dob','$email','$username','$password')");
echo "<center><br/><br/><span>You have been registered successfully...!!</span></center>";
echo "<center><h2>Voter profile:</h2></center><br>";
echo "<center>FirstName:$Firstname</center><br>";
echo "<center>Lastname:$Lastname</center><br>";
echo "<center>Age:$age</center><br>";
echo "<center>Phoneno:$phoneno</center><br>";
echo "<center>Aadharno:$aadharno</center><br>";
echo "<center>Sex:$gender</center><br>";
echo "<center>Date of Birth:$dob</center><br>";
echo "<center>Email ID:$email</center><br>";
echo("<center><h3>Your VoterID :</h3>$username<br>");
echo("<center><h3>Your Password :</h3>$password<br>");
echo "<a href=logout.php>Go to home page</a>";
}else{
echo "<center><h1><p>Insertion Failed <br/> Some Fields are Blank....!!</p></h1></center>";
header("refresh:2;url=registerhere.html");
}
}
mysqli_close($connection); // Closing Connection with Server
?>