
Rádio Araranguá

# _source/components

## c-btn
| Modificadores | Classes                         | 
| :------------ | :--------------------------- | 
| `sizes`       | `--l` <br> `--m` <br> `--s` | 
| `types`       | `--stroke` | 
| `themes`      | `--primary` <br> `--secondary` <br> `--white` <br> `--wpp` <br> `--gray`|
| `extra`      | `--disabled` <br> `--noEvents`|
```html
<a href="#" class="c-btn --l --wpp">
    <div class="c-btn__content">
        <i class="c-btn__icon"><?php include('media/img/icons_social/social_wpp_white.svg');?></i>
        <span class="c-btn__caption">48 9999-99999</span>
    </div>
</a>
```

---

## c-btnIcon
| Modificadores | Classes                         | 
| :------------ | :--------------------------- | 
| `sizes`       | `--l` <br> `--m` <br> `--s` | 
| `types`       | `--bg` <br> `--stroke` <br> `--isolated` | 
| `themes`      | `--primary` <br> `--secondary` <br> `--white` <br> `--wpp` <br> `--facebook` <br> `--twitter` 
<br> `--instagram` <br> `--linkedin` <br> `--youtube` <br> `--spotify`|
```html
<a href="#" class="c-btnIcon --twitter --bg --m">
    <?php include('media/img/icons_social/social_twitter_white.svg');?>
</a>
```

---

## c-btnRadioOnOff
| Modificadores | Classes                         | 
| :------------ | :--------------------------- | 
| `status`       | `--on` <br> `--off` |
```html
<a href="#" class="c-btnRadioOnOff --off c-btn --l --secondary" title="Ao Vivo">
    <div class="c-btn__content">
        <i class="c-btn__icon"><span></span></i>
        <span class="c-btn__caption">Ao Vivo</span>
    </div>
</a>
```

---

## c-hamburguer
| Modificadores | Classes                         | 
| :------------ | :--------------------------- | 
| `sizes`       | `--l` <br> `--m` <br> `--s` |
| `themes`      | `--primary` <br> `--secondary` <br> `--white`|
```html
<div class="c-hamburguer --white --l">
    <span class="c-hamburguer__bar --bar1"></span>
    <span class="c-hamburguer__bar --bar2"></span>
    <span class="c-hamburguer__bar --bar3"></span>
</div>
```

---

## c-cardSweather
| Modificadores | Classes                         | 
| :------------ | :--------------------------- | 
| `content`       | `--onlyCurrentInfos` |
| `themes`      | `--primary` <br> `--secondary` <br> `--white`|
```php
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
```

---
## c-smartMenu
| Modificadores | Classes                         | 
| :------------ | :--------------------------- | 
| `style`       | `--vertical` |
| `js`       | `--click` |
| `themes`      | `--primary` <br> `--secondary` <br> `--white`|
| `themes extra options`      | `--forceMainCaretWhite` <br>`--forceMainCaretDark` <br> `--forceAllCaretsWhite` <br> `--forceAllCaretsDark` <br> `--forceMainLinkColorWhite` <br> `--forceMainLinkColorGray`  <br>`--forceMainLinkColorPrimary` <br> `--forceMainLinkColorSecondary`|
```html
<div class="c-smartMenu --click --white">
    <ul>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li>
            <a href="#">Link Com Sub Menu</a>
            <ul>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li>
                    <a href="#">Link Com Sub Menu</a>
                    <ul>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</div>
```



 
---
---
---
---
---