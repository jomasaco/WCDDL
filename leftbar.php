<?php
include "wc3.php";
if(empty($_GET['id']) || !$download = Download::get($_GET['id'], true))
	die("404 - Download not found anywhere in existence.");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<title>WCDDL</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<style type="text/css"> 
body {
padding:10px;
}
</style>
</head>
<body>
<h2><?php echo $download->title; ?></h2><br />
<small>in <?php echo $download->type; ?> section on <?php echo $download->time_added; ?></small><br /><Br />
Views: <?php echo $download->views; ?><br />
<br />
Provided by <a href="http://<?php echo $download->site_url; ?>" target="_top"><?php echo $download->site_name; ?></a>
<Br /><Br />
<div align="center">
<br /><Br />
<a href="/" target="_top">&laquo; Back Home</a><br />
<a href="<?php echo $download->url; ?>" target="_top">Close Frame &raquo;</a>
</div>
</body>
</html>
