<?php



/**
 * @category   Website
 * @package    search.php
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
    mysqli_connect("localhost", "root", "", 'first_db') or die("Error connecting to database: ".mysqli_error($link));
	mysqli_set_charset($link, 'utf8');
    /**
    *    localhost - it's location of the mysql server, usually localhost
    *    root - your username
    *   third is your password
    *     
    *    if connection fails it will stop loading the page and display an error
    */
     
    mysqli_select_db($link, "first_db") or die(mysqli_error($link));
    /* first_db is the name of database we've created */
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Search results</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="css\search.css"/>
</head>
<body>
<?php
    $query = $_GET['query']; 
    /** gets value sent over search form */
     
    $min_length = 3;
    // you can set minimum length of the query if you want
     
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        $query = mysqli_real_escape_string($link, $query);
        // makes sure nobody uses SQL injection
         
        $raw_results = mysqli_query($link, "SELECT * FROM lyrics
            WHERE (`Title` LIKE '%".$query."%') OR (`Singer` LIKE '%".$query."%')") or die(mysqli_error($link));
             
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // lyrics is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
			echo "Search Results"."<br>";
             
            while($results = mysqli_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             
				echo '<a href="output.php?id='.$results['id'].'">'.$results['Title'].'</a>'."<br>";
				
            }
             
        }
        else{ // if there is no matching rows do following
            echo "No results";
        }
         
    }
    else{ // if query length is less than minimum
        echo "Minimum length is ".$min_length;
    }
?>
</body>
</html>
