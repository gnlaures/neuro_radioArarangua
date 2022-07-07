<!--Home-->
<section class="s-defaultSection">
    <div class="s-defaultSection__content">
        <ul class="c-gridArticles --simple">
            <li>
                <?php $cCardArticle = array('extraClass' => '');
                include('parts/components/c-cardArticle.php');?>
            </li>
            <li>
                <?php $cCardArticle = array('extraClass' => '');
                include('parts/components/c-cardArticle.php');?>
            </li>
            <li>
                <?php $cCardArticle = array('extraClass' => '');
                include('parts/components/c-cardArticle.php');?>
            </li>
            <li>
                <?php $cCardArticle = array('extraClass' => '');
                include('parts/components/c-cardArticle.php');?>
            </li>
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
</section>
<section class="s-defaultSection">
    <div class="s-defaultSection__head">
        <div class="c-micTitle">
            <div class="c-micTitle__content">
                <h4 class="c-micTitle__title">
                    <a href="#">Política</a>
                </h4>
                <div class="c-micTitle__more">
                    <a href="#"><?php include('media/img/icons/icon_plus.svg'); ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="s-defaultSection__content">
        <ul class="c-gridArticles --min">
            <li>
                <?php $cCardArticle = array('extraClass' => '');
                include('parts/components/c-cardArticle.php');?>
            </li>
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
</section>
<section class="s-defaultSection">
    <div class="s-defaultSection__head">
        <div class="c-micTitle">
            <div class="c-micTitle__content">
                <h4 class="c-micTitle__title">
                    <a href="#">Esporte</a>
                </h4>
                <div class="c-micTitle__more">
                    <a href="#"><?php include('media/img/icons/icon_plus.svg'); ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="s-defaultSection__content">
        <ul class="c-gridArticles --min">
            <li>
                <?php $cCardArticle = array('extraClass' => '');
                include('parts/components/c-cardArticle.php');?>
            </li>
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
</section>
<section class="s-defaultSection">
    <div class="s-defaultSection__head">
        <div class="c-micTitle">
            <div class="c-micTitle__content">
                <h4 class="c-micTitle__title">
                    <a href="#">Vídeos</a>
                </h4>
                <div class="c-micTitle__more">
                    <a href="#"><?php include('media/img/icons/icon_plus.svg'); ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="s-defaultSection__content">
        <ul class="c-gridArticles --min">
            <li>
                <?php $cCardArticle = array('extraClass' => '');
                include('parts/components/c-cardArticle.php');?>
            </li>
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
</section>
<section class="s-defaultSection --darken">
    <div class="s-defaultSection__head">
        <div class="c-micTitle">
            <div class="c-micTitle__content">
                <h4 class="c-micTitle__title">
                    <a href="#">Previsão do tempo</a>
                </h4>
                <div class="c-micTitle__more">
                    <a href="#"><?php include('media/img/icons/icon_plus.svg'); ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="s-defaultSection__content">
        <ul class="c-gridArticles --simple">
            <li>
                <?php
                $cVideo = array(
                    'extraClass' => '--noIcon',
                    'link' => '#',
                    'cover' => 'media/img/content/cVideo.jpg',
                    'title' => 'Previsão do tempo');
                include('parts/components/c-video.php')
                ?>
            </li>
            <li>
                <ul class="c-listSweather">
                    <li>
                        <?php
                        $cCardSweather = array(
                            'extraClass' => '--onlyMinMax --fixedSizes --white',
                            'city' => 'Araranguá',
                            'icon' => '6',
                            'temp_current' => '',
                            'temp_min' => '11º',
                            'temp_max' => '20º',
                            'rain' => '100%');
                        include('parts/components/c-cardSweather.php');
                        ?>
                    </li>
                    <li>
                        <?php
                        $cCardSweather = array(
                            'extraClass' => '--onlyMinMax --fixedSizes --white',
                            'city' => 'Arroio do Silva',
                            'icon' => '8',
                            'temp_current' => '',
                            'temp_min' => '17',
                            'temp_max' => '27º',
                            'rain' => '94%');
                        include('parts/components/c-cardSweather.php');
                        ?>
                    </li>
                    <li>
                        <?php
                        $cCardSweather = array(
                            'extraClass' => '--onlyMinMax --fixedSizes --white',
                            'city' => 'Maracajá',
                            'icon' => '4',
                            'temp_current' => '',
                            'temp_min' => '17',
                            'temp_max' => '27º',
                            'rain' => '94%');
                        include('parts/components/c-cardSweather.php');
                        ?>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</section>

