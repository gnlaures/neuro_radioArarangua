<section class="s-defaultSection">
    <div class="s-defaultSection__content">
        <ul class="c-gridArticles --simple">
            <li><?php include('parts/components/c-cardArticle.php')?></li>
            <li><?php include('parts/components/c-cardArticle.php')?></li>
            <li><?php include('parts/components/c-cardArticle.php')?></li>
            <li><?php include('parts/components/c-cardArticle.php')?></li>
            <li><?php include('parts/components/c-cardArticle.php')?></li>
            <li><?php include('parts/components/c-cardArticle.php')?></li>
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
            <li><?php include('parts/components/c-cardArticle.php')?></li>
            <li><?php include('parts/components/c-cardArticle.php')?></li>
            <li><?php include('parts/components/c-cardArticle.php')?></li>
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
            <li><?php include('parts/components/c-cardArticle.php')?></li>
            <li><?php include('parts/components/c-cardArticle.php')?></li>
            <li><?php include('parts/components/c-cardArticle.php')?></li>
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
            <li><?php include('parts/components/c-cardArticle.php')?></li>
            <li><?php include('parts/components/c-cardArticle.php')?></li>
            <li><?php include('parts/components/c-cardArticle.php')?></li>
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