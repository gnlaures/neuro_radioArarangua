<div class="l-nav">
    <div class="l-nav__primary">
        <div class="l-nav__brand">
            <?php $cBrand = array('brandModifier' => '', 'url' => 'home');
            include('parts/components/c-brand.php'); ?>
        </div>
        <div class="l-nav__global">
            <div class="u-container">
                <a href="#" class="c-cardSweather">
                    <div class="c-cardSweather__title">Arrio do Silva</div>
                    <div class="c-cardSweather__currentTemp">23º</div>
                    <div class="c-cardSweather__icon">icon</div>
                </a>
                <?php $cSocialList = array('extraClass' => '--rounded --colored');
                include('parts/components/c-socialList.php')?>
            </div>
        </div>
        <div class="l-nav__main">
            <div class="u-container">
                <div class="c-whatsappBtn">
                    <p>Entre em contato pelo Whatsapp</p>
                    <a href="#" class="c-btn --wpp --icon">
                        <i></i>
                        <span>48 9880-84667</span>
                    </a>
                </div>
                <div class="c-liveRadioBtn">
                    <a href="#" class="c-btn --primary --icon is-online">
                        <i></i>
                        <span>Ao Vivo</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="l-nav__menu">
        <div class="u-container">
            <div class="l-nav__menu__itens">
                <?php $cMainMenu = array('extraClass' => '--primary --click');
                include('parts/components/c-mainMenu.php'); ?>
            </div>
            <div class="l-nav__menu__search">
                <span class="js-l-nav__open">
                    search
                </span>
            </div>
        </div>
    </div>
    <div class="l-nav__search">
        <div class="u-container u-dflex u-jcfe">
            <form action="#" class="c-search">
                <button>icon</button>
                <input type="search" placeholder="Digite sua pesquisa...">
            </form>
        </div>
    </div>
</div>



<nav class="l-nav">
    <div class="l-nav__main">
        <div class="u-container">
            <div class="l-nav__brand">
                <?php $cBrand = array('brandModifier' => '', 'url' => 'home');
                include('parts/components/c-brand.php'); ?>
            </div>
            <div class="l-nav__content">
                <div class="l-nav__search">
                    <?php $cSearch = array('placeholder' => '');
                    include('parts/components/c-search.php'); ?>
                </div>
                <div class="l-nav__lang">
                    <?php $cLanguages = array('extraClassMenu' => '--black --click');
                    include('parts/components/c-languages.php'); ?>
                </div>
                <div class="l-nav__menu">
                    <?php $cMainMenu = array('extraClass' => '--black --click');
                    include('parts/components/c-mainMenu.php'); ?>
                </div>
            </div>
            <div class="l-nav__hamburguer">
                <?php $cHamburguer = array('extraClass' => '--primary --regular --rounded js-openNavMobile');
                include('parts/components/c-hamburguer.php'); ?>
            </div>
        </div>
    </div>
</nav>

<div class="l-navMobile">
    <div class="l-navMobile__mask js-closeNavMobile"></div>
    <div class="l-navMobile__content --right">
        <div class="l-navMobile__close">
            <?php $cHamburguer = array('extraClass' => '--primary --regular --rounded js-closeNavMobile is-active');
            include('parts/components/c-hamburguer.php'); ?>
        </div>
        <div class="l-navMobile__hero">
            <div class="l-navMobile__search">
                <?php $cSearch = array('placeholder' => '');
                include('parts/components/c-search.php'); ?>
            </div>
            <div class="l-navMobile__menu">
                <?php $cMainMenu = array('extraClass' => '--black --vertical --click');
                include('parts/components/c-mainMenu.php'); ?>
            </div>
            <div class="l-navMobile__lang">
                <?php $cLanguages = array('extraClassMenu' => '--black --vertical --click');
                include('parts/components/c-languages.php'); ?>
            </div>
        </div>
    </div>
</div>