<!--About-->
<!--Noticias - Categoria-->
<!--Videos-->
<!--Podcasts-->
<section class="s-defaultSection">
    <div class="s-defaultSection__head">
        <div class="c-micTitle">
            <div class="c-micTitle__content">
                <h4 class="c-micTitle__title">
                    <a href="#">Podcast</a>
                </h4>
                <div class="c-micTitle__more">
                    <a href="#"><?php include('media/img/icons/icon_plus.svg'); ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="s-defaultSection__content">
        <ul class="c-responsiveGrid --start"
            data-maxw-breaks="400"
            data-maxw-cols="1"
            data-cols-init="2">
            <li><?php include('parts/components/c-cardPodcast.php');?></li>
            <li><?php include('parts/components/c-cardPodcast.php');?></li>
            <li><?php include('parts/components/c-cardPodcast.php');?></li>
            <li><?php include('parts/components/c-cardPodcast.php');?></li>
            <li><?php include('parts/components/c-cardPodcast.php');?></li>
            <li><?php include('parts/components/c-cardPodcast.php');?></li>
            <li><?php include('parts/components/c-cardPodcast.php');?></li>
            <li><?php include('parts/components/c-cardPodcast.php');?></li>
            <li><?php include('parts/components/c-cardPodcast.php');?></li>
            <li><?php include('parts/components/c-cardPodcast.php');?></li>
        </ul>
        c-pagination
    </div>
</section>
<!--Colunistas-->
<section class="s-defaultSection">
    <div class="s-defaultSection__head">
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
    <div class="s-defaultSection__content">
        <ul class="c-responsiveGrid --start"
            data-maxw-breaks="500"
            data-maxw-cols="2"
            data-cols-init="3">
            <li><?php include('parts/components/c-cardColumnist.php');?></li>
            <li><?php include('parts/components/c-cardColumnist.php');?></li>
            <li><?php include('parts/components/c-cardColumnist.php');?></li>
            <li><?php include('parts/components/c-cardColumnist.php');?></li>
            <li><?php include('parts/components/c-cardColumnist.php');?></li>
            <li><?php include('parts/components/c-cardColumnist.php');?></li>
            <li><?php include('parts/components/c-cardColumnist.php');?></li>
            <li><?php include('parts/components/c-cardColumnist.php');?></li>
            <li><?php include('parts/components/c-cardColumnist.php');?></li>
        </ul>
    </div>
</section>
<!--Colunista Aberto-->
<section class="s-defaultSection">
    <div class="s-defaultSection__head">
        <div class="c-micTitle">
            <div class="c-micTitle__content">
                <h4 class="c-micTitle__title">
                    <a href="#">Últimas Notícias</a>
                </h4>
                <div class="c-micTitle__more">
                    <a href="#"><?php include('media/img/icons/icon_plus.svg'); ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="s-defaultSection__content">
        <ul class="c-responsiveGrid --start"
            data-maxw-breaks="500"
            data-maxw-cols="2"
            data-cols-init="3">
            <li>
                <?php $cCardArticle = array('extraClass' => '--small');
                include('parts/components/c-cardArticle.php');?>
            </li>
            <li>
                <?php $cCardArticle = array('extraClass' => '--small');
                include('parts/components/c-cardArticle.php');?>
            </li>
            <li>
                <?php $cCardArticle = array('extraClass' => '--small');
                include('parts/components/c-cardArticle.php');?>
            </li>
            <li>
                <?php $cCardArticle = array('extraClass' => '--small');
                include('parts/components/c-cardArticle.php');?>
            </li>
            <li>
                <?php $cCardArticle = array('extraClass' => '--small');
                include('parts/components/c-cardArticle.php');?>
            </li>
            <li>
                <?php $cCardArticle = array('extraClass' => '--small');
                include('parts/components/c-cardArticle.php');?>
            </li>
        </ul>
    </div>
</section>
<!--Post Aberto-->
<section class="s-openArticle">
    div.c-breadcrumb
    article
        article__header
        article__share
            c-share
        article__content
        article__footer
            c-btn
</section>

