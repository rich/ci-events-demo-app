<?php

class Thing {
	function a_handler0() {
		echo "Hello from a_handler0<br>";
		echo "<br><br>";
	}

	function a_handler1($args) {
		echo "Hello from a_handler1<br>";
		echo "The argument passed to this handler are as follows:<br>";
		print_r($args);
		echo "<br><br>";
	}

	function a_handler2($args, $a_string) {
		echo "Hello from a_handler3<br>";
		echo "The optional argument from the config/events.php file is \"{$a_string}\"<br>";
		echo "The argument passed to this handler are as follows:<br>";
		print_r($args);
		echo "<br><br>";
	}

	function a_handler3($args, $a_string, $event_name) {
		echo "Hello from a_handler3<br>";
		echo "The event name is \"{$event_name}\"<br>";
		echo "The optional argument from the config/events.php file is \"{$a_string}\"<br>";
		echo "The argument passed to this handler are as follows:<br>";
		print_r($args);
		echo "<br><br>";
	}
}

