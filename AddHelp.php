<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="function.js"></script>
</head>
<body>
<select id="Day">
 <option value="1">ראשון</option>
 <option value="2">שני</option>
 <option value="3">שלישי</option>
  <option value="4">רביעי</option>
 <option value="5">חמישי</option>
 <option value="6">שישי</option>
 <option value="7">שבת</option>
</select>
<select id="Hour">
<?php
for($i=8;$i<=22;$i++)
{
	echo "<option value=".$i.">".$i."</option>";
}
?>
</select>
<input id="AddHelp" type="button" value="Submit">
<div id="SendHelpDiv"></div>
<script>

</script>
</body>
</html>