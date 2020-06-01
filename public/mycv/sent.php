<?php
        $message = $_POST['message'];
		$to = 'arevyan246@gmail.com';
		$subject = "Text";
		$message = "Hello, Harutyun";
		$headers = 'tiko.hayrapetyan@fab.nu';
		mail($to, $subject, $message, $headers);
 ?>
