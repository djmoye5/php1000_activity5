<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
$_SESSION['username'] = 'admin';
// if(isset($_SESSION['username'], $_SESSION['password'])){
    echo 'Hello ';
    echo $_SESSION['username']; 
// } 
// else{
//     // header('Location: login.php');
//     // exit;
// }
?>
<form action="destroy.php">
<input type="submit" value="Kill Session">
</form>

</body>
</html>