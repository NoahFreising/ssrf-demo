<?php
session_start();
if(isset($_POST['matrikelnr']) && isset($_POST['password'])) {
    $matrikelnr = $_POST['matrikelnr'];
    $password = $_POST['password'];
    if($matrikelnr == "123456" && $password=="ssrfmaster") {
        $_SESSION["matrikelnr"] = $matrikelnr;
        $_SESSION["logged_in"] = true;
        header("Location: index.php");
    } else {
        echo "Wrong username or password";
    }
}
?>
<html>
    <body>
        <h1>Login</h1>
        <form method="POST">
            <input type="text" name="matrikelnr" placeholder="Matrikelnr."/>
            <input type="password" name="password" placeholder="Passwort"/>
            <input type="submit" value="Login"/>
        </form>
    </body>
</html>