<?php session_start(); ?>




<!DOCTYPE html>
<html>

<head>
    
    <meta charset="utf-8" />
    <title>EcoSense | Accueil</title>
    <link rel="stylesheet" href="../css/navbar.css" />
    <link rel="icon" type="image/jpg" href="" />

</head>

<body style="background-color:rgb(241, 238, 233)">

    <div class="navbar">
        <img  class="ilog" src="../img/logo.png" alt="logo" />
        <h1  style="text-align:center; margin-top: 8px;"><strong>LES QUESTIONS FREQUENTES </strong></h1>

    </div>
        <ul>
            <li style="color:#53af57; text-align:left; font-size: 30px;padding-top: 30px;">
                <p>Comment me connecter à mon espace personnel?</p>
            </li>
            <p>Vos identifiants de connexion vous seront communiqués dans un délai de 3 jours suivant votre prise de fonction.</p>
            <li style="color:#53af57; text-align:left; font-size: 30px;padding-top: 30px;">
            <p>Comment accéder à ma fréquence cardiaque?</p>
            </li>
            <p>Vous pouvez accéder à votre fréquence cardiaque en temps réel sur votre montre et/ou en ligne sur le site en cliquant sur votre nom.</p>
            <li style="color:#53af57; text-align:left; font-size: 30px;padding-top: 30px;">
            <p>Comment nous contacter ?</p>
            </li>
            <p>Vous pouvez nous contacter en cliquant sur le lien "CONT@CT ECOSENSE" présent au bas de la page d'acceuil et de l'espace détente.</p>
        
        </ul>    
    
        <form id="login" action="faqtraitement.php" method="POST">

            <label style="color:#53af57; text-align:left; font-size: 30px;">D'autres questions?Contactez-nous!</label><br>
            <textarea id="message"  style="width: 50%;height: 200px;" placeholder="Votre message" name="message"></textarea><br>
            <input type="submit" name="me" id="formlogin" style="color:#53af57; text-align:left; font-size: 30px;" value="Envoyer">
        </form>
        <p style="color:#53af57; text-align:left; font-size: 30px;"><?php if(isset($_SESSION['envoie'])){echo $_SESSION['envoie'];} ?></p>

    

</body>

</html>
