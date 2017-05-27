<?php
$first_name = trim($_REQUEST['first_name']);
$last_name = trim($_REQUEST['last_name']);
$email = $_REQUEST['email'];
$facebook_url = $_REQUEST['facebook_url'];
$twitter_handle = $_REQUEST['twitter_handle'];
$twitter_url = 'http://www.twitter.com/';
$position = strpos($twitter_handle, "@");
if($position === false) {
	$twitter_url = $twitter_url . $twitter_handle;
} else {
	$twitter_url = $twitter_url . str_replace('@','' ,trim($twitter_handle));
}
$position = strpos($facebook_url, "facebook.com");
if($position === false) {
	$facebook_url = "http://www.facebook.com/".$facebook_url;
}


?>
<html>
 <head>
 <link href="../../css/phpMM.css" rel="stylesheet" type="text/css" />
 </head>
 <body>
 <div id="header"><h1>PHP & MySQL: The Missing Manual</h1></div>
 <div id="example">Example 3-1</div>
 <div id="content">
 <p>Here's a record of what information you submitted:</p>
 <p>
 Name: <?php echo $first_name .' '. $last_name; ?>;<br />
 E-Mail Address: <?php echo $email; ?><br />
 Facebook URL: <a href="<?php echo $facebook_url; ?>">Your facebook page</a> <br />
 Twitter Handle: <a href="<?php echo $twitter_url; ?>">Check out your Twitter feed</a><br />
 </p>
 </div>
 <div id="footer"></div>
 </body>
</html>