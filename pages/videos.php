<section class="s-defaultSection">
    <div class="s-defaultSection__head">
        <div class="c-micTitle">
            <div class="c-micTitle__content">
                <h4 class="c-micTitle__title">
                    <a href="#">Vídeos</a>
                </h4>
            </div>
        </div>
    </div>
    <div class="s-defaultSection__content">
        <ul class="c-responsiveGrid --start --pad10 --fitContent"
            data-maxw-breaks="950, 780, 580"
            data-maxw-cols="1, 2, 1"
            data-cols-init="2">
            <li>
                <?php
                    $cCardVideo = array(
                        'extraClass' => '',
                        'link' => 'https://www.youtube.com/watch?v=RDEROy3CvjM',
                        'img' => 'media/img/content/cardArticle.jpg',
                        'title' => 'Projeto de revitalização do Calçadão de Araranguá');
                    include('parts/components/c-cardVideo.php');
                ?>
            </li>
            <li>
                <?php
                $cCardVideo = array(
                    'extraClass' => '',
                    'link' => 'https://www.youtube.com/watch?v=RDEROy3CvjM',
                    'img' => 'media/img/content/cardArticle.jpg',
                    'title' => 'Projeto de revitalização do Calçadão de Araranguá');
                include('parts/components/c-cardVideo.php');
                ?>
            </li>
            <li>
                <?php
                $cCardVideo = array(
                    'extraClass' => '',
                    'link' => 'https://www.youtube.com/watch?v=RDEROy3CvjM',
                    'img' => 'media/img/content/cardArticle.jpg',
                    'title' => 'Projeto de revitalização do Calçadão de Araranguá');
                include('parts/components/c-cardVideo.php');
                ?>
            </li>
            <li>
                <?php
                $cCardVideo = array(
                    'extraClass' => '',
                    'link' => 'https://www.youtube.com/watch?v=RDEROy3CvjM',
                    'img' => 'media/img/content/cardArticle.jpg',
                    'title' => 'Projeto de revitalização do Calçadão de Araranguá');
                include('parts/components/c-cardVideo.php');
                ?>
            </li>
        </ul>
        <?php include('parts/components/c-pagination.php');?>
    </div>
</section>