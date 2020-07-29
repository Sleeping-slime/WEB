<?php
	file_put_contents('Thread_date/'.$_POST['nickname'], $_POST['comment']);
	header("Location: /AnonymousThread.php?id=".$_POST['nickname']);
?>