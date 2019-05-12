<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
if(isset($_SESSION['username'], $_SESSION['password'])){
   
} else{
    // header('Location: home.php');
    // exit;
}
?>

<form action="submit.php" method="post">
  USERNAME:<br>
  <input type="text" name="Username"><br>
  PASSWORD:<br>
  <input type="text" name="Password"><br><br>
  <input type="submit" value="Submit">
</form>


</body>
</html>