<!--Previsão do Tempo-->
<section class="s-defaultSection">
    <div class="s-defaultSection__head">
        <div class="c-micTitle">
            <div class="c-micTitle__content">
                <h4 class="c-micTitle__title">
                    <a href="#">Previsão do tempo - Layout</a>
                </h4>
                <div class="c-micTitle__more">
                    <a href="#"><?php include('media/img/icons/icon_plus.svg'); ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="s-defaultSection__content">
        <ul class="c-gridArticles --simple">
            <li>
                <?php
                $cVideo = array(
                    'extraClass' => '--noIcon',
                    'link' => '#',
                    'cover' => 'media/img/content/cVideo.jpg',
                    'title' => 'Previsão do tempo');
                include('parts/components/c-video.php')
                ?>
            </li>
            <li>
                <ul class="c-listSweather">
                    <li>
                        <?php
                        $cCardSweather = array(
                            'extraClass' => '--onlyMinMax --fixedSizes --secondary --iconPrimary',
                            'city' => 'Araranguá',
                            'icon' => '6',
                            'temp_current' => '',
                            'temp_min' => '11º',
                            'temp_max' => '20º',
                            'rain' => '100%');
                        include('parts/components/c-cardSweather.php');
                        ?>
                    </li>
                    <li>
                        <?php
                        $cCardSweather = array(
                            'extraClass' => '--onlyMinMax --fixedSizes --secondary --iconPrimary',
                            'city' => 'Arroio do Silva',
                            'icon' => '8',
                            'temp_current' => '',
                            'temp_min' => '17',
                            'temp_max' => '27º',
                            'rain' => '94%');
                        include('parts/components/c-cardSweather.php');
                        ?>
                    </li>
                    <li>
                        <?php
                        $cCardSweather = array(
                            'extraClass' => '--onlyMinMax --fixedSizes --secondary --iconPrimary',
                            'city' => 'Maracajá',
                            'icon' => '4',
                            'temp_current' => '',
                            'temp_min' => '17',
                            'temp_max' => '27º',
                            'rain' => '94%');
                        include('parts/components/c-cardSweather.php');
                        ?>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</section>

<!--Previsão do Tempo - Sugestão-->
<section class="s-defaultSection">
    <div class="s-defaultSection__head">
        <div class="c-micTitle">
            <div class="c-micTitle__content">
                <h4 class="c-micTitle__title">
                    <a href="#">Previsão do tempo - Sugestão</a>
                </h4>
                <div class="c-micTitle__more">
                    <a href="#"><?php include('media/img/icons/icon_plus.svg'); ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="s-defaultSection__content">
        <ul class="c-gridArticles --list">
            <li>
                <?php
                $cVideo = array(
                    'extraClass' => '--noIcon',
                    'link' => '#',
                    'cover' => 'media/img/content/cVideo.jpg',
                    'title' => 'Previsão do tempo');
                include('parts/components/c-video.php');
                ?>
            </li>
            <li>
                <ul class="c-listSweather">
                    <li>
                        <?php
                        $cCardSweather = array(
                            'extraClass' => '--onlyMinMax --fixedSizes --secondary --iconPrimary',
                            'city' => 'Araranguá',
                            'icon' => '6',
                            'temp_current' => '',
                            'temp_min' => '11º',
                            'temp_max' => '20º',
                            'rain' => '100%');
                        include('parts/components/c-cardSweather.php');
                        ?>
                    </li>
                    <li>
                        <?php
                        $cCardSweather = array(
                            'extraClass' => '--onlyMinMax --fixedSizes --secondary --iconPrimary',
                            'city' => 'Arroio do Silva',
                            'icon' => '8',
                            'temp_current' => '',
                            'temp_min' => '17',
                            'temp_max' => '27º',
                            'rain' => '94%');
                        include('parts/components/c-cardSweather.php');
                        ?>
                    </li>
                    <li>
                        <?php
                        $cCardSweather = array(
                            'extraClass' => '--onlyMinMax --fixedSizes --secondary --iconPrimary',
                            'city' => 'Maracajá',
                            'icon' => '4',
                            'temp_current' => '',
                            'temp_min' => '17',
                            'temp_max' => '27º',
                            'rain' => '94%');
                        include('parts/components/c-cardSweather.php');
                        ?>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</section>

<!--Publicidade-->
<!--Contato-->