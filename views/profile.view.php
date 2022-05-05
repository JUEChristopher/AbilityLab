<title>AbilityLab | Profil</title>

<?php

$req = $db -> query("SELECT Nom_Etud, Prenom_Etud, `Option_BTS_Etud`, Mail_Etud, `Date_Naissance_Etud` FROM etudiant WHERE Identifiant_Etud = {$_SESSION['id']}");
$result = $req -> fetch();

$result[4] = New DateTime($result[4]);
$result[4] = date_format($result[4], "d.m.Y");

?>


<h1>Profil</h1>

<div id="profile-container">
    <div class="input">
        <label>Nom</label>
        <input readonly type="text" value="<?php if(isset($result[0])){
            echo($result[0]);
        } ?>">
    </div>
    <div class="input">
        <label>Prénom</label>
        <input readonly type="text" value="<?php if(isset($result[1])){
            echo($result[1]);
        } ?>">
    </div>
    <div class="input">
        <label>Option</label>
        <input readonly type="text" value="<?php if(isset($result[2])){
            echo($result[2]);
        } ?>">
    </div>
    <div class="input">
        <label>Date de naissance</label>
        <input readonly type="text" value="<?php if(isset($result[4])){
            echo($result[4]);
        } ?>">
    </div>
    <div class="input profile-mail">
        <label>E-mail</label>
        <input readonly type="text" value="<?php if(isset($result[3])){
            echo($result[3]);
        } ?>">
    </div>
    <a href="">Nouveau Mot de passe</a>
</div>