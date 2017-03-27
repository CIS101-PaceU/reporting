<?php include 'conn.php'; ?>

<html>
<head>
<link href="style.css" rel="stylesheet" />
<style>

.ta1{
padding:15px;
border:1px solid black;
border-collapse:collapse;
text-align:center;
height:50px;
color:#f2f2f2;
}

.ta3{
width:100%;
padding:15px;
border:1px solid pink;
border-collapse:collapse;
text-align:center;
height:50px;
font-weight:bold;
}

</style>
</head>


	<?php

$result= mysqli_query($conn,"select * from attendance order by missedclasses DESC");

if ($result->num_rows > 0) {
     // output data of each row
echo"<table align='center' padding='100px'>";
echo"<tr><td class='ta1'> Student ID </td> <td class='ta1'> Missed Classes </td>";
echo" <td class='ta1'> Marks </td><td class='ta1'> week1 </td><td class='ta1'> week2 </td><td class='ta1'> week3 </td>";
echo"<td class='ta1'> week4 </td> </tr>";
     while($row = $result->fetch_assoc()) {

         echo  "<tr><td class='ta1'> ". $row["Stud_ID"]. " </td><td class='ta1'> ". $row["missedclasses"]. "</td><td class='ta1'> " . $row["marks"] . "</td>";
				 if($row["week1"]=='absent')
				 echo"<td class='ta1'>X</td>";
				 else
				 	echo"<td></td>";
				if($row["week2"]=='absent')
				echo"<td class='ta1'>X</td>";
				else
				 echo"<td></td>";
				if($row["week3"]=='absent')
				echo"<td class='ta1'>X</td>";
				else
				 echo"<td></td>";
				if($row["week4"]=='absent')
				echo"<td class='ta1'>X</td></tr>";
				else
				 echo"<td></td></tr>";
     }
		 echo"</table>";
	 }
	 else {
	echo "<table align='center' border='1'><tr><td> Error</td></tr></table>";

	echo mysqli_error ($conn);
}
?>
