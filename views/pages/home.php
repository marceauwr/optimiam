<?php

    $title = 'OptiMiam - Home';

    require 'views/partials/header.php';
?>

<div class="home">
    <div class="background-landing">
        <div class="container">
            <section class="landing">
                <div class="row">
                    <h1 class="col s12 m12 center-align catch-phrase">
                        L'application qui vous aide à sauver la planète en réduisant le gaspillage !
                    </h1>
                </div>
                <div class="row">
                    <div class="col s12 m12 center-align sub-catch-phrase">1/3 de toute la nourriture produite est gaspillée. Avec l'application OptiMiam, faites des économies autour de vous tout en réduisant le gaspillage !</div>
                </div>
                <div class="row ddl-app">
                    <a href="https://itunes.apple.com/fr/app/optimiam-lappli-anti-gaspi/id919245252?mt=8" class="col s6 m4 offset-m2"><img src="<?= URL ?>web/assets/images/logos/app_store@4.png" alt="app store" class="ddl-button"></a>
                    <a href="https://play.google.com/store/apps/details?id=com.optimiam.consumer&hl=fr" class="col s6 m4"><img src="<?= URL ?>web/assets/images/logos/google_play@4.png" alt="google play" class="ddl-button"></a>
                </div>
            </section>
        </div>
    </div>
    <section class="main-number">
        <div class="container">
            <div class="row icons">
                <div class="col s12 m4 center-align icon">
                    <img src="<?= URL ?>web/assets/images/icons/store_icon.jpg" alt="" class="width-image">
                    <h3 class=" sub-title">+ de 850 commerçants vendent leurs invendus par le biais d’OptiMiam !</h3>
                    <p class="explain-txt">Intervenez dans la lutte contre le gaspillage en vendant sur OptiMiam vos produits en surplus comme le font Pomme de Pain, Franprix, Big Fernand et bien d’autres encore. </p>
                    <a href="<?= URL ?>business" class="underline"><p>Comment vendre de la nourriture</p></a>
                </div>
                <div class="col s12 m4 center-align icon">
                    <img src="<?= URL ?>web/assets/images/icons/cutlery_icon.jpg" alt="" class="width-image">
                    <h3 class="sub-title">+ de 220 000 utilisateurs commandent nos OptiBox</h3>
                    <p class="explain-txt">Composées de produits de qualité à moitié prix.OptiMiam est disponible dans plus de 36 villes en France, alors n’attendez plus pour commander votre OptiBox !</p>
                    <a href="<?= URL ?>" class="underline"><p>Comment acheter de la nourriture</p></a>
                </div>
                <div class="col s12 m4 center-align icon">
                    <img src="<?= URL ?>web/assets/images/icons/ecology_icon.jpg" alt="" class="width-image">
                    <h3 class="sub-title">Un pari gagnant-gagnant-gagnant !</h3>
                    <p class="explain-txt">Les restaurants obtiennent jusqu'à 0,5 million de revenus supplémentaires par an tout en réduisant le gaspi ! Quant aux utilisateurs, ils profitent de plats délicieux à moitié prix ! Sans parler de l’environnement qui bénéficie largement d’OptiMiam !</p>
                </div>
            </div>            
        </div>
    </section>
    <section class="popular-seller background-grey">
        <div class="container">
            <div class="row">
                <h4 class="col s12 m12 center-align">Quelques-unes des enseignes les plus populaires sur OptiMiam :</h4>
            </div>
            <div class="row">
                <div class="col s12 m12 logos center-align owl-carousel">
                    <div class="item">
                        <a href="https://www.auchan.fr/magasins/votremagasin">
                            <img src="<?= URL ?>web/assets/images/logos/simply_logo.png" alt="simply market logo">
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://www.briochedoree.fr/">
                            <img src="<?= URL ?>web/assets/images/logos/brioche_logo.png" alt="brioche dorée logo">
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://www.carrefour.fr/">
                            <img src="<?= URL ?>web/assets/images/logos/carrefour_city_logo.png" alt="carrefour city logo">
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://www.paul.fr/fr/">
                            <img src="<?= URL ?>web/assets/images/logos/paul_logo.png" alt="paul logo">
                        </a>
                    </div>
                    <div class="item">
                        <a href="http://www.subway.com/fr-fr/">
                            <img src="<?= URL ?>web/assets/images/logos/subway_logo.png" alt="subway logo">
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://www.cora.fr/arcueil/">
                            <img src="<?= URL ?>web/assets/images/logos/cora_logo.png" alt="cora logo">
                        </a>
                    </div>
                    <div class="item">
                        <a href="http://www.casino-proximite.fr/enseigne/casino-shop">
                            <img src="<?= URL ?>web/assets/images/logos/casino_logo.png" alt="casino logo">
                        </a>
                    </div>
                    <div class="item">
                        <a href="http://www.autogrill.fr/">
                            <img src="<?= URL ?>web/assets/images/logos/autogrill_logo.png" alt="autogrill logo">
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://www.carrefour.fr/">
                            <img src="<?= URL ?>web/assets/images/logos/carrefour_express_logo.png" alt="carrefour express logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="optibox">
        <div class="container">
            <div class="row">
                <img src="<?= URL ?>web/assets/images/backgrounds/background-optibox.png" alt="" class="col s12 m12">
                <h4 class="col s12 m6 sub-title">Découvrez les OptiBox près de chez vous</h4>
                <p class="col s12 m6 text-optibox">OptiMiam opère dans plus de 30 villes en France, découvrez nos partenaires !</p>
                <div class="col s12 m6 download-buttons">
                    <a href="https://itunes.apple.com/fr/app/optimiam-lappli-anti-gaspi/id919245252?mt=8"><img src="<?= URL ?>web/assets/images/logos/app_store_black.png" alt="" class="col s6 m4"></a>
                    <a href="https://play.google.com/store/apps/details?id=com.optimiam.consumer&hl=fr"><img src="<?= URL ?>web/assets/images/logos/google_play_black.png" alt="" class="col s6 m4"></a>
                </div>
            </div>
        </div>
    </section>
    <section class="how-it-works">
        <div class="container">
            <div class="row">
                <div class="col s12 m6">
                    <div class="row">
                        <h3 class="col s12 m12">OptiMiam comment ça marche</h3>
                    </div>
                    <div class="row">
                        <div class="col s12 m12">Limiter le gaspillage avec OptiMiam ? Rien de plus simple ! </div>
                    </div>
                    <div class="row">
                        <div class="col s12 m12"><span class="color-pink">1. Téléchargez l'application</span> et parcourez les restaurants, cafés et supermarchés partenaires.</div>
                    </div>
                    <div class="row">
                        <div class="col s12 m12"><span class="color-pink">2. Commandez l’OptiBox de votre choix</span> directement sur l'application.</div>
                    </div>
                    <div class="row">
                        <div class="col s12 m12"><span class="color-pink">3. Récupérez votre OptiBox</span> dans la plage horaire spécifiée et profitez-en !</div>
                    </div>
                    <div class="row">
                        <div class="col s12 m12">Téléchargez l'application et découvrez les meilleures offres près de chez vous.</div>
                    </div>
                    <div class="row">
                        <div class="col s6 m4"><img src="<?= URL ?>web/assets/images/logos/app_store.png" alt="app store" class="ddl-button"></div>
                        <div class="col s6 m4"><img src="<?= URL ?>web/assets/images/logos/google_play.png" alt="google play" class="ddl-button"></div>
                    </div>
                </div>
                <div class="col s6 m6">
                    <!-- <video src=""></video> -->
                </div>
            </div>
        </div>
    </section>
    <section class="help-numbers">
        <div class="container">
            <div class="row">
                <h3 class="col s12 m12">Grâce à vous, nous avons aidé à sauver : </h3>
            </div>
            <div class="row">
                <div class="col s12 m6 center-align">
                    <div class=" sub-title">Tonnes de nourriture sauvée :</div>
                    <div class="number">140</div>
                </div>
                <div class="col s12 m6 center-align">
                        <div class="sub-title">Produits sauvés :</div>
                    <div class="number">400.000</div>
                </div>
            </div>
            <div class="row">
                <h4 class="col s12 m12 center-align">L'avis de nos commerçants :</h4>
            </div>
            <div class="row">
                <img src="<?= URL ?>web/assets/images/icons/pp.png" alt="" class="col s4 m2">
                <div class="col s8 m4">
                    <p class="comment">"Utiliser OptiMiam est une évidence pour tout chef ou propriétaire de restaurant ! Il n’y a pas meilleur challenge pour un commerçant que de réduire le gaspillage tout en gagnant de l'argent. "</p>
                    <div>GUEST</div>
                </div>
                <img src="<?= URL ?>web/assets/images/icons/pp2.jpg" alt="" class="col hide-on-small-only m2">
                <div class="col hide-on-small-only m4">
                    <p class="comment">"Le gaspillage alimentaire est une question complexe qui peut sembler décourageante pour les chaines de supermarchés, mais OptiMiam rend ce défi simple et stimulant."</p>
                    <div>David</div>
                    <div>Franprix</div>
                </div>
            </div>
            <div class="row">
                <h4 class="col s12 m12 center-align">Avis sur l'App Store :</h4>
            </div>
            <div class="row">
                <img src="<?= URL ?>web/assets/images/icons/pp.png" alt="" class="col hide-on-small-only m2">
                <div class="col hide-on-small-only m4">
                    <div class="comment-title">Appli utile pour tous !</div>
                    <div class="comment-author">par The Real Miss Swan</div>
                    <p class="comment">« Une appli qui fait du bien à tout le monde. Elle permet à la fois de lutter contre le gaspillage alimentaire, et en même temps de faire des économies en achetant des plats à moitié prix. Je l’utilise très souvent avec les restaurants de mon quartier. Un repas pour 5 ou 6 euros ça vaut vraiment le coup ! »</p>
                </div>
                <img src="<?= URL ?>web/assets/images/icons/pp2.jpg" alt="" class="col s4 m2">
                <div class="col s8 m4">
                    <div class="comment-title">Une appli à ne pas manquer !</div>
                    <div class="comment-author">par Lou du 95</div>
                    <p class="comment">« J’ai découvert l’application il y a quelques mois et je la recommande chaudement ! OptiMiam m’a permis de sauver de délicieux sandwichs tout en ayant l’impression de sauver la planète. Des prix très intéressants, des commerçants accueillants et sensibles aux problèmes environnementaux… bref à essayer de toute urgence ! »</p>
                </div>
            </div>
        </div>
    </section>
    <section class="articles background-grey">
        <div class="container">
            <div class="row">
                <h4 class="col s12 m12 center-align">Ils parlent d'OptiMiam :</h4>
            </div>
            <div class="row">
                <div class="col s12 m12 logos center-align owl-carousel">
                    <div class="item">
                        <a href="https://www.lci.fr/france/optimiam-lapplication-qui-permet-de-manger-sans-gacher-1216431.html">
                            <img src="<?= URL ?>web/assets/images/logos/media/lci.png" alt="lci logo">
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://www.lesfurets.com/budget-fute/pouvoir-achat/appli-anti-gaspi">
                            <img src="<?= URL ?>web/assets/images/logos/media/furets.png" alt="lci logo">
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://bfmbusiness.bfmtv.com/entreprise/optimiam-l-appli-qui-associe-lutte-contre-le-gaspi-et-economie-910296.html">
                            <img src="<?= URL ?>web/assets/images/logos/media/bfm.png" alt="BFM Business logo">
                        </a>
                    </div>
                    <div class="item">
                        <a href="http://www.liberation.fr/france/2015/09/08/optimiam-manger-pour-ne-pas-gacher_1378195#link_time=1441735446">
                            <img src="<?= URL ?>web/assets/images/logos/media/liberation.png" alt="Libération logo">
                        </a>
                    </div>
                    <div class="item">
                        <a href="http://www.europe1.fr/mediacenter/emissions/innovation/videos/optimiam-l-appli-anti-gachis-2318903">
                            <img src="<?= URL ?>web/assets/images/logos/media/europe1.png" alt="Europe 1 logo">
                        </a>
                    </div>
                    <div class="item">
                        <a href="http://www.lemonde.fr/m-boulot-reseau/article/2015/04/21/des-applis-boussoles-plein-les-poches_4620011_4498015.html">
                            <img src="<?= URL ?>web/assets/images/logos/media/lemonde.png" alt="Le Monde logo">
                        </a>
                    </div>
                    <div class="item">
                        <a href="http://www.lepoint.fr/high-tech-internet/l-app-de-la-semaine-optimiam-30-12-2014-1893050_47.php">
                            <img src="<?= URL ?>web/assets/images/logos/media/lepoint.png" alt="Le Point logo">
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://www.lsa-conso.fr/food-tech-optimiam-l-appli-qui-veut-en-finir-avec-le-gaspillage-alimentaire,230325">
                            <img src="<?= URL ?>web/assets/images/logos/media/lsa.png" alt="Libération logo">
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://www.20minutes.fr/paris/1640391-20150626-paris-optimiam-application-combine-promotions-lutte-contre-gaspillage-alimentaire">
                            <img src="<?= URL ?>web/assets/images/logos/media/20minutes.png" alt="20 minutes logo">
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://www.grazia.fr/lifestyle/insolite/lappli-de-la-semaine-optimiam-des-bons-plans-food-anti-gaspi-744982">
                            <img src="<?= URL ?>web/assets/images/logos/media/grazia.png" alt="Grazia logo">
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://www.rtl.fr/actu/conso/raodath-aminou-optimiam-est-un-pont-digital-entre-les-commerces-de-proximite-et-les-consommateurs-7778595458">
                            <img src="<?= URL ?>web/assets/images/logos/media/rtl.png" alt="RTL logo">
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://www.journaldunet.com/web-tech/start-up/concours-e-food-laureats-1114.shtml">
                            <img src="<?= URL ?>web/assets/images/logos/media/jdn.png" alt="Journal du net logo">
                        </a>
                    </div>
                    <div class="item">
                        <a href="">
                            <img src="<?= URL ?>web/assets/images/logos/media/liberation.png" alt="Libération logo">
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://www.lesechos.fr/07/01/2015/LesEchos/21850-081-ECH_les-5-tendances-de-la-consommation-verte-en-2015.htm">
                            <img src="<?= URL ?>web/assets/images/logos/media/lesechos.png" alt="Les échos logo">
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://www.maddyness.com/2016/01/21/optimiam-levee/">
                            <img src="<?= URL ?>web/assets/images/logos/media/maddyness.png" alt="Maddyness logo">
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://www.snacking.fr/news-1881-OptiMiam--l-appli-anti-gaspi-laureate-du-prix-E-Food.php">
                            <img src="<?= URL ?>web/assets/images/logos/media/snacking.png" alt="Snacking logo">
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://www.youtube.com/watch?v=lS4zRe-bKI4">
                            <img src="<?= URL ?>web/assets/images/logos/media/tv5monde.png" alt="TV5 monde logo">
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://www.bibamagazine.fr/lifestyle/bonsplans/optimiam-l-appli-des-courses-a-petits-prix-anti-gaspillage-34897">
                            <img src="<?= URL ?>web/assets/images/logos/media/biba.png" alt="biba logo">
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://www.rtbf.be/lapremiere/emissions_matin-premiere/nos-rubriques/le-journal-du-web/article_decouverte-web-optimiam?id=8650860&programId=60&redirect">
                            <img src="<?= URL ?>web/assets/images/logos/media/rtbf.png" alt="rtbf première logo">
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://www.lebonbon.fr/paris/pop-culture/optimiam-lappli-anti-gachis/">
                            <img src="<?= URL ?>web/assets/images/logos/media/lebonbon.png" alt="Le bonbon logo">
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://www.wedemain.fr/Contre-le-gaspillage-alimentaire-l-appli-qui-geolocalise-les-invendus_a770.html">
                            <img src="<?= URL ?>web/assets/images/logos/media/wedemain.png" alt="We Demain logo">
                        </a>
                    </div>
                    <div class="item">
                        <a href="http://www.ladn.eu/tech-a-suivre/portraits-de-startups/optimiam-stop-au-gaspillage/">
                            <img src="<?= URL ?>web/assets/images/logos/media/adn.png" alt="ADN logo">
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://mrmondialisation.org/tag/optimiam/">
                            <img src="<?= URL ?>web/assets/images/logos/media/mondialisation.png" alt="Mr mondialisation logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="end-business">
        <div class="container">
            <div class="row">
                <h3 class="col s12 m12 center-align">Be a zero-waste leader while making a profit!</h3>
            </div>
            <div class="row">
                <div class="col s12 m12 center-align free">Gratuit et sans obligation</div>
            </div>
            <div class="row">
                <a href="business.html"><div class="col s12 m4 offset-m4 button center-align">Ajoutez votre commerce</div></a>
            </div>
        </div>
    </section>
</div>

<?php require 'views/partials/footer.php'; ?>