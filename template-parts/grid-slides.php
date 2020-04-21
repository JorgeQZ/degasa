<?php
// Variables de slides
$bloque_4 = get_field('bloque_4');
$slide_0 = get_field('slides', $bloque_4[0]['slider']->ID);
$slide_1 = get_field('slides', $bloque_4[1]['slider']->ID);
$slide_2 = get_field('slides', $bloque_4[2]['slider']->ID);
$slide_3 = get_field('slides', $bloque_4[3]['slider']->ID);
$slide_4 = get_field('slides', $bloque_4[4]['slider']->ID);
?>
<div class="grid-slider">
    <div class="col">
        <div class="owl-carousel owl-theme col-1-slider slide-projects">
            <?php foreach ($slide_0 as $key => $value) : ?>
            <div class="item" style="background-image: url(<?php echo $value['image']?>)"></div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="col">
        <div class="row">
            <div class="owl-carousel owl-theme col-1-slider slide-projects">
                <?php foreach ($slide_1 as $key => $value) : ?>
                <div class="item" style="background-image: url(<?php echo $value['image']?>)"></div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="row">
            <div class="owl-carousel owl-theme col-1-slider slide-projects">
                <?php foreach ($slide_2 as $key => $value) : ?>
                <div class="item" style="background-image: url(<?php echo $value['image']?>)"></div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="row">
            <div class="owl-carousel owl-theme col-1-slider slide-projects">
                <?php foreach ($slide_3 as $key => $value) : ?>
                <div class="item" style="background-image: url(<?php echo $value['image']?>)"></div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="row">
            <div class="owl-carousel owl-theme col-1-slider slide-projects">
                <?php foreach ($slide_4 as $key => $value) : ?>
                <div class="item" style="background-image: url(<?php echo $value['image']?>)"></div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
