<?php
    date_default_timezone_set('Europe/Helsinki');
    $timestamp = date('H:i:s');
	echo $newDateTime = date('h:i:s A', strtotime($timestamp));
?>