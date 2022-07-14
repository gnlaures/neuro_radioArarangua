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
        <div class="u-container u-dflex u-jcsb">
            <div class="l-mainContent__content">
                <?php include($file); ?>
            </div>
            <div class="l-mainContent__aside">
                <?php include('parts/layout/l-sidebar.php');?>
            </div>
        </div>
    </div>
</main>