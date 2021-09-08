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
$Result = $_GET["Result"];
              
$CHECK = "SELECT id FROM qcinspection WHERE BARCODE = ('$Result')";
//if (mysqli_num_rows($CHECK == 0))
if (!$CHECK || mysqli_num_rows($CHECK) == 0){

$insert = "INSERT INTO qcinspection (COND,BARCODE) VALUES ('$COND','$Result')";
$result = mysqli_query($connect,$insert)	;
echo "Insert Success!<br>"	;

header("Location: /QCInspection/HMI.php")	;
} 

else{
    echo"DATA ALREADY IN DATABASE";
}
$mysqli->close();		
		
		
		
		
     
        
?>
        
    
</body>

</html>