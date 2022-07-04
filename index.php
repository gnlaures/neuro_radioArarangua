<?php
// init config
$title = 'Rádio Araranguá';
// $pagina = explode('neuro_decortiles/', $_SERVER['REQUEST_URI']);
$pagina = explode('/', $_SERVER['REQUEST_URI']);
$classOnBody = 'p-inner';

// loop pages
switch ($pagina[1]) {
    // Boilerplate
    case 'laures':
    case 'ronak':
    case 'lauresronak':
    case 'docs':
    case 'documentation':
        $file = '_boilerplate/sections.php';
        $title_page = 'Documentação | '.$title;
        break;

    // Home
    case '' :
    case 'home' :
        $file = 'pages/home.php';
        $title_page = $title;
        $classOnBody = 'p-home';
        break;

    // inner pages
    case 'quem-somos' :
        $file = 'pages/aboutUs.php';
        $title_page = 'Quem Somos | '.$title;
        $classOnBody = 'p-inner p-aboutUs';
        break;

    // 404
    default :
        header("HTTP/1.0 404 Not Found");
        $file = 'pages/error404.php';
        $title_page = 'Página não encontrada - '.$title;
        break;
}

// head + nav
include("parts/_partials/head.php");
include("parts/layout/l-nav.php");

// render page content
include($file);

// footer
// include("parts/layout/l-footer.php");

// end
include("parts/_partials/end.php");
?>


