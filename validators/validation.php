<?php 


    if (isset($_POST['submit'])) {
        
        $errors = [];

        if (trim($_POST['name']) == '') {
        $errors[] = 'Enter Login!';
        }
        if (trim($_POST['email']) == '') {
        $errors[] = 'Enter email!';
        }
        if (trim($_POST['password']) == '') {
        $errors[] = 'Enter Password!';
        }
        if(empty($errors)){
        // Всё хорошо, регестрируем
            require_once 'models/CreateUser.php';
            header('location: /index.php?p=login');
        }else 
        {
            echo '<div style="color: red;">'.array_shift($errors).'</div>';
        }  
    }

            if (isset($_POST['loginsubmit'])) {
        
        $errors = [];

        if (trim($_POST['loginname']) == '') {
        $errors[] = 'Enter your login or email!';
        }
        if (trim($_POST['loginpassword']) == '') {
        $errors[] = 'Enter Password!';
        }
        elseif (empty($errors)) {
            // Всё хорошо, входим
            require_once 'models/LoginUser.php';
            header('location: /index.php?p=login');
        }
}
 ?>

