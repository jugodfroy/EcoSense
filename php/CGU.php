<?php
session_start();
if (!isset($_SESSION['user_first_name'])) { //if login in session is not set
    header("Location: ../index.php");
}
?>
<?php

include 'config.php';

if (isset($_GET['lang']) && !empty($_GET['lang'])) {
    if (file_exists('lang/' . $_GET['lang'] . '.php'))
        require_once('lang/' . htmlentities($_GET['lang']) . '.php');
    else
        require_once('../lang/fr.php');
} /*else if (file_exists('lang/' . $_SERVEUR['HTTP_ACCEPT_LANGUAGE'] . '.php')) {
    require_once('lang/' . htmlentities($_SERVEUR['HTTP_ACCEPT_LANGUAGE']) . '.php');
}*/ else {
    require_once('../lang/fr.php');
}

if ($_GET) {
    $_GET['lang'] = $_GET['lang'];


    /*if (!empty($num) and !empty($destination)) {
        $db->exec("INSERT INTO table_base(num,destination) VALUES ('$num','$destination')");
    } else echo "<strong>Un ou plusieurs champs n'ont pas été renseignés. Réessayez en remplissant l'entièreté du formulaire.</strong>";*/
}


?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>EcoSense | Accueil</title>
    <link rel="stylesheet" href="../css/profile.css" />
    <link rel="stylesheet" href="../css/navbar.css" />

    <link rel="icon" type="image/jpg" href="" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />




</head>

