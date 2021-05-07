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
<body>
<div class="container-fluid">
	<h3 class="text-center">HEAL-Your Chat Support</h3>

	<div class="well" id="chatBox">

	

 
	
		
	       <p>
	       	<span style="color:red;">Mahak:</span>
	       	<span style=" color:blue;">hello</span>
	       	<span style="float: right;">2:15</span>
	       </p>

	</div>
<form id="myChatForm">
	<input type="text" id="user_name" placeholder="Give yourself a Nickname"><br>
	<textarea name="message" id="message" placeholder="Tell us how've you been?" cols="30" rows="3"></textarea><br>
	<button type="button" class="btn btn-success" id="sendMessageBtn">Send</button>
</form>


</div>