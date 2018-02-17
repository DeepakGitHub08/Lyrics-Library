
<html>
    <head>
        <title>Login</title>
		<link rel="stylesheet" href="css\login.css?version=51" >
    </head>
    <body>
		<center><h1><strong>Welcome.</strong> Please login.</h1></center>
        <a href="index.php" style="color: yellow"><strong>Click here to go back</strong></a><br/><br/>
		<div id="login">
        <center><form action="checklogin.php" method="POST">
		<fieldset>
           <p>Enter Username: <input type="text" name="username" required="required" /> </p>
           <p>Enter password: <input type="password" name="password" required="required" /> </p>
           <p><input type="submit" value="Login"/></p>
		</fieldset>
        </form></center>
	</div>
    </body>
</html>
