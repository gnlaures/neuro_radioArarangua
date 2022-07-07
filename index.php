<?php
// init config
$title = 'Rádio Araranguá';
// $pagina = explode('neuro_decortiles/', $_SERVER['REQUEST_URI']);
$pagina = explode('/', $_SERVER['REQUEST_URI']);
$classPage = 'p-inner';

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
        $classPage = 'p-home';
        break;

    // inner pages
    case 'quem-somos' :
        $file = 'pages/aboutUs.php';
        $title_page = 'Quem Somos | '.$title;
        $classPage = 'p-inner p-aboutUs';
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
?>

<main class="l-page <?php echo $classPage; ?>">
    <section class="s-defaultSection s-ad">
        <div class="s-defaultSection__content">
            <div class="u-container">
                <?php $cAd = array(
                    'link' => '#',
                    'title' => 'Publicidade',
                    'img' => 'media/img/content/ad_1.jpg');
                include('parts/components/c-adsBanner.php');?>
            </div>
        </div>
    </section>
    <div class="l-mainContent">
        <div class="u-container u-dflex u-aifs u-jcsb">
            <div class="l-mainContent__content">
                <?php include($file); ?>
            </div>
            <div class="l-mainContent__aside">
                <?php include('parts/layout/l-sidebar.php');?>
            </div>
        </div>
    </div>
</main>

<?php
// include("parts/layout/l-footer.php");
include("parts/_partials/end.php");
?>


