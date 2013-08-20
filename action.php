Hello, <?php echo htmlspecialchars($_POST['first_name']); ?>.
<br/>
You mentioned your last name was
<?php echo htmlspecialchars($_POST['last_name']); ?>, correct?
<br/><br/>
<a href="test.php">Back</a>
<?php
$con=mysqli_connect("localhost","dev","@WSXcde3","people");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO person (first_name, last_name)
VALUES
('$_POST[first_name]','$_POST[last_name]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

mysqli_close($con);
?>