<?php
if (date_default_timezone_get()) {
	print 'date_default_timezone_set: ' . date_default_timezone_get() . "\n";
} else {
	print 'no date_default_timezone_set retrievable' . "\n";
}
if (ini_get('date.timezone')) {
	print 'date.timezone: ' . ini_get('date.timezone') . "\n";
} else {
	print 'no date.timezone set in php.ini' . "\n";
}
?>
