<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "Blue";
$_SESSION["favanimal"] = "Lion";
echo "Session variables are set.";
?>

</body>
</html>
