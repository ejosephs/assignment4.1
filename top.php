<!DOCTYPE html>
<html lang="en">
<head>
<title>Game of Thrones Restaurant</title>
<meta charset="utf-8">
<meta name="author" content="Erica Josephson">
<meta name="description" content="Feast Yourself">

<meta name="viewport" content="width=device-width, initial-scale=1">

<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/sin/trunk/html5.js"></script>
<![endif]-->
	
<link rel="stylesheet" 
      href="mystyle.css" 
      type="text/css" 
      media="screen">
<?php
if($_SERVER['HTTPS']) {
    $domain = "https://www.uvm.edu";
}else{
    $domain = "http://www.uvm.edu";
}

$server = htmlentities($_SERVER['SERVER_NAME'], ENT_QUOTES, "UTF-8");
$domain .= $server;
$phpSelf = htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8");
$path_parts = pathinfo($phpSelf);
$basePath = $domain . $path_parts['dirname'] . "/";

if ($debug){
    print "<p>Domain". $domain;
    print "<p>php Self". $phpSelf;
    print "<p>basePath". $basePath;
    print "<p>Path Parts<pre>";
    print_r($path_parts);
    print "</pre>";
}

require_once('lib/security.php');
?>
</head>

<?php
print '<body id="' . $path_parts['filename'] . '">';

include ("header.php");
include ("nav.php");
?>
