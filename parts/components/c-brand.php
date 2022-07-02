<?php
    if($cBrand["brandModifier"] === '--white') {
        $cBrand['brandPath'] = 'media/img/assets/brand_white.png';
    } else {
        $cBrand['brandPath'] = 'media/img/assets/brand.png';
    }
?>

<div class="c-brand">
    <a href="<?php echo $cBrand["url"] ?>" title="Decortiles">
        <img src="<?php echo $cBrand["brandPath"] ?>" alt="Decortiles">
    </a>
</div>
