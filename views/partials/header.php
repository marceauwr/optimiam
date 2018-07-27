<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= URL ?>web/assets/style/materialize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="<?= URL ?>web/assets/style/vendor.css">
    <link rel="stylesheet" href="<?= URL ?>web/assets/style/home.css">
    <link rel="stylesheet" href="<?= URL ?>web/assets/style/business.css">
    <link rel="stylesheet" href="<?= URL ?>web/assets/style/header.css">
    <link rel="stylesheet" href="<?= URL ?>web/assets/style/burger.css">
    <link rel="stylesheet" href="<?= URL ?>web/assets/style/hamburgers.css">
    <link rel="stylesheet" href="<?= URL ?>web/assets/style/footer.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
<body>
    <div class="background-pink fixed-header">
        <div class="container">
            <header id="header">
                <div class="row header valign-wrapper">
                    <img src="<?= URL ?>web/assets/images/logos/optimiam_logo.png" alt="Optimiam logo" class="col s4 push-s0 m2 center-aligns">
                    <a href="https://itunes.apple.com/fr/app/optimiam-lappli-anti-gaspi/id919245252?mt=8" class="col hide-on-small-only push-m0 m2 center-align"><img src="<?= URL ?>web/assets/images/logos/app_store.png" alt="app store" class="ddl-button"></a>
                    <a href="https://play.google.com/store/apps/details?id=com.optimiam.consumer&hl=fr" class="col hide-on-small-only push-m0 m2 center-align"><img src="<?= URL ?>web/assets/images/logos/google_play.png" alt="google play" class="ddl-button"></a>
                    <div class="col hide-on-small-only push-m0 m2 center-align valign-wrapper how-works">
                        <div class="hover-menu center-align valign-wrapper">
                            <p class="hover-menu-text">Comment ça marche</p> 
                            <img src="<?= URL ?>web/assets/images/icons/expand_more.png" alt="expand icon" class="expand">
                            <ul class="hover-items">
                                <a href="<?= URL ?>"><li>Comment acheter de la nourriture</li></a>
                                <a href="<?= URL ?>business"><li>Comment vendre de la nourriture</li></a>
                            </ul>
                        </div>
                    </div>
                    <div class="col hide-on-small-only push-m0 m2 center-align">Connexion</div>
                    <a href="business.html" class="col s6 push-s0 m2 button center-align"><div class="ddl-button">Ajoutez votre commerce</div></a>
                    <div class="col s2 hide-on-med-and-up burger">
                        <button class="hamburger hamburger--collapse" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                        <ul class="menu">
                            <div class="white-line"></div>
                            <a href="<?= URL ?>">
                                <li class="menu-section center-align">Acheter de la nourriture</li>
                            </a>
                            <a href="<?= URL ?>business">
                                <li class="menu-section center-align">Vendre de la nourriture</li>
                            </a>
                            <a href="#">
                                <li class="menu-section center-align">Connexion</li>
                            </a>
                        </ul>
                    </div>
                </div>
            </header>
        </div>
    </div>