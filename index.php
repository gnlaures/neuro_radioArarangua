<?php
// init config
$title = 'Decortiles';
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
    case 'blog' :
        $file = 'pages/blog.php';
        $title_page = 'Blog | '.$title;
        $classOnBody = 'p-inner p-blog';
        break;
    case 'blog-post' :
        $file = 'pages/blog-post.php';
        $title_page = 'Título do Artigo | '.$title;
        $classOnBody = 'p-inner p-blog';
        break;
    case 'contato' :
        $file = 'pages/contact.php';
        $title_page = 'Contato | '.$title;
        $classOnBody = 'p-inner p-contact';
        break;
    case 'privacidade' :
        $file = 'pages/privacy.php';
        $title_page = 'Privacidade | '.$title;
        $classOnBody = 'p-inner p-privacy';
        break;
    case 'catalogo' :
        $file = 'pages/catalog.php';
        $title_page = 'Catálogo | '.$title;
        $classOnBody = 'p-inner p-catalago';
        break;
    case 'produto' :
        $file = 'pages/product.php';
        $title_page = 'Produto | '.$title;
        $classOnBody = 'p-inner p-product';
        break;
    case 'produtos' :
        $file = 'pages/products.php';
        $title_page = 'Produtos | '.$title;
        $classOnBody = 'p-inner p-products';
        break;
    case 'onde-encontrar' :
        $file = 'pages/findUs.php';
        $title_page = 'Onde Encontrar | '.$title;
        $classOnBody = 'p-inner p-findUs';
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
include("parts/layout/l-footer.php");

// modal's
include("parts/modal/m-webApp.php");
$mVideo = array('modal-id' => 'video-explore', 'video-id' => 'B1noJ-lAVvs');
include('parts/modal/m-youtubeVideo.php');

// end
include("parts/_partials/end.php");
?>


