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
		<div class="dtl-btn" id="dtl-btn" onclick="cnddetails();"><p>Calculate Result<div>
	</div>
</center>
	<div class="dtl-tbl" id="dtl-tbl">
	<center>
		<table border=1>
			<tr>
				<th>Candidate Firstname</th>
				<th>Candidate Lastname</th>
				<th>Party name</th>
				<th>No_of_votes</th>
			</tr>
			<?php 
				$f=mysqli_query($conn,"select * from candidates");
				while($r=mysqli_fetch_object($f))
				{
					?>
			<tr>
				<td><?php  echo $r->firstname; ?></td>
				<td><?php  echo $r->lastname; ?></td>
				<td><?php echo $r->partyname;?></td>
				<td><?php  echo $r->votes; ?></td>
			</tr>
			<?php
				}
			?>
		</table>
        <?php
         $l=mysqli_query($conn,"SELECT partyname,max(votes) as winner from candidates");
         while($r=mysqli_fetch_object($l)){
             echo "<h1>Winner of the election</h1><br>";
             echo "<b>Party ".$r->partyname." has won with ".$r->winner."votes</b>";
         }
        ?>
		</center>
	</div>
</body>
</html>