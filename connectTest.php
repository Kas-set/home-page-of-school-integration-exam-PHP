<?php
session_start();

if(isset($_POST['submit'])){
    $nom = htmlspecialchars($_POST['nom']);
    $password = htmlspecialchars($_POST['password']);

    if($nom == 'moi' && $password == '1234'){
        $_SESSION['isLogin'] = true;
        $_SESSION['nom'] = $nom;

        header('Location: ./index.php');
    }else{
        echo"Identifiants incorrects" ;
     
        
    }
}

?>
<html>
    <form method="POST" action="#">
        <div>
            <input type="text"  placeholder="Entrer le nom" name='nom'>
        </div>
        <div>
            <input type="password" placeholder="Entrer le mot de passe" name='password'>
        </div>
        <div>
            <input type="submit" value="CONNECT" name='submit'>
        </div>
    </forpm>
</html>