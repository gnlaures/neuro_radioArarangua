<div class="c-cardVideo <?php echo $cCardVideo["extraClass"] ?>">
    <a href="<?php echo $cCardVideo["link"] ?>" class="c-cardVideo__content" data-fancybox="video-gallery">
        <div class="c-cardVideo__figure">
            <figure class="u-aspectRatio --ratio-4-3">
                <img src="<?php echo $cCardVideo["img"] ?>" alt="<?php echo $cCardVideo["title"] ?>">
            </figure>
            <i><?php include('media/img/icons/icon_play.svg'); ?></i>
        </div>
        <div class="c-cardVideo__title">
            <h3><?php echo $cCardVideo["title"] ?></h3>
        </div>
    </a>
    <div class="c-cardVideo__share">
        <ul class="c-socialList">
            <li><a href="#" class="c-btnIcon --wpp --bg --m"><?php include('media/img/icons_social/social_wpp_white.svg');?></a></li>
            <li><a href="#" class="c-btnIcon --twitter --bg --m"><?php include('media/img/icons_social/social_twitter_white.svg');?></a></li>
            <li><a href="#" class="c-btnIcon --facebook --bg --m"><?php include('media/img/icons_social/social_facebook_white.svg');?></a></li>
            <li><a href="#" class="c-btnIcon --linkedin --bg --m"><?php include('media/img/icons_social/social_linkedin_white.svg');?></a></li>
        </ul>
    </div>
</div>