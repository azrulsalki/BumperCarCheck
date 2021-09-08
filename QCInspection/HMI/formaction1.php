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
	$BUTTON = $_GET["BUTTON"];
	$SEC = 0;
	switch ($BUTTON): 
	
	case 1;
	if (!$CHECK || mysqli_num_rows($CHECK) == 0){
	$insert = "INSERT INTO qcinspection (COND,SEC) VALUES ('$BUTTON','$SEC')";
	$result = mysqli_query($connect,$insert);
	echo "Insert Success!<br>";
	header("Location: /QCInspection/HMI/QC.php");
	} 
	break;
	
	case 2: 
	header("Location: /QCInspection/HMI/Judge.php");
	break;	
	
	case 3: 
	header("Location: /QCInspection/HMI/Judge2.php");
	break;	
	
	case 4: 
	header("Location: /QCInspection/HMI/Judge3.php");
	break;	
	
	case 5:
	header("Location: /QCInspection/HMI/Judge4.php");
	break;	
	
	case 6: 
	header("Location: /QCInspection/HMI/Judge5.php");
	break;	
	
	case 7:
	header("Location: /QCInspection/HMI/Judge6.php");
	break;
	
	endswitch;
	
	
		
	?>
	

        
    
</body>

</html>