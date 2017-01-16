<?php
if(isset($_POST['uname'],$_POST['email'], $_POST['psw'])) {
        /*$sve = file_get_contents('xmls/Users.xml');
        if($sve[strlen($sve)-2] == '>') $sve = substr($sve,0,strlen($sve)-1);
       
        if(strlen($sve)==0)
        {
            $sve ="<?xml version='1.0' encoding='utf-8'?><users></users>";
            file_put_contents('xmls/Users.xml', $sve);
        }*/
        $veza = new PDO('mysql:host='. getenv('MYSQL_SERVICE_HOST') .';port=3306;dbname=flagshipphones', 'emina', 'emina123');
        $veza->exec("set names utf8");
        if (!$veza) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $rezultat=$veza->query("select * from users where username=".$_POST["uname"]);
        if ($rezultat->num_rows < 1) {
                $username = $_POST["uname"];
                $password = $_POST["psw"];
                $passwordpassword = md5($password);
                $veza->query("insert into users set type = 2, username = '".$username."', password = '".$password."'");
                $veza->query("insert into passwords set password = '".$passwordpassword."'");
        }
        else {
            echo("<script>alert('Vec postoji korisnik sa istim username-om.')</script>");
            header('Location: index.php');
            session_destroy();
        }
        
        header('Location: index.php');
    }
        ?>