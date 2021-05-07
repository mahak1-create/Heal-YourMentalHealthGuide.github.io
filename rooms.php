<?php
$roomname= $_GET['roomname'];

include 'db_connect.php';

$sql="SELECT * FROM `rooms` WHERE roomname='$roomname'";
$result =mysqli_query($conn,$sql);
if($result)
{
if(mysqli_num_rows($result)==0)
{
   $message="this room does not exist,try creating a new one.";
   	echo '<script language="javascript">';
  	echo 'alert("'.$message.'");';
   	echo 'window.location="http://localhost/ourwebsite/ ";';
	echo '</script>';
}

}

else
{
	echo "error:". mysqli_error($conn);
}
?>
 <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link href="css/product.css" rel="stylesheet">
<style>
body {
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
}

.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
.anyClass {
	height: 350px;
	overflow-y: scroll; 
}

</style>
</head>
<body><nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Heal-Your Mental Health Guide</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"> <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      
    
  </div>
</div>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      
    </form>
  </div>
</nav>

<h2>Chat Messages-<?php echo $roomname; ?></h2>

<div class="container">
	<div class="anyClass">
  <img src="images/cancover.png" alt="Avatar" style="width:100%;">
  <p>Hello,How are you today?</p>
  
</div>
</div>


<input type="text" class="form-control" name="usermsg" placeholder="Add message"><br>
<button class="btn btn-success" name="submitmsg" id="submitmsg">Send</button>

<script src="https://code.jquery.com/jquery-3.3.1.slim.js" integrity="sha256-fNXJFIlca05BIO2Y5zh1xrShK3ME+/lYZ0j+ChxX2DA=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>


<script type="text/javascript">
	

	$("#submitmsg").click(function()
	{
		var clientmsg= $("#usermsg").val();
	
  $.post("postmsg.php", {text: clientmsg, room:'<?php echo 
  	$roomname ?>',ip:'<?php echo $_SERVER['REMOTE_ADDR'] ?>'},
  function(data,status){
  	document.getElementsByClassName('anyClass')[0].innerHTML = data;
 }
 );
  return false;
	}
	);
</script>
    
</body>
</html>
