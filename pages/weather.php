<section class="s-defaultSection">
    <div class="s-defaultSection__head">
        <div class="c-micTitle">
            <div class="c-micTitle__content">
                <h4 class="c-micTitle__title">
                    <a href="#">Previsão do tempo</a>
                </h4>
            </div>
        </div>
    </div>
    <div class="s-defaultSection__content">
        <ul class="c-responsiveGrid --start --pad10"
            data-maxw-breaks="1080"
            data-maxw-cols="1"
            data-cols-init="2">
            <li>
                <?php
                $cVideo = array(
                    'extraClass' => '--noIcon',
                    'link' => 'https://www.youtube.com/watch?v=RDEROy3CvjM',
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
<section class="s-defaultSection">
    <div class="s-defaultSection__head">
        <div class="c-micTitle">
            <div class="c-micTitle__content">
                <h4 class="c-micTitle__title">
                    <a href="#">Previsão do tempo - Sugestão de layout</a>
                </h4>
                <div class="c-micTitle__more">
                    <a href="#"><?php include('media/img/icons/icon_plus.svg'); ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="s-defaultSection__content">
        <?php
        $cVideo = array(
            'extraClass' => '',
            'link' => '#',
            'cover' => 'media/img/content/cVideo.jpg',
            'title' => 'Previsão do tempo');
        include('parts/components/c-video.php');
        ?>
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
    </div>
</section>