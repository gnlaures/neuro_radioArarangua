<div class="c-cardSweather <?php echo $cCardSweather["extraClass"] ?>">
    <div class="c-cardSweather__city"><?php echo $cCardSweather["city"] ?></div>
    <div class="c-cardSweather__temp --current">
        <span class="temp"><?php echo $cCardSweather["temp_current"] ?></span>
    </div>
    <div class="c-cardSweather__icon">
        <?php include('media/img/icons_sweather/'.$cCardSweather["icon"].'.svg'); ?>
    </div>
    <div class="c-cardSweather__temp --min">
        <span class="caption">Min</span>
        <span class="temp"><?php echo $cCardSweather["temp_min"] ?></span>
    </div>
    <div class="c-cardSweather__temp --max">
        <span class="caption">Max</span>
        <span class="temp"><?php echo $cCardSweather["temp_max"] ?></span>
    </div>
    <div class="c-cardSweather__rain">
        <i><?php include('media/img/icons_sweather/9.svg'); ?></i>
        <span><?php echo $cCardSweather["rain"] ?></span>
    </div>
</div>