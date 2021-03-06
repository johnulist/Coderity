<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo $title_for_layout; ?> :: Coderity</title>

	<?php
		$css = array('Coderity.bootstrap.min',
					 'Coderity.plugins/metisMenu/metisMenu.min',
					 'Coderity.sb-admin-2',
					 'Coderity.coderity',
					 'Coderity./font-awesome-4.1.0/css/font-awesome.min');

		echo $this->Html->css($css);

		$js = array('Coderity.jquery',
					'Coderity.jquery-ui');

		echo $this->Html->script($js);
	?>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>