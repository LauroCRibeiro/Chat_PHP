<?php 
include "db.php";
 ?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Mukta+Vaani" rel="stylesheet"> 

	<script type="text/javascript">
	function ajax(){
		var req = new XMLHttpRequest();
		req.onreadystatechange = function(){
			if(req.readyState == 4 && req.status == 200){
				document.getElementById('chat').innerHTML = req.responseText;
			}
		}

		req.open('GET', 'chat.php', true);
		req.send();
	}

	setInterval(function(){ajax();}, 1000);

	</script>


	<title>Lauro Ribeiro PHP Chat</title>

</head>
<!--this ONLOAD loads Ajax once it starts, with no one second waiting for it -->
<body onload="ajax();">

<div id="content">
	<div id="box-chat">
		<div id="chat">
		
		<!-- This place loads the chat -->

		</div>
	</div>

	<form method="POST" action="index.php">
		<input type="text" name="name" placeholder="Fill up your name">
		<textarea name="message" placeholder="Type a message"></textarea>
		<input type="submit" name="send" value="SEND">
	</form>

	<?php



	if(isset($_POST['send'])){
		$name = $_POST['name'];
		$message = $_POST['message'];
		$search = "INSERT INTO tb_chat (name, message) VALUES ('$name', '$message')";
		$execute = $con->query($search);
		if($execute){
			echo "<embed loop='false' src='beep.mp3' hidden='true' autoplay='true'>";
		}
	}

	?>

</div>

</body>
</html>