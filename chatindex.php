<?php

include("./config.php");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Heal-Your Chat Support</title>
	
	
		<link rel="stylesheet" type=" text/css" href="css/ourhealchat.css">


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script>
	

$(document).ready(function(e){

	function displaymessage(){


	$.ajax({
		url:'displaymessage.php',
		type:'POST',
		success:function(data){
			$("#displaymessage").html(data);

		}
	});
}
setInterval(function( ) {displaymessage();}, 1000);
$('#sendMessageBtn').click(function(e){
   var name = $("#user_name").val();
   var message = $("#message").val();

$("#myChatForm")[0].reset();


   $.ajax({

   url:'sendChat.php',
   type:'POST',
   data:{
   	     uname:name,
   	     umessage:message
       }

    });
  });
});
</script>

</head>
<body style="background-color: hsl(206,92%,94%) ">
	

<div class="container-fluid">
	<h3 class="text-center">Heal-Your Chat Support<b></h3>

	<div class="well" id="chatBox">

	<div id="displaymessage"></div>

	</div>
<form id="myChatForm">
	<input type="text" id="user_name" placeholder="Give yourself a Nickname"><br>
	<textarea name="message" id="message" placeholder="Tell us how've you been?" cols="30" rows="3"></textarea><br>
	<button type="button" class="btn btn-success" id="sendMessageBtn">Send</button>
</form>


</div>