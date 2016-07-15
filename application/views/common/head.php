<!DOCTYPE html>
<html lang="en">

<head>
	<title><?php echo $page_title; ?></title>
	<?php if(!is_null($meta_info) && !empty($meta_info)){echo $meta_info;} ?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<!-- INCLUDING CSS FILES -->
		<?php
			echo "<link href='/media/css/materialize.min.css' rel='stylesheet'>";
			echo "<link href='/media/css/common.css' rel='stylesheet'>";
			echo "<link href='/media/css/header.css' rel='stylesheet'>";
			if(isset($css_files))
			{
				foreach($css_files as $each_css_file)
				{
					if($each_css_file != '')
					{
						$pos = strpos($each_css_file, 'http');
						if($pos === false)
						{
							echo "<link href='/media/css/".$each_css_file.".css' rel='stylesheet'>";
						}
						else
						{
							echo "<link href='".$each_css_file."' rel='stylesheet'>";
						}

					}
				}
			}
		?>
	<!-- INCLUDING CSS FILES -->
</head>

<body>