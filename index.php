<h1> 
php version : <?php echo phpversion(); ?>

</h1>
<?php
$servername = "192.168.1.7";
$username = "root";
$dbname = "docker_database";
$password = "12345";

try {
  $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>