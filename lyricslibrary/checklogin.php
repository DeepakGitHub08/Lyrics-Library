
<?php




/**
 * @category   Website
 * @package    checklogin.php
 * @author     coders
 * @copyright  1997-2005 The PHP Group
 * @license    http://www.php.net/license/3_0.txt  PHP License 3.0
 * @version    CVS: $Id:$
 * @link       http://pear.php.net/package/PackageName
 * @see        NetOther, Net_Sample::Net_Sample()
 * @since      File available since Release 1.2.0
 *
 */

	$link = mysqli_connect('localhost', 'root', '', 'first_db');
	session_start();
	$username = mysqli_real_escape_string($link, $_POST['username']);/** gets username sent over search form*/
	$password = mysqli_real_escape_string($link, $_POST['password']);/** gets password sent over search form*/
	mysqli_select_db($link, 'first_db') or die('Cannot connect to database');/** Connect to database */
	$query = mysqli_query($link, "SELECT * from users WHERE username='$username'") or die(mysqli_error($link));
	$exists = mysqli_num_rows($query); /** Checks if username exists */
	$table_users = "";
	$table_password = ""; 
	if($exists > 0)/** if username exists */
	{
		while($row = mysqli_fetch_assoc($query)) /** display all rows from query */
 		{
			$table_users = $row['username']; /** gets username sent over search form*/
			$table_password = $row['password']; /** gets passwords  sent over search form*/
		}
		if(($username == $table_users) && ($password == $table_password)) // checks if there are any matching fields
		{
				if($password == $table_password)
				{
					$_SESSION['user'] = $username; 
					header("location: home.php"); /**  redirects the user to the authenticated home page */
				}
				
		}
		else
		{
			Print '<script>alert("Incorrect Username or Password!");</script>'; 
			Print '<script>window.location.assign("login.php");</script>'; // redirects to login.php
		}
	}
	else
	{
		Print '<script>alert("Incorrect Username or Password!");</script>'; 
		Print '<script>window.location.assign("login.php");</script>'; // redirects to login.php
	}
?>
