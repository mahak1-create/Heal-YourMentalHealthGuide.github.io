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
      
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<style type="text/css">
	.animateuse{
			animation: leelaanimate 0.5s infinite;
		}

@keyframes leelaanimate{
			0% { color: red },
			10% { color: yellow },
			20%{ color: blue }
			40% {color: green },
			50% { color: pink }
			60% { color: orange },
			80% {  color: black },
			100% {  color: brown }
		}
</style>

   </head>
   <body>
     <div class="container text-center" >
     	<br><br>
    	<h1 class="text-center text-success text-uppercase animateuse" >Here is your Report-<?php echo $_SESSION['username'];?></h1>
    	<br><br><br><br>
      <table class="table text-center table-bordered table-hover">
      	<tr>
      		<th colspan="2" class="bg-dark"> <h1 class="text-white">~Analysis~ </h1></th>
      		
      	</tr>
      	<tr>
		      	<td>
		      	
		      	</td>

	         <?php


if(isset($_POST['submit'])){
	if(!empty($_POST['quizcheck'])){
	$count =count($_POST['quizcheck']);
	echo "Hey there,out of 15 you have answered : " .$count.  "-questions.";
	$result=0;
	$i=1;
	$selected=$_POST['quizcheck'];
	
	$q = "select * from questions";
 $query = mysqli_query($con,$q);
 while($rows = mysqli_fetch_array($query)){
 	
$checked = $rows['ans_id'] == $selected[$i];
if($checked){
	$result++;

 }
 $i++;
}



echo"<br>Your Depression Risk Level on the Scale of 15 is:".$result."-Score less than 5 or equal to 5 
	indicate that you have none,or few symptoms of depression or anxiety.if you notice that your symptoms are
	not improving,you may want to bring them up with a mental health professional or someone who is supporting 
	you.Scores that exceeds  5 but are less than 9 are symptoms of mild depression,while your symptoms are not
	likely having a major impact on your life,it is important to monitor them.These results do not mean that you have
	depression,but it may be a time to start a conversation with a mental health professional.Scores above 10 can mean that you may be 
	experincing symptoms of moderatly severe depression.living with these symptoms is causing difficulty managing relationships
	and even the tasks of everyday life.These results do not mean that you have depression, but we would recommend 
	you start a conversation with a mental health professional.";
}

}
$name=$_SESSION['username'];
$finalresult="insert into user(name,totalques,answerscorrect)values('$name','15
','$result')";
$queryresult=mysqli_query($con,$finalresult);
?>
 </table>

      	<a href="logout.php" class="btn btn-success"> LOGOUT </a>
      </div>
   </body>
</html>

