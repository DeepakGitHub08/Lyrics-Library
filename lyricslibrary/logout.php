<?php



/**
 * @category   Website
 * @package    logout.php
 * @author     coders
 * @copyright  1997-2005 The PHP Group
 * @license    http://www.php.net/license/3_0.txt  PHP License 3.0
 * @version    CVS: $Id:$
 * @link       http://pear.php.net/package/PackageName
 * @see        NetOther, Net_Sample::Net_Sample()
 * @since      File available since Release 1.2.0
 *
 */


    session_start();/** session starts   */
    session_destroy();/** session ends */
    header("location:index.php");
?>
