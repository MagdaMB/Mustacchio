<?php
    require_once "connect.php";

    $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

    if ($polaczenie->connect_errno!=0) {
        echo "Error:".$polaczenie->connect_errno;
    } else {
        $login = $_POST["login"];
        $password = $_POST["password"];
                
        $sql = "SELECT * FROM uzytkownicy WHERE user='$login' AND pass='$password'";

        if($rezultat = @$polaczenie->query($sql)) {
            $ilu_userow = $rezultat->num_rows;
            if($ilu_userow>0) {
                $wiersz = $rezultat->fetch_assoc();
                $user=$wiersz['user'];

                $rezultat->close();

                header('Location: myAccount.php');

                } else {

                }
        }
                $polaczenie->close();
    }    
?>