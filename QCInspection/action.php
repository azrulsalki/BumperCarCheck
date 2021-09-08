<html>
    
<body>
        
        
<?php
        
        
$dbname = 'flamingo_student';
        
$dbuser = 'flamingo_azrul';
        
$dbpass = '123456789abcD';
        
$dbhost = 'localhost';
        
        
$connect = @mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
 
if(!$connect){
            
echo"Error: " . mysqli_connect_error();
            
exit();
        }
        
        
echo "Connection Success!<br><br>";
        
        
$first = $_GET["first"];
        
$last = $_GET["last"];
        
$username = $_GET["username"];
        
$password = $_GET["password"];
        
        
$query = "INSERT INTO student (first, last, username, password) VALUES ('$first', '$last','$username','$password')";
        
$result = mysqli_query($connect,$query);
        
        
echo "Insert Success!<br>";
        
        
?>
        
    
</body>
</html>