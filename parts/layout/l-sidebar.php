<!--Utilize o modificado --sticky apenas em UM widget, preferencialmente no último.-->

<aside class="l-sidebar">
    <div class="l-sidebar__group">
        <div class="c-sidebarWidget --listArticles">
            <div class="c-sidebarWidget__title">
                <h4>Últimas Notícias</h4>
            </div>
            <div class="c-sidebarWidget__content">
                <ul>
                    <li>
                        <?php $cCardArticle = array('extraClass' => '');
                        include('parts/components/c-cardArticle.php');?>
                    </li>
                    <li>
                        <?php $cCardArticle = array('extraClass' => '');
                        include('parts/components/c-cardArticle.php');?>
                    </li>
                </ul>
            </div>
        </div>
        <div class="c-sidebarWidget --listLinks">
            <div class="c-sidebarWidget__title">
                <h4>Categorias</h4>
            </div>
            <div class="c-sidebarWidget__content">
                <div class="c-smartMenu --vertical --gray --click">
                    <ul>
                        <li><a href="#">Eleições 2022</a></li>
                        <li><a href="#">Regional</a></li>
                        <li><a href="#">Local</a></li>
                        <li><a href="#">Esportes</a></li>
                        <li><a href="#">Polícia</a></li>
                        <li><a href="#">Política</a></li>
                        <li>
                            <a href="#">Sub Menu</a>
                            <ul>
                                <li><a href="#">Eleições 2022</a></li>
                                <li><a href="#">Regional</a></li>
                                <li><a href="#">Local</a></li>
                                <li><a href="#">Esportes</a></li>
                                <li><a href="#">Polícia</a></li>
                                <li><a href="#">Política</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="c-sidebarWidget --ads">
        <div class="c-sidebarWidget__content">
            <?php $cAd = array(
                    'link' => '#',
                    'title' => 'Publicidade',
                    'img' => 'media/img/content/ad_2.jpg');
                include('parts/components/c-adsBanner.php');?>
        </div>
    </div>
    <div class="c-sidebarWidget --ads">
        <div class="c-sidebarWidget__content">
            <?php $cAd = array(
                    'link' => '#',
                    'title' => 'Publicidade',
                    'img' => 'media/img/content/ad_3.jpg');
                include('parts/components/c-adsBanner.php');?>
        </div>
    </div>
    <div class="c-sidebarWidget --listCards --micTitle">
        <div class="c-sidebarWidget__title">
            <div class="c-micTitle">
                <div class="c-micTitle__content">
                    <h4 class="c-micTitle__title">
                        <a href="#">Podcasts</a>
                    </h4>
                    <div class="c-micTitle__more">
                        <a href="#"><?php include('media/img/icons/icon_plus.svg'); ?></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="c-sidebarWidget__content">
            <ul>
                <li>
                    <?php
                        $cCardPodcast = array(
                            'extraClass' => '',
                            'link' => '#',
                            'title' => 'Vereador eleito em Balneário Arroio do Silva, Alan Silva avalia a campanha e fala sobre seu futuro mandato.');
                        include('parts/components/c-cardPodcast.php')
                        ?>
                </li>
                <li>
                    <?php
                        $cCardPodcast = array(
                            'extraClass' => '',
                            'link' => '#',
                            'title' => 'Vereador eleito em Balneário Arroio do Silva, Alan Silva avalia a campanha e fala sobre seu futuro mandato.');
                        include('parts/components/c-cardPodcast.php')
                    ?>
                </li>
                <li>
                    <?php
                        $cCardPodcast = array(
                            'extraClass' => '',
                            'link' => '#',
                            'title' => 'Vereador eleito em Balneário Arroio do Silva, Alan Silva avalia a campanha e fala sobre seu futuro mandato.');
                        include('parts/components/c-cardPodcast.php')
                    ?>
                </li>
            </ul>
        </div>
    </div>
    <div class="c-sidebarWidget --ads">
        <div class="c-sidebarWidget__content">
            <?php $cAd = array(
                    'link' => '#',
                    'title' => 'Publicidade',
                    'img' => 'media/img/content/ad_4.jpg');
                include('parts/components/c-adsBanner.php');?>
        </div>
    </div>
    <div class="c-sidebarWidget --grid --micTitle">
        <div class="c-sidebarWidget__title">
            <div class="c-micTitle">
                <div class="c-micTitle__content">
                    <h4 class="c-micTitle__title">
                        <a href="#">Colunistas</a>
                    </h4>
                    <div class="c-micTitle__more">
                        <a href="#"><?php include('media/img/icons/icon_plus.svg'); ?></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="c-sidebarWidget__content">
            <ul class="c-responsiveGrid --start --fitContent"
                data-maxw-breaks="400"
                data-maxw-cols="1"
                data-cols-init="2">
                <li>
                    <?php
                    $cCardColumnist = array(
                        'extraClass' => '',
                        'link' => '#',
                        'img' => 'media/img/content/colunista.png',
                        'name' => 'Jairo Silva',
                        'tagline' => 'Esportivo');
                    include('parts/components/c-cardColumnist.php')
                    ?>
                </li>
                <li>
                    <?php
                    $cCardColumnist = array(
                        'extraClass' => '',
                        'link' => '#',
                        'img' => 'media/img/content/colunista.png',
                        'name' => 'Jairo Silva',
                        'tagline' => 'Entretenimento & Viagens');
                    include('parts/components/c-cardColumnist.php')
                    ?>
                </li>
                <li>
                    <?php
                    $cCardColumnist = array(
                        'extraClass' => '',
                        'link' => '#',
                        'img' => 'media/img/content/colunista.png',
                        'name' => 'Jairo Silva',
                        'tagline' => 'Política');
                    include('parts/components/c-cardColumnist.php')
                    ?>
                </li>
                <li>
                    <?php
                    $cCardColumnist = array(
                        'extraClass' => '',
                        'link' => '#',
                        'img' => 'media/img/content/colunista.png',
                        'name' => 'Jairo Silva',
                        'tagline' => 'Saúde');
                    include('parts/components/c-cardColumnist.php')
                    ?>
                </li>
            </ul>
        </div>
    </div>
    <div class="c-sidebarWidget --ads --sitcky">
        <div class="c-sidebarWidget__content">
            <?php $cAd = array(
                'link' => '#',
                'title' => 'Publicidade',
                'img' => 'media/img/content/ad_5.jpg');
            include('parts/components/c-adsBanner.php');?>
        </div>
    </div>
</aside>