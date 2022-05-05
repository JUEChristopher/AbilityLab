<?php 

$nom = substr($_SESSION['nom'], 0, 1);
?>

<div class="sidebar">
    <div class="logo-details">
        <i class="fa-solid fa-flask"></i>
        <span class="logo_name">AbilityLab</span>
    </div>
    <ul id="menu">
        <a href="<?= HTML_ROOT ?>/home"><i class="fa-solid fa-house"></i>Accueil</a>
        <a href="<?= HTML_ROOT ?>/home/profile"><i class="fa-solid fa-user"></i>Profil</a>
        <a href="<?= HTML_ROOT ?>/home/skill"><i class="fa-solid fa-book-bookmark"></i>Compétences</a>
        <a href="<?= HTML_ROOT ?>/home/knowledge"><i class="fa-solid fa-brain"></i>Savoirs</a>
        <a href="<?= HTML_ROOT ?>/home/indicator"><i class="fa-solid fa-magnifying-glass"></i>Indicateurs</a>
    </ul>
    <div id="profile-card">
        <div id="pc-infos">
            <p id="pc-name"><?= "{$_SESSION['prenom']} {$nom}." ?></p>
        </div>
        <a id="pc-logout" href="<?= HTML_ROOT ?>/logout">
            <i id="logout-icon" class="fa-solid fa-arrow-right-from-bracket"></i>
        </a>
    </div>
</div>