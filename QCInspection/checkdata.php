<html>
<body>

<table>
<tr>
<th></th>
<th></th>
<th></th>
<tr>

<?php
$conn = mysqli_connect("localhost" , "root", "", "mika");
if ($conn -> connect_error){
	die("Connection failed: ". $conn-> connect_error);
}

$sql = "SELECT INDEX,COND,BARCODE from qrinspection";
$result = $conn-> query($sql);

if ($result-> num_rows> 0){
	while ($row = $result-> fetch_assoc()){
		echo "<tr><td>". $row["INDEX"]."<tr><td>".$row["COND"]."<tr><td>".$row["BARCODE"]."<tr><td>";
	}
echo"</table>";
}
else {
echo "0 result";
}

?>
</table>
</body>
</html>