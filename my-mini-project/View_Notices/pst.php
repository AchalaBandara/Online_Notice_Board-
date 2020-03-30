<?php 
include('../connection.php');

$q=mysqli_query($conn,"select * from notice where department='Physical Sciences and Technologies'");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:#000080'>No any Notices found !</h2>";
}
else
{
?>
<h2 style="color:green"><b>ALL NOTICES</b></h2>

<table class="table table-bordered" style="margin-top:70px">
	
	<Tr class="success">
		<th>Sr.No</th>
		<th>Subject</th>
		<th>Details</th>
		<th>Date</th>
	</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['subject']."</td>";
echo "<td>".$row['Description']."</td>";
echo "<td>".$row['Date']."</td>";
?>
<?php

echo "</Tr>";
$i++;
}
		?>
		
</table>
<?php }?>