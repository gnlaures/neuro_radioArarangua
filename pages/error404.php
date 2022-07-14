<section class="s-defaultSection">
    <div class="s-defaultSection__content">
        <div class="c-error404">
            <h2>404</h2>
            <p>Página não encontrada</p>
            <a href="#" class="c-btn --m --primary">
                <div class="c-btn__content">
                    <span class="c-btn__caption">Voltar para página inicial</span>
                </div>
            </a>
        </div>
    </div>
</section>
<section class="s-defaultSection">
    <div class="s-defaultSection__head">
        <div class="c-micTitle">
            <div class="c-micTitle__content">
                <h4 class="c-micTitle__title">
                    <a href="#">Últimas Notícias</a>
                </h4>
            </div>
        </div>
    </div>
    <div class="s-defaultSection__content">
        <ul class="c-gridArticles --fullList">
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
        <?php include('parts/components/c-pagination.php');?>
    </div>
</section>