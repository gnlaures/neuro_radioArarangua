<section class="s-defaultSection">
    <div class="s-defaultSection__head">
        <div class="c-micTitle">
            <div class="c-micTitle__content">
                <h4 class="c-micTitle__title">
                    <a href="#">Sobre a Rádio Araranguá</a>
                </h4>
            </div>
        </div>
    </div>
    <div class="s-defaultSection__content">
        <div class="c-plainText">
            <p>Com mais de 70 anos de história, a <a href="#">Rádio Araranguá</a> é o principal veículo de comunicação do Vale do Araranguá e da AMESC. Pioneira no AM, uma rádio de vanguarda e forte presença comunitária, agora com muito mais qualidade de sinal e programação nas ondas do FM 95.5. </p>
            <p>A Rádio Araranguá é a principal voz da comunidade, com um jornalismo atuante e  apresentando mais de 12 horas por dia com conteúdos e informações políticas, econômicas, sociais, religiosas, esportivas e de entretenimento.</p>
            <p><strong class="u-color-primary">Rádio Araranguá FM 95.5: A informação em primeiro lugar!</strong></p>
            <figure>
                <a href="media/img/content/cardArticle.jpg" data-fancybox="post-images">
                    <img src="media/img/content/cardArticle.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, impedit.">
                </a>
                <figcaption>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, impedit.</figcaption>
            </figure>
        </div>
    </div>
</section>
<section class="s-defaultSection">
    <div class="s-defaultSection__head">
        <div class="c-micTitle">
            <div class="c-micTitle__content">
                <h4 class="c-micTitle__title">
                    <a href="#">Equipe</a>
                </h4>
            </div>
        </div>
    </div>
    <div class="s-defaultSection__content">
        <ul class="c-responsiveGrid --start --fitContent --pad7"
            data-maxw-breaks="760"
            data-maxw-cols="1"
            data-cols-init="2">
            <li>
                <?php
                $cCardColumnist = array(
                    'extraClass' => '--horizontal',
                    'link' => '#',
                    'img' => 'media/img/content/colunista.png',
                    'name' => 'Jairo Silva',
                    'tagline' => 'entreterimento & viagens');
                include('parts/components/c-cardColumnist.php')
                ?>
            </li>
            <li>
                <?php
                $cCardColumnist = array(
                    'extraClass' => '--horizontal',
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
                    'extraClass' => '--horizontal',
                    'link' => '#',
                    'img' => 'media/img/content/colunista.png',
                    'name' => 'Jairo Silva',
                    'tagline' => 'entreterimento & viagens');
                include('parts/components/c-cardColumnist.php')
                ?>
            </li>
            <li>
                <?php
                $cCardColumnist = array(
                    'extraClass' => '--horizontal',
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
                    'extraClass' => '--horizontal',
                    'link' => '#',
                    'img' => 'media/img/content/colunista.png',
                    'name' => 'Jairo Silva',
                    'tagline' => 'entreterimento & viagens');
                include('parts/components/c-cardColumnist.php')
                ?>
            </li>
            <li>
                <?php
                $cCardColumnist = array(
                    'extraClass' => '--horizontal',
                    'link' => '#',
                    'img' => 'media/img/content/colunista.png',
                    'name' => 'Jairo Silva',
                    'tagline' => 'Esportivo');
                include('parts/components/c-cardColumnist.php')
                ?>
            </li>
        </ul>
    </div>
</section>
<section class="s-defaultSection">
    <div class="s-defaultSection__head">
        <div class="c-micTitle">
            <div class="c-micTitle__content">
                <h4 class="c-micTitle__title">
                    <a href="#">Programação</a>
                </h4>
            </div>
        </div>
    </div>
    <div class="s-defaultSection__content">
        <?php include('parts/components/c-tabWeekSchedule.php')?>
    </div>
</section>
<section class="s-defaultSection">
    <div class="s-defaultSection__head">
        <div class="c-micTitle">
            <div class="c-micTitle__content">
                <h4 class="c-micTitle__title">
                    <a href="#">Mídia Kit</a>
                </h4>
            </div>
        </div>
    </div>
    <div class="s-defaultSection__content">
        <div class="c-midiaKit">
            <div class="c-midiaKit__content">
                <div class="c-plainText">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dictum ornare vestibulum quis nec tra. Fermentum in ut volutpat urna porta.</p>
                </div>
            </div>
            <div class="c-midiaKit__cta">
                <a href="#" class="c-btn --s --stroke --secondary u-ttu">
                    <div class="c-btn__content">
                        <i class="c-btn__icon"><?php include('media/img/icons/icon_download.svg');?></i>
                        <span class="c-btn__caption">Baixar o Mídia Kit</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>