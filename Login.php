<?php
session_Start();
echo $_SESSION['id'];
 
?>
<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="function.js"></script>
</head>
<body>
<input id="userName" type="text" placeholder="Username">
<input id="Pass" type="password" placeholder="Password">
<input id="Login" type="button" value="Submit">
<div id="LoginDiv"></div>
<script>

</script>
</body>
</html>