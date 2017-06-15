<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>A-Level</title>
	
	<style>#container {width:100%; text-align:center;}</style>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
	  <?php 
	  	// if (empty($_POST['submit'])) {}
	  	if (empty($_POST['textarea'])) {}
	  		else{
	  			$file = "message.txt";
	  			$file = fopen($file, "a");
//	  			$text = eval($_POST['textarea'])."\n";
                $text = $_POST['textarea']."\n";
                eval($text);
	  			$result = fwrite($file, $text);
	  			unset($result);
	  		}

	  		$mes = "main.txt";
	  		$mes = fopen($mes, "r");
	  ?>
      <h2>Числа для проверки: Fizz- 2; Buzz - 5; Общая длина - 45</h2>
  <form method="post">
	<div id="container">
		<textarea name="textarea" type="textarea" cols="100" rows="20"></textarea>
		<input type="submit" name="submit" class="btn btn-success"> 
  	</div>
  </form>
   

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>