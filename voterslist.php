<?php
	include"config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<style type="text/css">
		.dtl-btn {
			height:50px;
			width: 200px;
			background-color: #82C4E1;
			border-radius: 7px;
		}
		.dtl-btn p {
			position: relative;
			top:15px;
			left: 30px;
		}
		.dtl-btn:hover {
			background-color: #70A6BE;
		}
		.dtl-tbl {
			display:none;
		}
		.abc {
			height:50px;
			width: 200px;
			background-color: #82C4E1;
			border-radius: 7px;
		}
		.abc p {
			position: relative;
			top:15px;
			left: 30px;
		}
		.abc:hover {
			background-color: #70A6BE;
		}
	</style>
	<script type="text/javascript">
		function cnddetails() {
			document.getElementById("dtl-btn").style.display="none";
			document.getElementById("dtl-tbl").style.display="block";
		}
	</script>
</head>
<body>
<center>
	<div class="cand-details">
		<div class="dtl-btn" id="dtl-btn" onclick="cnddetails();"><p>VOTER LIST<div>
	</div>
</center>
	<div class="dtl-tbl" id="dtl-tbl">
	<center>
		<table border=1>
			<tr>
                <th>Voter ID</th>
                <th>Voter PWD</th>
				<th>Voter Firstname</th>
				<th>Voter Lastname</th>
                <th>Voter Age</th>
                <th>Gender</th>
				<th>Date of Birth</th>
				<th>Email id</th>
                <th>Phone NO</th>
                <th>Aaadhar NO</th>
			</tr>
			<?php 
				$f=mysqli_query($conn,"select * from registration");
				while($r=mysqli_fetch_object($f))
				{
					?>
			<tr>
                <td><?php echo $r->voterid;?></td>
                <td><?php echo $r->password;?></td>
				<td><?php  echo $r->firstname; ?></td>
				<td><?php  echo $r->lastname; ?></td>
                <td><?php echo $r->age;?></td>
                <td><?php echo $r->sex;?></td>
				<td><?php echo $r->dob;?></td>
				<td><?php  echo $r->email; ?></td>
                <td><?php  echo $r->phoneno; ?></td>
                <td><?php  echo $r->aadharno; ?></td>
			</tr>
			<?php
				}
			?>
		</table>
		</center>
	</div>
</body>
</html>