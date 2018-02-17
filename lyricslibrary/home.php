<?php


/**
 * @category   Website
 * @package    home.php
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
<html>
    <head>
        <title>LyricsHUB</title>
		<link rel="stylesheet" href="css\home.css?version=51" >
		<script type="text/javascript" src="js\transliterate.js"></script>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head> 
   <?php
   session_start(); /** starts the session */
   if($_SESSION['user']){ /** checks if the user is logged in */
   }
   else{
      header("location: index.php"); /** redirects if user is not logged in */
   }
   $user = $_SESSION['user']; /** assigns user value */
   ?>
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
			<li><a href="#"></a></li>
			<li><a href="about.html">About</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
		</header>
		<center>
		<form action="search.php" method="GET">
        <input type="text" id="query"  name="query" size="40" style="height:40px" />
        <input type="submit" value="Search" style="height:40px;margin:20px" />
		</form>
		</center>
        <strong><font size="5"><p>Hello <?php Print "$user"?>!</p></font></strong> <!--Display user name-->
  		<div id="fb-root"></div> <!-- Facebook comments section -->
  		<script>
		/**
		*@param {Number} d
		*@param {Number} d
		*@param {object} id 
		*/
		(function(d, s, id) {
  		var js, fjs = d.getElementsByTagName(s)[0];
  		if (d.getElementById(id)) return;
  		js = d.createElement(s); js.id = id;
  		js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
  		fjs.parentNode.insertBefore(js, fjs);
  		}(document, 'script', 'facebook-jssdk'));</script>
		<script type="text/javascript">
		/** Load the Google Transliteration API */
		google.load("elements", "1", {
			packages: "transliteration"
		});
		var transliterationControl;
		function onLoad() {
			var options = {
				sourceLanguage: 'en',
				destinationLanguage: ['hi'],
				transliterationEnabled: true,
				shortcutKey: 'ctrl+g'
			};
			/** Create an instance on TransliterationControl with the required */
			/** options. */
			transliterationControl = new
			google.elements.transliteration.TransliterationControl(options);

			/** Enable transliteration in the textfields with the given ids. */
			var ids = [ "query" ]; /**YOU NEED TO PUT YOUR ID HERE */
			transliterationControl.makeTransliteratable(ids);

			/** Add the STATE_CHANGED event handler to correcly maintain the state */
			/** of the checkbox. */
			transliterationControl.addEventListener(

	google.elements.transliteration.TransliterationControl.EventType.STATE_CHANGED,
				transliterateStateChangeHandler);

			/** Add the SERVER_UNREACHABLE event handler to display an error message */
			/** if unable to reach the server. */
			transliterationControl.addEventListener(

	google.elements.transliteration.TransliterationControl.EventType.SERVER_UNREACHABLE,
				serverUnreachableHandler);

			/** Add the SERVER_REACHABLE event handler to remove the error message */
			/** once the server becomes reachable. */
			transliterationControl.addEventListener(

	google.elements.transliteration.TransliterationControl.EventType.SERVER_REACHABLE,
				serverReachableHandler);

			/** Set the checkbox to the correct state. */
			document.getElementById('hitrans').checked =
	transliterationControl.isTransliterationEnabled();
		}

		/** Handler for STATE_CHANGED event which makes sure checkbox status */
		/** reflects the transliteration enabled or disabled status. */
		function transliterateStateChangeHandler(e) {
			document.getElementById('hitrans').checked =
	e.transliterationEnabled;
		}

		/** Handler for checkbox's click event.  Calls toggleTransliteration to toggle */
		/** the transliteration state. */
		function checkboxClickHandler() {
			transliterationControl.toggleTransliteration();
		}

		// SERVER_UNREACHABLE event handler which displays the error message.
		function serverUnreachableHandler(e) {
			document.getElementById("errorDiv").innerHTML =
				"Transliteration server unreachable!";
		}

		// SERVER_UNREACHABLE event handler which clears the error message.
		function serverReachableHandler(e) {
			document.getElementById("errorDiv").innerHTML = "";
		}
		google.setOnLoadCallback(onLoad);
	</script>
	</body>
</html>


			
