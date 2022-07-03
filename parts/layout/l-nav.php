<div class="l-nav">
    <div class="l-nav__global">
        <div class="l-nav__global__primary">
            <div class="u-container">
                <div class="l-nav__global__primary__brand">
                    <div class="c-brand">
                        <a href="home" title="Rádio Araranguá">
                            <img src="media/img/assets/brand.svg" alt="Rádio Araranguá">
                        </a>
                    </div>
                </div>
                <div class="l-nav__global__primary__content">
                    <?php
                        $cCardSweather = array(
                                'extraClass' => '--onlyCurrentInfos --white',
                                'city' => 'Arroio do Silva',
                                'icon' => '5',
                                'temp_current' => '20º',
                                'temp_min' => '15º',
                                'temp_max' => '22º',
                                'rain' => '48%');
                        include('parts/components/c-cardSweather.php');
                    ?>
                    <ul class="c-socialList">
                        <li><a href="#" class="c-btnIcon --twitter --bg --m"><?php include('media/img/icons_social/social_twitter_white.svg');?></a></li>
                        <li><a href="#" class="c-btnIcon --facebook --bg --m"><?php include('media/img/icons_social/social_facebook_white.svg');?></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="l-nav__global__secondary">
            <div class="u-container u-dflex u-jcfe u-aic">
                <ul>
                    <li>
                        <p>Entre em contato pelo Whatsapp</p>
                    </li>
                    <li>
                        <a href="#" class="c-btn --l --wpp">
                            <div class="c-btn__content">
                                <i class="c-btn__icon"><?php include('media/img/icons_social/social_wpp_white.svg');?></i>
                                <span class="c-btn__caption">48 9880-84667</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="c-btnRadioOnOff --off c-btn --l --secondary" title="Ao Vivo">
                            <div class="c-btn__content">
                                <i class="c-btn__icon"><span></span></i>
                                <span class="c-btn__caption">Ao Vivo</span>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="c-hamburguer --white --l js-openNavMobile">
                    <span class="c-hamburguer__bar --bar1"></span>
                    <span class="c-hamburguer__bar --bar2"></span>
                    <span class="c-hamburguer__bar --bar3"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="l-nav__main">
        <div class="u-container">
            <div class="l-nav__main__menu">
                <?php $cMainMenu = array('extraClass' => '--secondary');
                include('parts/components/c-mainMenu.php'); ?>
            </div>
            <div class="l-nav__main__search">
                <span class="js-l-nav__toggleSearch">
                    <?php include('media/img/icons/icon_search.svg'); ?>
                </span>
            </div>
        </div>
    </div>
    <div class="l-nav__search">
        <div class="u-container u-dflex u-jcfe">
            <form action="#" class="c-search --white">
                <div>
                    <?php include('media/img/icons/icon_search.svg'); ?>
                    <input type="search" placeholder="Digite sua pesquisa...">
                </div>
            </form>
        </div>
    </div>
</div>

<div class="l-navMobile">
    <div class="l-navMobile__mask js-closeNavMobile"></div>
    <div class="l-navMobile__content --right">
        <div class="l-navMobile__content__hero u-bg-secondary">
            <div class="l-navMobile__widget --search">
                <form action="#" class="c-search --white">
                    <div>
                        <?php include('media/img/icons/icon_search.svg'); ?>
                        <input type="search" placeholder="Digite sua pesquisa...">
                    </div>
                </form>
            </div>
            <div class="l-navMobile__widget --social">
                <ul>
                    <li>
                        <a href="#" class="c-socialUser">
                            <div class="c-socialUser__icon">
                                <span class="c-btnIcon --twitter --bg --m"><?php include('media/img/icons_social/social_twitter_white.svg');?></span>
                            </div>
                            <div class="c-socialUser__content">
                                <span class="title">Twitter</span>
                                <span class="caption">/radioararangua</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="c-socialUser">
                            <div class="c-socialUser__icon">
                                <span class="c-btnIcon --facebook --bg --m"><?php include('media/img/icons_social/social_facebook_white.svg');?></span>
                            </div>
                            <div class="c-socialUser__content">
                                <span class="title">Facebook</span>
                                <span class="caption">/radioararangua</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="l-navMobile__content__hero">
            <div class="l-navMobile__widget --wpp">
                <h4>Entre em contato pelo Whatsapp</h4>
                <a href="#" class="c-btn --m --wpp">
                    <div class="c-btn__content">
                        <i class="c-btn__icon"><?php include('media/img/icons_social/social_wpp_white.svg');?></i>
                        <span class="c-btn__caption">48 9880-84667</span>
                    </div>
                </a>
            </div>
            <div class="l-navMobile__widget --menu">
                <h4>Menu</h4>
                <?php $cMainMenu = array('extraClass' => '--vertical --gray --click');
                include('parts/components/c-mainMenu.php'); ?>
            </div>
        </div>
    </div>
</div>
