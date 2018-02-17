<?php


/**
 * @category   Website
 * @package    output.php
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
    <link rel="stylesheet" href="css\output.css?version=51" >
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php
	$link = mysqli_connect('localhost', 'root', '', 'first_db');
	mysqli_set_charset($link, 'utf8');
    if(isset($_GET['id'])){

    $id = (int)$_GET['id'];
    $query_fetch = mysqli_query($link,"SELECT * FROM lyrics WHERE ID = $id");

    while($show = mysqli_fetch_array($query_fetch)){
		 /** $show = mysqli_fetch_array($query_fetch) puts data from database into array, while it's valid it does the loop */
       echo $show['Title'];}}
       ?>
    </title>
  </head>
  <body>
    <div class="grid">

      <div id="header" class="header">
        <h1>
		<?php
      $link = mysqli_connect('localhost', 'root', '', 'first_db');
	  mysqli_set_charset($link, 'utf8');
	  if(isset($_GET['id'])){

      $id = (int)$_GET['id'];
      $query_fetch = mysqli_query($link,"SELECT * FROM lyrics WHERE ID = $id");

       while($show = mysqli_fetch_array($query_fetch)){
          echo $show['Title'];}}
          ?>
		</h1>
      </div>

      <div class="navigation">
        <h3><a href="home.php">Home</a></h3>
        <h3><a href="upload.html">Submit/Edit Lyrics</a></h3>
      </div>

      <div class="uTube">
        <?php
		$link = mysqli_connect('localhost', 'root', '', 'first_db');
	    mysqli_set_charset($link, 'utf8');
      if(isset($_GET['id'])){

      $id = (int)$_GET['id'];
      $query_fetch = mysqli_query(mysqli_connect('localhost', 'root', '', 'first_db'),"SELECT * FROM lyrics WHERE ID = $id");

       while($show = mysqli_fetch_array($query_fetch)){ ?>
      <iframe width="420" height="345" src=<?php $link = mysqli_connect('localhost', 'root', '', 'first_db');mysqli_set_charset($link, 'utf8'); echo $show['videoLink'];?> >
      </iframe><?php $link = mysqli_connect('localhost', 'root', '', 'first_db'); mysqli_set_charset($link, 'utf8');
       } // while loop brace

      } // isset brace

      else{
          echo "It is not set.";
      }
      ?>
      </div>

      <div id="stuff" class="content">
        <?php
		$link = mysqli_connect('localhost', 'root', '', 'first_db');
	    mysqli_set_charset($link, 'utf8');
      if(isset($_GET['id'])){

      $id = (int)$_GET['id'];
      $query_fetch = mysqli_query($link,"SELECT * FROM lyrics WHERE ID = $id");

       while($show = mysqli_fetch_array($query_fetch)){
          echo $show['Lyrics'];}}
          ?>
      </div>

      <div class="fbComments">
        <div id="fb-root"></div> <!-- Facebook comments section -->
        <script>
		/**
		*Facebook comment section for every lyrics page
		*@param {Number} d
		*@param {Number} s
		*@param id 
		*/
		(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        <footer>
        <div class="fb-comments" data-href="" data-numposts="5" id="fb"></div>
      </div>

    </div>
  </body>
</html>
