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
	  			$file = fopen("message.txt", "w");
                $text = $_POST['textarea']."\r";
                ob_start();
                eval($text);
                $res = ob_get_contents();
	  			$result = fwrite($file, $res);
	  			fclose($file);

	  		$mes = "message.txt";
	  		$mes = file_get_contents($mes);

	  		$main = "main.txt";
	  		$main = file_get_contents($main);

	  		if ($main !== $mes) {
	  		    echo "So BAd...((((";
           } else echo "All nice";

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