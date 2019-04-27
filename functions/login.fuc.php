<?php

if(isset($_POST['signIn'])){
	require_once('../config/db.php');

	//get post parameters 
    $username = $_POST['username'];
    $role = $_POST['role'];
    $password = $_POST['password'];

    //check user type, then set coresponding sql query
    if($role == 1){
    	$query = 'SELECT user_id, user_password FROM `users` WHERE 	user_login = ?';  
    }else{
    	$query = 'SELECT * FROM `companies` WHERE 	company_login = ?';  
    }
    if($stmt = mysqli_prepare($dbc, $query)){

        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        /* bind result variables */
    	mysqli_stmt_bind_result($stmt, $returnedPass, $id);
	    /* fetch value */
	    mysqli_stmt_fetch($stmt);

	    if($returnedPass == $password){
	        session_start();
            if($role == 1){
                $_SESSION["role"] = "user";
            }else{
                $_SESSION["role"] = "company";
            }
            $_SESSION["id"] = $id;
    		header("Location:../index.php");
	    }else{
	    	header("Location:../index.php?wrong=1");
	    }

    }  


}

?>