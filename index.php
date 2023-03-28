<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./assets/stylesheets.css">
	<title>Chat - By Nicolas</title>
	<script type="text/javascript" src="jquery-1.2.6.pack.js"></script>
	<script type="text/javascript">  
	
	function update()
	{
		$.post("server.php", {}, function(data){ $("#screen").val(data);});  
	
		setTimeout('update()', 1000);
	}
	
	$(document).ready(
	
	function() 
		{
		update();
	
		$("#button").click(    
		function() 
		{         
		$.post("server.php", 
		{ message: $("#message").val()},
		function(data){ 
		$("#screen").val(data); 
		$("#message").val("");
		}
		);
		}
		);
		});
	
	
	</script>
</head>
<body>
	<div class="chat-container">
		<div class="chat-header">
			<h2>Chat</h2>
		</div>
		<div class="chat-messages">
			<textarea id="screen" cols="40" rows="40"> </textarea> <br>  
		</div>
		<div class="chat-input">
			<input type="text" placeholder="Pseudo">
			<input type="text" placeholder="Mettez un message à envoyer">
			<button id="button" type="submit">Envoyez</button>
		</div>
	</div>
</body>
</html>
