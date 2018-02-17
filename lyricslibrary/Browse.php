<?php


/**
 * @category   Website
 * @package    browse.php
 * @author     coders
 * @copyright  1997-2005 The PHP Group
 * @license    http://www.php.net/license/3_0.txt  PHP License 3.0
 * @version    CVS: $Id:$
 * @link       http://pear.php.net/package/PackageName
 * @see        NetOther, Net_Sample::Net_Sample()
 * @since      File available since Release 1.2.0
 *
 */
?>php
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css\Browse.css"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse</title>
  </head>
  <body>
    <header>
    <ul>
      <li><a class="active" href="home.php">Home</a></li>
      <li><a href="Browse.php">Browse</a></li>
      <li><a href="#">Discover</a></li>
      <li><a href="upload.html">Submit Lyrics</a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
    </header>
  </body>
</html>

<?php
$link = mysqli_connect('localhost', 'root', '', 'first_db');
mysqli_set_charset($link, 'utf8');
$query = mysqli_query($link, "SELECT * from lyrics") or die(mysqli_error($link));

while ($show = mysqli_fetch_assoc($query)) {
  echo '<p><a href="output.php?id='.$show['id'].'">'.$show['Title'].'</a></p><br>';
}
?>
