<?php
// set the expiration date to one hour ago
setcookie("user", "", time() - 10);
?>
<html>
<body>

<?php
echo "Cookie 'user' is deleted.<br>";
?>

</body>
</html>
