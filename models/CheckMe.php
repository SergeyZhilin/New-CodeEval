<?php 

    require_once 'libs/db.php';

          if (!empty($_POST['submit'])) {}
          if (empty($_POST['textarea'])) {
            $resultone = "Hi! I dont get your code. Lets go back and insert your code ;)";
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
	  		    $resultone = "Something wrong, check your code ((((";
           } else $resultone = "All nice.... ))))";
         }

         $_POST = [];
         
?>