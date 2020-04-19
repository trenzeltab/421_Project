<html>
<head>
</head>


Welcome to BirdBox Sports. The New-Age Home for all Boxing Enthusiasts!
<br>


</body>

<h1>BirdBox Sports</h1>
<h2>Home Page</h2>

<h4>Look at the preview below for a glance at our Top 50 Pound-for-Pound rankings!</h4>
<br>
<br>
<?php
///////////////////////////////////
include "db_connect.php";

//include "search_all_ranks.php";
echo "<br>";
//echo "Data is up to date as of 11:00 PM 4/17/2020";
echo "<br>";
echo "<br>";
?>


<form action="/search_keyword.php">
  <label for="fname">Please enter your favorite active boxer to show their info:</label><br>
  <input type="text" id="fname" name="keyword"><br>
  <input type="submit" value="Submit">
</form>

<br>
<hr>
<h4>If you would like to help us update our boxer listing, use the input below:</h4> 

<br>
<form action="/add_boxer.php">
  <label for="fname">Please enter a new boxer's name here:</label><br>
  <input type="text" id="fname" name="newboxer"><br>

 <label for="fname">Input their weight class below:</label><br>
  <input type="text" id="fname" name="newclass"><br>
  <input type="submit" value="Submit">
</form>
<hr>
<?php
//include "search_keyword.php";
//////////////////////////////////




///////////////////////////////////////////////////////////////////// search for words specific



$mysqli->close();

?>
<br>
<br>
<br>
Thank you for visiting our site! Visit us again for updated rankings and news on worldwide championship boxing.
<br>
<br>
Contact Us: birdbox@gmail.com  OR our customer service team by phone 1-800-BOX-BIRD
<br>
<br>
BirdBox Sports (R.)				Data seen on site is current as of 11:00 PM 4/17/2020
</html>