<body>


    <div class="navbar">
        <img class="ilog" src="../img/logo.png" alt="logo" />
        <a href="home.php"> <img class="ht" src="../img/heart.png" width="10%" /></a>
        <a class="home" href="home.php">Accueil</a>
        <?php
        if ($_SESSION['role'] == 'user') {
            echo '      
                <a class="name" href="profile.php">' . $_SESSION['user_first_name'] . '</a>
                ';
        }

        if ($_SESSION['role'] == 'admin') {
            echo '      
                <a class="home" href="registration.php">Administration</a>
                ';
        }
        ?>
        <a href="logout.php" class="home">Déconnecter</a>
    </div>

    <pre>
  <div style="background-color : white">

    <p style="text-align: center; color:#53af57; font-size: 60px;">Conditions générales d'utilisation</p>
    En vigueur au 13/12/2021
    Les présentes conditions générales d'utilisation (dites « CGU ») ont pour objet l'encadrement juridique
    des modalités de mise à disposition du site et des services par ECOSENSE et de définir les 
    conditions d’accès et d’utilisation des services par « l'Utilisateur ».
    Les présentes CGU sont accessibles sur le site à la rubrique «CGU».
    Toute inscription ou utilisation du site implique l'acceptation sans aucune réserve ni restriction des 
    présentes CGU par l’utilisateur. Lors de l'inscription sur le site via le Formulaire d’inscription, chaque 
    utilisateur accepte expressément les présentes CGU en cochant la case précédant le texte suivant : « 
    Je reconnais avoir lu et compris les CGU et je les accepte ».
    En cas de non-acceptation des CGU stipulées dans le présent contrat, l'Utilisateur se doit de renoncer
    à l'accès des services proposés par le site.
    www.ecosense.fr se réserve le droit de modifier unilatéralement et à tout moment le contenu des 
    présentes CGU.

    <strong>ARTICLE 1</strong> : Les mentions légales

    L'édition du site www.ecosense.fr est assurée par l'entreprise ECOSENSE au capital de 100000000
    euros, immatriculée au RCS  sous le numéro 64387454547550000080, dont le siège social est situé 
    au 5 Rue Groupe D APP INFORMATIQUE ISEP.
    Numéro de téléphone 01352562672
    Adresse e-mail : pierresedo@gmail.com.
    Le Directeur de la publication est : ECOSENSE
    L'hébergeur du site www.ecosense.fr est l'entreprise ECOSENSE, dont le siège social est situé 
    au 5 Rue Groupe D APP INFORMATIQUE ISEP, avec le numéro de téléphone : 013542792892.

    <strong>ARTICLE 2</strong> : Accès au site

    Le site www.ecosense.fr permet à l'Utilisateur un accès gratuit aux services suivants :
    Le site internet propose les services suivants :
    
    Le site est accessible gratuitement en tout lieu à tout Utilisateur ayant un accès à Internet. Tous les 
    frais supportés par l'Utilisateur pour accéder au service (matériel informatique, logiciels, connexion 
    Internet, etc.) sont à sa charge.
    L’Utilisateur non membre n'a pas accès aux services réservés. Pour cela, il doit s’inscrire en 
    remplissant le formulaire. En acceptant de s’inscrire aux services réservés, l’Utilisateur membre 
    

    s’engage à fournir des informations sincères et exactes concernant son état civil et ses coordonnées, 
    notamment son adresse email.
    Pour accéder aux services, l’Utilisateur doit ensuite s'identifier à l'aide de son identifiant et de son mot 
    de passe qui lui seront communiqués après son inscription.
    Tout Utilisateur membre régulièrement inscrit pourra également solliciter sa désinscription en se 
    rendant à la page dédiée sur son espace personnel. Celle-ci sera effective dans un délai raisonnable.
    Tout événement dû à un cas de force majeure ayant pour conséquence un dysfonctionnement du site 
    ou serveur et sous réserve de toute interruption ou modification en cas de maintenance, n'engage pas
    la responsabilité de www.ecosense.fr. Dans ces cas, l’Utilisateur accepte ainsi ne pas tenir rigueur à 
    l’éditeur de toute interruption ou suspension de service, même sans préavis.
    L'Utilisateur a la possibilité de contacter le site par messagerie électronique à l’adresse email de 
    l’éditeur communiqué à l’ARTICLE 1.
    
    <strong>ARTICLE 3 </strong>: Collecte des données

    Le site assure à l'Utilisateur une collecte et un traitement d'informations personnelles dans le respect 
    de la vie privée conformément à la loi n°78-17 du 6 janvier 1978 relative à l'informatique, aux fichiers 
    et aux libertés. Le site est déclaré à la CNIL sous le numéro 6241500000.
    En vertu de la loi Informatique et Libertés, en date du 6 janvier 1978, l'Utilisateur dispose d'un droit 
    d'accès, de rectification, de suppression et d'opposition de ses données personnelles. L'Utilisateur 
    exerce ce droit :
    par mail à l'adresse email pierresedo@gmail.com


    <strong>ARTICLE 4</strong> : Propriété intellectuelle

    Les marques, logos, signes ainsi que tous les contenus du site (textes, images, son…) font l'objet 
    d'une protection par le Code de la propriété intellectuelle et plus particulièrement par le droit d'auteur.
    La marque ECOSENSE est une marque déposée par APP G5D.Toute représentation et/ou reproduction et/ou exploitation partielle ou totale de cette marque, de quelque nature que ce soit,
    est totalement prohibée.
    L'Utilisateur doit solliciter l'autorisation préalable du site pour toute reproduction, publication, copie des
    différents contenus. Il s'engage à une utilisation des contenus du site dans un cadre strictement privé, 
    toute utilisation à des fins commerciales et publicitaires est strictement interdite.
    Toute représentation totale ou partielle de ce site par quelque procédé que ce soit, sans l’autorisation 
    expresse de l’exploitant du site Internet constituerait une contrefaçon sanctionnée par l’article L 335-2 
    et suivants du Code de la propriété intellectuelle.
    Il est rappelé conformément à l’article L122-5 du Code de propriété intellectuelle que l’Utilisateur qui 
    reproduit, copie ou publie le contenu protégé doit citer l’auteur et sa source.

    <strong>ARTICLE 5</strong>: Responsabilité

    Les sources des informations diffusées sur le site www.ecosense.fr sont réputées fiables mais le site 
    ne garantit pas qu’il soit exempt de défauts, d’erreurs ou d’omissions.
    Les informations communiquées sont présentées à titre indicatif et général sans valeur contractuelle. 
    Malgré des mises à jour régulières, le site www.ecosense.fr ne peut être tenu responsable de la 
    modification des dispositions administratives et juridiques survenant après la publication. De même, le
    site ne peut être tenue responsable de l’utilisation et de l’interprétation de l’information contenue dans 
    ce site.
    L'Utilisateur s'assure de garder son mot de passe secret. Toute divulgation du mot de passe, quelle 
    que soit sa forme, est interdite. Il assume les risques liés à l'utilisation de son identifiant et mot de 
    passe. Le site décline toute responsabilité.
    Le site www.ecosense.fr ne peut être tenu pour responsable d’éventuels virus qui pourraient infecter 
    l’ordinateur ou tout matériel informatique de l’Internaute, suite à une utilisation, à l’accès, ou au 
    téléchargement provenant de ce site.
    La responsabilité du site ne peut être engagée en cas de force majeure ou du fait imprévisible et 
    insurmontable d'un tiers.

    <strong>ARTICLE 6</strong> : Liens hypertextes

    Des liens hypertextes peuvent être présents sur le site. L’Utilisateur est informé qu’en cliquant sur ces 
    liens, il sortira du site www.ecosense.fr. Ce dernier n’a pas de contrôle sur les pages web sur 
    lesquelles aboutissent ces liens et ne saurait, en aucun cas, être responsable de leur contenu.

    <strong>ARTICLE 7</strong>: Cookies

    L’Utilisateur est informé que lors de ses visites sur le site, un cookie peut s’installer automatiquement 
    sur son logiciel de navigation.
    Les cookies sont de petits fichiers stockés temporairement sur le disque dur de l’ordinateur de 
    l’Utilisateur par votre navigateur et qui sont nécessaires à l’utilisation du site www.ecosense.fr. Les 
    cookies ne contiennent pas d’information personnelle et ne peuvent pas être utilisés pour identifier 
    quelqu’un. Un cookie contient un identifiant unique, généré aléatoirement et donc anonyme. Certains 
    cookies expirent à la fin de la visite de l’Utilisateur, d’autres restent.
    L’information contenue dans les cookies est utilisée pour améliorer le site www.ecosense.fr.
    En naviguant sur le site, L’Utilisateur les accepte.
    L’Utilisateur pourra désactiver ces cookies par l’intermédiaire des paramètres figurant au sein de son 
    logiciel de navigation.

    <strong>ARTICLE 8</strong> : Droit applicable et juridiction compétente

    La législation française s'applique au présent contrat. En cas d'absence de résolution amiable d'un 
    litige né entre les parties, les tribunaux français seront seuls compétents pour en connaître.
    Pour toute question relative à l’application des présentes CGU, vous pouvez joindre l’éditeur aux 
    coordonnées inscrites à l’ARTICLE 1.
    
    


  </div>  

</pre>




    <div class="footer">
        <div class="contain">

            <div class="col">
                <a style="text-decoration:none" href="FAQ.php">
                    <h1>FAQ</h1>
                </a>

            </div>
            <div class="col">
                <a style="text-decoration:none" href="CGU.php">
                    <h1>CGU</h1>
                </a>

            </div>

            <div class="col">
                <a style="text-decoration:none" href="mailto:pierre.sedo@eleve.isep.fr, robin.lerda@eleve.isep.fr, julien.godfroy@eleve.isep.fr, francois.hascoat@eleve.isep.fr,timothe.bonnel@eleve.isep.fr, gabriel.hercaud@eleve.isep.fr">
                    <h1>contact@ecosense.com</h1>
                </a>

            </div>

            <div class="col">
                <a style="text-decoration:none" href="resetpw.php">
                    <h1>Modifiez votre mot de passe</h1>
                </a>

            </div>


        </div>
    </div>
</body>



</html>