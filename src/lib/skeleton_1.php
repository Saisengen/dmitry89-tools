<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "//www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <title><?php echo $title; ?> &mdash; Tool Labs</title>
    <meta charset="utf-8" />
    <meta name="title" content="<?php echo $title; ?> &mdash; Tool Labs" />
    <meta name="copyright" content="Creative Commons Attribution-Share Alike 3.0" />
    <meta name="robots" content="noindex, nofollow" />
    <link rel="StyleSheet" href="//admin.toolforge.org/assets/style.css" type="text/css" media="screen" />
    <link rel="StyleSheet" href="//tools.wmflabs.org/dibot/style.css" type="text/css" media="screen" />
    <!--[if lt IE 7]>
    <style media="screen" type="text/css">
    .col1 {
      width:100%;
    }
    </style>
    <![endif]-->
	<?php if ($slider) 
	echo $slider; ?>
	<style>
		body {
			overflow: auto;
		}
.powered {font-size: x-small;}
		.feedback {font-size: small;}
		a.redlink{
		font-size: small;
        color: #CC3300;
		}
		a.redlink:visited {
        color: #993300;
		}
		a.redlink:active {
        color: #996699;
		}
		.colmask .col1 {
		  overflow: auto;
		}
    </style>
     	<script src="//admin.toolforge.org/assets/jquery.js"></script>
	<script src="//admin.toolforge.org/assets/jquery.metadata.js"></script>
	<script src="//admin.toolforge.org/assets/jquery.tablesorter.min.js"></script>
	<script src="//admin.toolforge.org/assets/tablesorter.js"></script>
    <script type="text/javascript">
      $(document).ready(function() 
          { 
            $(".tablesorter").tablesorter({
                sortList: [[0,0]],
                // initialize zebra striping of the table
                widgets: ["zebra"],
                // change the default striping class names
                // updated in v2.1 to use widgetOptions.zebra = ["even", "odd"]
                // widgetZebra: { css: [ "normal-row", "alt-row" ] } still works
                widgetOptions : {
                  zebra : [ "normal-row", "alt-row" ]
                }
              });
          } 
      );   
    </script>
  </head>
    <?php
	if ($slider) {
	echo '<body onload="slider('."'slider'".',0)">';
	}
	else
	{
	echo '<body>';
	}	
	?>
    <div class="colmask leftmenu">
      <div class="colright">
        <div class="col1wrap">
          <div class="col1">
			<h2><?php echo $title; ?></h2>