<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
 
  
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
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h2>This Cognitive Test is a proactive step to gauge your mental health.Instant Results.No-one but you have the access to your results,so  don't hold back!</h2>
    
  </div>
</div>


	<div class="container">
		<br><h1 class="text-center text-success">Please Log in/Sign up to take the Test
		</h1><br>
		<div class="row">
			<div class="col-lg-6">
				<div class="card">
				<h2 class="text-center card-header">Log in</h2>
				<form action="validations.php" method="post">
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="user" class="form-control">
					</div>
						<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control">
					</div>

                <button type ="submit"class="btn btn-primary">LOG IN</button>
</form>
</div>
</div>


<div class="col-lg-6">
	<div class="card">
				<h2 class="text-center card-header">Sign up</h2>
				<form action="registration.php" method="post">
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="user" class="form-control">
					</div>
				    <div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control">
					</div>

               <button type="submit" class= "btn btn-primary">SIGN UP</button>
					
				</form>
				</div>
			</div>
			
		</div>
		</div>

</body>
		

</html>