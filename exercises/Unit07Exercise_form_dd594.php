<!DOCTYPE html>
<html>
<head>
<title>Unit 7 In-Class Exercise dd594</title>
</head>
<body>
<h1>My Golfing Team</h1>
<h4>Name: Deeya Dave</h4>
<h4>UCID: dd594</h4>
<h4>Course and Section: IT-202-003 Internet Applications</h4>
<form name="games" action="Unit07Exercise_action_dd594.php" method="get">
   <label>Golfer ID:</label>
   <input type="text" name="golferid">
   <br>
   <br>
   <input type="submit">
</form>
<br>
<?php
date_default_timezone_set("America/New_York");
echo "The date and time is " . date("D M j h:i:sa T Y");
?>
</body>
</html>