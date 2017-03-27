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

</style>
</head>

	<?php

  $result= mysqli_query($conn,"select * from assignment_1 order by Submitted ASC, Over_Due DESC");
  if ($result->num_rows > 0) {
       // output data of each row
  echo"<table border='1' align='center' padding='100px'>";
  echo"<tr><td class='ta1'> Student ID </td> <td class='ta1'> Submitted </td> <td class='ta1'> Due Date </td><td class='ta1'> Over Due </td><td class='ta1'> Marks </td></tr>";
       while($row = $result->fetch_assoc()) {

           echo  "<tr><td class='ta1'> ". $row["Student_Id"]. " </td><td class='ta1'> ". $row["Submitted"]. "</td><td class='ta1'> " . $row["Due_Date"] . "</td><td class='ta1'>" . $row["Over_Due"] ."</td><td class='ta1'>". $row["Marks"] ."</td></tr>";

       }
  		 echo"</table>";
  	 }
  	 else {
  	echo "<table align='center' border='1'><tr><td> Error</td></tr></table>";

  	echo mysqli_error ($conn);
  }
  ?>
