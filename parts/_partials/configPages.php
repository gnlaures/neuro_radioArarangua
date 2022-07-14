<?php
    $title = 'Rádio Araranguá';

    // $pagina = explode('neuro_radioArarangua/', $_SERVER['REQUEST_URI']);
    $pagina = explode('/', $_SERVER['REQUEST_URI']);
    $classPage = 'p-inner';
    switch ($pagina[1]) {
        // Home
        case '' :
        case 'home' :
            $file = 'pages/home.php';
            $title_page = $title;
            $classPage = 'p-home';
            break;

        // inner pages
        case 'sobre' :
            $file = 'pages/aboutUs.php';
            $title_page = 'Sobre | '.$title;
            $classPage = 'p-inner p-sections';
            break;
        case 'publicidade' :
            $file = 'pages/advertising.php';
            $title_page = 'Publicidade | '.$title;
            $classPage = 'p-inner p-sections';
            break;
        case 'colunistas' :
            $file = 'pages/columnist.php';
            $title_page = 'Colunistas | '.$title;
            $classPage = 'p-inner p-sections';
            break;
        case 'colunista-open' :
            $file = 'pages/columnist-open.php';
            $title_page = 'Jairo Silva | '.$title;
            $classPage = 'p-inner p-sections';
            break;
        case 'contato' :
            $file = 'pages/contact.php';
            $title_page = 'Contato | '.$title;
            $classPage = 'p-inner p-sections';
            break;
        case 'noticias' :
            $file = 'pages/news.php';
            $title_page = 'Notícias | '.$title;
            $classPage = 'p-inner p-sections';
            break;
        case 'noticia-open' :
            $file = 'pages/news-open.php';
            $title_page = 'Título do Artigo | '.$title;
            $classPage = 'p-inner p-sections';
            break;
        case 'podcasts' :
            $file = 'pages/podcasts.php';
            $title_page = 'Podcasts | '.$title;
            $classPage = 'p-inner p-sections';
            break;
        case 'videos' :
            $file = 'pages/videos.php';
            $title_page = 'Vídeos | '.$title;
            $classPage = 'p-inner p-sections';
            break;
        case 'previsao-do-tempo' :
            $file = 'pages/weather.php';
            $title_page = 'Previsão do Tempo | '.$title;
            $classPage = 'p-inner p-sections';
            break;

        // 404
        default :
            header("HTTP/1.0 404 Not Found");
            $file = 'pages/error404.php';
            $title_page = 'Página não encontrada - '.$title;
            break;
    }
?>