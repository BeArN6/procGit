<?php
    require "db.php";
    //Register
    $data = $_POST;
    if( isset($data['to_register'])){
    	//Реєструємо
    	$errors = array();
    	if( trim($data['login']) == ""){
    		$errors[] = "Введіть логін";
    	}

    	if( trim($data['email']) == ""){
    		$errors[] = "Введіть email";
    	}

    	if( $data['password'] == ""){
    		$errors[] = "Введіть пароль";
    	}

    	if( $data['re-password'] != $data['password']){
    		$errors[] = "Паролі не сходяться";
    	}

    	if(R::count('users', "login = ?", array($data['login'])) > 0){
    		$errors[] = "Користувач з таким логіном вже існує";
    	}

    	if(R::count('users', "email = ?", array($data['email'])) > 0){
    		$errors[] = "Користувач з таким Email вже існує";
    	}

    	if( empty($errors) ){
    		//Все добре реєструємо
    		$user = R::dispense('users');
    		$user->login = $data['login'];
    		$user->email = $data['email'];
    		$user->password = password_hash($data['password'], PASSWORD_DEFAULT);
    		R::store($user);
    		echo '<span class="success">Ви успішно зареєструвались</span>';
    	} else{
    		echo '<span class="error">'.array_shift($errors).'</span>';
    	}
    }
    //Login
    if( isset($data['to-login'])){
    	$errors = array();
    	$user = R::findOne('users', "login = ?", array($data['login']));
    	if($user){
    		//Логін існує
    		if(password_verify($data['password'], $user->password)){
    			$_SESSION['logged_user'] = $user;
    		}
    		 else{
    		 	$errors[] = "Пароль введено неправильно";
    		 }
    	} else{
    		$errors[] = "Користувача з таким логіном не існує";
    	}

    	if( ! empty($errors)){
    		echo '<span class="error">'.array_shift($errors).'</span>';
    	}
    }
?>