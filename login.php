<?php

	session_start();
	$novosti = file_get_contents('xmls/Admin.xml');
    $users = file_get_contents('xmls/Users.xml');
    if(strlen($novosti) != 0 && strlen($users)!=0)
    {
	 $xmlpodaci = simplexml_load_file('xmls/Admin.xml');
     $xmlpodaciusers = simplexml_load_file('xmls/Users.xml');
	 if(!isset($_POST["uname"]) || !isset($_POST["psw"]))
    {
        echo("<script>alert('Polja nisu unesena.')</script>");
        header('Location: index.php');
        session_destroy();
    }
    $stavioadmin = 0;
    if($_POST["uname"] == $xmlpodaci->username && md5($_POST["psw"]) == $xmlpodaci->password)
    {
        $_SESSION["admin"] = $_POST["uname"];
        $stavioadmin = 1;
        header("Location: index.php");   
        
    }
    if($stavioadmin == 0) {
        $nasao = 0;
        foreach($xmlpodaciusers->user as $user)
            {
            if($_POST["uname"] == $user->username && md5($_POST["psw"]) == $user->password)
            {
                $_SESSION["user"] = $_POST["uname"];
                $nasao = 1; 
                header("Location: index.php");  
                break;
                echo("<script>alert('Password i username se ne podudaraju.')</script>");
            }
            }
            if($nasao == 0 ) {
                    session_destroy();
                    echo("<script>alert('Password i username se ne podudaraju.')</script>");
                    header('Location: index.php');
                }
        }
}
    

?>