<?php
    include 'config.php';

    
    $q = empty($_GET['q']) ? '' : $_GET['q'];
    $page = null;


    switch($q)
    {
        case '':
            $page = 'home';
            break;

        case 'business':
            $page = 'business';
            break;

        default:
            $page = '404';
            break;
    }

    include 'views/pages/'.$page.'.php';