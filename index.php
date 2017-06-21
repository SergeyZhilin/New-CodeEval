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
          if (!empty($_POST['submit'])) {}
          if (empty($_POST['textarea'])) {
            echo "<h1><font color='blue'><center>Hi! Lets go check your code ;)</center></font></h1>";
          } else {

	  			$file = fopen("message.txt", "w");
                $text = $_POST['textarea'];
                ob_start();
                eval($text);

                $res = ob_get_contents();
                $clean = ob_end_clean();
                
	  			$result = fwrite($file, $res);
          unset($result);

	  			fclose($file);
        

	  		$mes = "message.txt";
	  		$mes = file_get_contents($mes);

	  		$main = "main.txt";
	  		$main = file_get_contents($main);

	  		if ($main !== $mes) {
	  		    echo "<h1><font color='red'><center>Something wrong, check your code ((((</center></font></h1>";
           } else echo "<h1><font color='green'><center>All nice.... ))))</center></font></h1>";
         }

         $_POST = [];
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