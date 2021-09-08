<html>
    
<body>
        
        
<?php
       
        
$dbname = 'mika';
        
$dbuser = 'root';
        
$dbpass = '';
        
$dbhost = 'localhost';
        
        
$connect = @mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
     
if(!$connect){
            
echo"Error: " . mysqli_connect_error();
            
exit();
        }
        
        
echo "Connection Success!<br><br>";
        
        
        
$COND = $_GET["COND"];

$SEC = 2;
              

$CHECK = "SELECT id FROM qcinspection WHERE SEC = ('$SEC')";

//if (mysqli_num_rows($CHECK == 0))
if (!$CHECK || mysqli_num_rows($CHECK) == 0){

$insert = "INSERT INTO qcinspection (COND,SEC) VALUES ('$COND','$SEC')";

$result = mysqli_query($connect,$insert);

echo "Insert Success!<br>";

header("Location: /QCInspection/HMI/QC.php");

} 


else{
    echo"DATA ALREADY IN DATABASE";

}

$mysqli->close();		
		
		
		
		
     
        
?>
        
    
</body>

</html>