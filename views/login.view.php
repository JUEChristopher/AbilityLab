<title>Login</title>

<?php

if(isset($_POST['submit'])){
    $req = $db -> query("SELECT Identifiant_Etud, Nom_Etud, Prenom_Etud, `Option_BTS_Etud`, `Date_Naissance_Etud`, Mdp_Etud FROM etudiant WHERE Mail_Etud = :mail", [':mail' => $_POST['mail']]);
    $result = $req -> fetch();
    
    if(is_array($result) && password_verify($_POST['password'], $result['Mdp_Etud'])){
        $_SESSION['id'] = $result['Identifiant_Etud'];
        $_SESSION['nom'] = $result['Nom_Etud'];
        $_SESSION['prenom'] = $result['Prenom_Etud'];
        $_SESSION['role'] = 'student';
        header('Location:' . HTML_ROOT . '/home');
    }
    else{
        $erreur = "Votre identifiant ou mot de passe est incorrect !";
    }
}

?>

<div id="container">
    <div id="card">
        <h2 id="title">Connexion</h2>
        <form action="" method="POST">
            <div class="input">
                <label>E-mail</label>
                <input type="email" name="mail" placeholder="exemple@outlook.fr" required>
            </div>
            <div class="input">
                <label>Mot de passe</label>
                <input type="password" name="password" placeholder="1234" required>
            </div>
            <input id="submit" type="submit" name="submit" value="Se connecter">
        </form>
    </div>
</div>


