	<div class='row footer_wrapper'>
		Footer for the Page<br>
	</div>

	<!-- INCLUDING JS FILES -->
	<?php
		echo "<script src='/media/js/jquery-1.12.0.min.js'></script>";
		echo "<script src='/media/js/materialize.min.js'></script>";
		echo "<script src='/media/js/header.js'></script>";
		if(isset($js_files))
		{
			foreach($js_files as $each_js_file)
			{
				if($each_js_file != '')
				{
					$pos = strpos($each_js_file, 'http');
					if($pos === false)
					{
						echo "<script src='/media/js/".$each_js_file.".js'></script>";
					}
					else
					{
						echo "<script src='".$each_js_file."'></script>";
					}
				}
			}
		}
	?>
	<!-- INCLUDING JS FILES -->