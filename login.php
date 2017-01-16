<?php

	session_start();
	/*$novosti = file_get_contents('xmls/Admin.xml');
    $users = file_get_contents('xmls/Users.xml');
    if(strlen($novosti) != 0 && strlen($users)!=0)
    {
	 $xmlpodaci = simplexml_load_file('xmls/Admin.xml');
     $xmlpodaciusers = simplexml_load_file('xmls/Users.xml');*/
	 if(!isset($_POST["uname"]) || !isset($_POST["psw"]))
    {
        echo("<script>alert('Polja nisu unesena.')</script>");
        header('Location: index.php');
        session_destroy();
    }
        $veza = mysqli_connect( getenv('MYSQL_SERVICE_HOST'), "emina", "emina123", "flagshipphones");
        if (!$veza) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $users = $veza->query("select id,type, username, password from users where username='".$_POST["uname"]."'");
        
        if($users->num_rows >= 1) {
            foreach ($users as $u) {
                $user = $u;
            }
            $passwords = $veza->query("select password from passwords where id=".$user["id"]);
            foreach ($passwords as $adminadmin) {
                $password = $adminadmin;
            }
            
            if(md5($_POST["psw"]) == $password["password"] && $user["type"] == 1)
            {
                $_SESSION["admin"] = $_POST["uname"];
                $stavioadmin = 1;
                header("Location: index.php");   
            }
            else if (md5($_POST["psw"]) == $password["password"] && $user["type"] == 2){
                $_SESSION["user"] = $_POST["uname"];
                header("Location: index.php");  
            }
        }
        else {
            session_destroy();
            echo("<script>alert('Password i username se ne podudaraju.')</script>");
            header('Location: admin.php');
        }

    

?>