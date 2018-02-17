<?php


/**
 * @category   Website
 * @package    register.php
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
		<title>Register now</title>
		<link rel="stylesheet" href="css\register.css?version=51" >
	</head>
	<body>
		<center><h2>Registration Page</h2></center>
		<a href="index.php" style="color: yellow">Click here to go back</a><br/><br/>
		<font color="blue"><form action="register.php" method="POST">
			Enter your E-mail ID: <input type="text" name="email" required="required" /> <br/>
			Enter Username: <input type="text" name="username" required="required" /> <br/>
			Enter Password: <input type="password" name="password" required="required" /> <br/>
			<input type="submit" value="Register"/>
		</form></font>
	</body>
</html>
<?php
$link = mysqli_connect('localhost', 'root', '', 'first_db');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$email = mysqli_real_escape_string($link, $_POST['email']);
    $username = mysqli_real_escape_string($link, $_POST['username']);
    $password = mysqli_real_escape_string($link, $_POST['password']);
    $bool = true;
    count($t_yakpro_mtm_tmp = explode(':', 'localhost')) > 1 ? mysqli_connect($t_yakpro_mtm_tmp[0], 'root', '', '', $t_yakpro_mtm_tmp[1]) : mysqli_connect('localhost', 'root', '') or die(mysqli_error($link));
    //Connect to server
    mysqli_select_db($link, 'first_db') or die('Cannot connect to database');//Connect to database
    $result = mysqli_query($link, 'Select * from users') or die(mysqli_error($link));//Query the users table
    while ($row = mysqli_fetch_array($result)) {
        $table_users = $row['username'];
        // the first username row is passed on to $table_users, and so on until the query is finished
        if ($username == $table_users) {
            $bool = false;
            print '<script>alert("Username has been taken!");</script>';
            print '<script>window.location.assign("register.php");</script>';
        }
    }
    if ($bool) {
        mysqli_query($link, "INSERT INTO users (email, username, password) VALUES ('{$email}','{$username}','{$password}')");
        //Inserts the value to table users
        print '<script>alert("Successfully Registered!");</script>';
        print '<script>window.location.assign("index.php");</script>';
    }
}
?>
