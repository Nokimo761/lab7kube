<?php
	$index = 1;
	for($i = 0; $i <= 9999999; $i++)
	{
		$index += sqrt($index);
	}
	echo "Done!";

?>