<?php
include 'topbar.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Password Change</title>

</head>
<body>
<h3>CHANGE PASSWORD</h3>
<div></div>
<form method="post">
Current Password:<br>
<input type="password" name="currentPassword"><span id="currentPassword" class="required"></span>
<br>
New Password:<br>
<input type="password" name="newPassword"><span id="newPassword" class="required"></span>
<br>
Confirm Password:<br>
<input type="password" name="confirmPassword"><span id="confirmPassword" class="required"></span>
<br><br>
<input type="submit">
</form>
<br>
<br>
</body>
</html>

<?php
session_start();
$id = $_SESSION["uid"];/* userid of the user */

include 'dbh.inc.php';

if(count($_POST)>0) {
$result = mysqli_query($conn,"SELECT *from users WHERE usersUid='" . $id . "'");
$row=mysqli_fetch_array($result);
if($_POST["currentPassword"] == $row["usersPwd"] && $_POST["newPassword"] == $row["confirmPassword"] ) {
mysqli_query($conn,"UPDATE student set password='" . $_POST["newPassword"] . "' WHERE name='" . $id . "'");
echo("Password Changed Sucessfully");
} else{
 echo ("Password is not correct");
}
}
?>


