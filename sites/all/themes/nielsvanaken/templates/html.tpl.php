<!DOCTYPE HTML>
<html lang="<?php print ($language->language); ?>" dir="<?php print $language->dir; ?>">
<head>
	<meta charset="UTF-8" />
	<!--
	Design en realisatie door:
		10uur communicatie & creatie
		www.10uur.nl
	-->
	<?php if ($is_mobile) { ?>
	<meta name="HandheldFriendly" content="True" />
	<meta name="MobileOptimized" content="320" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="cleartype" content="on" />
	<?php } ?>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1" />
	<?php print $head; ?>
	<title><?php print $head_title; ?></title>

    <!-- Google Webfonts -->
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,700|Bitter:400,700' rel='stylesheet' type='text/css'>

	<?php print $styles; ?>

	<!--[if(lte IE 8)]>
		<link href="<?php print $inclpath; ?>/css/style-normal.css" rel="stylesheet" type="text/css" media="screen">
		<link href="<?php print $inclpath; ?>/css/fix-ie.css" rel="stylesheet" type="text/css" media="screen">
	<![endif]-->


	<?php if (!$is_mobile) { ?>
		<?php print $scripts; ?>
	<?php } ?>

</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
	<?php print $page_top; ?>
	<?php print $page; ?>
	<?php print $page_bottom; ?>
</body>
</html>
