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
		<div class="dtl-btn" id="dtl-btn" onclick="cnddetails();"><p>CANDIDATE LIST <div>
	</div>
</center>
	<div class="dtl-tbl" id="dtl-tbl">
	<center>
		<table border=1>
			<tr>
                <th>Candidate ID</th>
                <th>Candidate PWD</th>
				<th>Candidate Firstname</th>
				<th>Candidate Lastname</th>
                <th>Candidate Age</th>
                <th>Gender</th>
				<th>Party name</th>
				<th>Candidate Description</th>
			</tr>
			<?php 
				$f=mysqli_query($conn,"select * from candidates");
				while($r=mysqli_fetch_object($f))
				{
					?>
			<tr>
                <td><?php echo $r->username;?></td>
                <td><?php echo $r->password;?></td>
				<td><?php  echo $r->firstname; ?></td>
				<td><?php  echo $r->lastname; ?></td>
                <td><?php echo $r->age;?></td>
                <td><?php echo $r->sex;?></td>
				<td><?php echo $r->partyname;?></td>
				<td><?php  echo $r->descr; ?></td>
			</tr>
			<?php
				}
			?>
		</table>
		</center>
	</div>
</body>
</html>