<!DOCTYPE html>
<html>
<head>
  <?php print $head; ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  
<?php
	$is_frontp = false;
	if (drupal_get_path_alias($_SERVER['REQUEST_URI']) == '/') { $is_frontp = true; }
?>
  
  <?php if ($is_frontp) { ?>
  
	  <script src="//code.jquery.com/jquery.js"></script>
	  <script src="/js/jquery.maskedinput.min.js"></script>
	  
	  <!-- User styles -->
	  <link rel="stylesheet" href="/css/style.css">
	  <link rel="stylesheet" href="/css/common.css">
	  <link rel="stylesheet" href="/css/slider.css">

	  <!-- User Javascript -->
	  <script src="/js/bbs_grinovia.js"></script>
	  <script src="/js/slider.js"></script>
  
  <?php } else { ?>
  
	  <script src="//code.jquery.com/jquery.js"></script>
	  <script src="/js/jquery.maskedinput.min.js"></script>

	  <!-- User styles -->
	  <link rel="stylesheet" href="/css/style.css">
	  <link rel="stylesheet" href="/css/common.css">
	  
	  <!-- User Javascript -->
	  <script src="/js/bbs_grinovia.js"></script>
  
  <?php } ?>
</head>
<body>
	<?php print $page_top; ?>
	<?php print $page; ?>
	<?php print $page_bottom; ?>
</body>
</html>