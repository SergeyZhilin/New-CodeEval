<?php 

    require_once 'libs/db.php';

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