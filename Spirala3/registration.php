<?php
if(isset($_POST['uname'],$_POST['email'], $_POST['psw'])) {
        $sve = file_get_contents('xmls/Users.xml');
        if($sve[strlen($sve)-2] == '>') $sve = substr($sve,0,strlen($sve)-1);
       
        if(strlen($sve)==0)
        {
            $sve ="<?xml version='1.0' encoding='utf-8'?><users></users>";
            file_put_contents('xmls/Users.xml', $sve);
        }
        $nasao = 0;
        foreach($sve->user as $user)
        {
        if($_POST["uname"] == $user->username && md5($_POST["psw"]) == $user->password)
        {
            $_SESSION["user"] = $_POST["uname"];
            header("Location: index.php");  
            $nasao = 1; 
        }
        }
        if($nasao == 1) {
            echo("<script>alert('Vec postoji korisnik sa istim username-om.')</script>");
            header('Location: index.php');
            session_destroy();
        }
        $brojSpecifikacija = 0;
        $ucitanixml = simplexml_load_file('xmls/Users.xml');
        foreach($ucitanixml as $x)
        {
            $brojSpecifikacija = $x->id+1;
        }
        $password = md5($_POST['psw']);
        $specs = "<user><id>".htmlspecialchars($brojSpecifikacija)."</id><username>" .htmlspecialchars($_POST['uname'] ). "</username><password>".htmlspecialchars($password)."</password><email>".htmlspecialchars($_POST['email'])."</email></user>";
        $sve = substr($sve,0,strlen($sve)-8).$specs."</users>";
        
        file_put_contents("xmls/Users.xml", $sve);
        
        header('Location: index.php');
    }
        ?>