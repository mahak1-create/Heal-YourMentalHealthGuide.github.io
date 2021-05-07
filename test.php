<?php

session_start();
if(!isset($_SESSION['username'])){
header('location:login.php');
}
$con =mysqli_connect('localhost','root');

mysqli_select_db($con,'quizdbase');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Heal-Your Mental Health Guide</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"> <span class="sr-only">(current)</span></a>
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
      
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      
    </form>
  </div>
</nav>
	<div class="container">
		
	<h1 class="text-center text-primary"></h1>
<h2 class="text-center text-success">HELLO, <?php echo $_SESSION['username'];?><br>Welcome to the Test<br>We are here to Help:)</h2>
<div class="  col-xl col-lg-8 m-auto d-black">
<div class="card">
	<h3 class=" card-header">Hey!<?php echo $_SESSION['username'];?><br>This Test is just for you,so don't worry-your results are completely anonymous.<br>First,you'll be asked to answer 15 questions designed to analyze your overall mental health.<br>Finally,your results will be displayed for you to review.<br>A reminder that these questions cannot diagnose on their own.Health Proffesionals need much more information about you to make the right diagnosis.</h3>
</div><br>
<form action="check.php" method="post">
<?php
for($i=1;$i<16;$i++){
$q ="select * from questions where qid = $i";
$query =mysqli_query($con,$q);

while ($rows =mysqli_fetch_array($query)) {
	?>
	<div class="card">
		<h4 class="card-header"><?php echo $rows['question'] ?></h4>

		<?php
       $q ="select * from answers where ans_id = $i";
      $query =mysqli_query($con,$q);

      while ($rows =mysqli_fetch_array($query)) {
	?>

	<div class="card-body">
		<input type="radio" name="quizcheck[<?php echo $rows['ans_id']; ?>]" value="<?php echo $rows['aid']; ?>">
		<?php echo $rows['answer']; ?>
	</div>
<?php
}
}
}
?>
 <input type="submit" name="submit" value="submit" class="btn btn-success m-auto d-block">
</form>
</div>
</div><br><br>



<div>
	<h5 class="text-center">Heal-Your Mental Health Guide</h5>
</div><br><br>
</div>
</body>
</html>