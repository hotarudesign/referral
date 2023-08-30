<div class="mv">
    <div class="splide splide3">
        <div class="splide__track">
            <div class="splide__list">
                <div class="splide__slide">
                    <picture>
                        <source srcset='<?php echo ImgPath; ?>/webp/mv01.webp' type='image/webp'>
                        <img src='<?php echo ImgPath; ?>/mv01.jpg' alt=''>
                    </picture>
                </div>
                <div class="splide__slide">
                    <picture>
                        <source srcset='<?php echo ImgPath; ?>/webp/mv02.webp' type='image/webp'>
                        <img src='<?php echo ImgPath; ?>/mv02.jpg' alt=''>
                    </picture>
                </div>
                <div class="splide__slide">
                    <picture>
                        <source srcset='<?php echo ImgPath; ?>/webp/mv03.webp' type='image/webp'>
                        <img src='<?php echo ImgPath; ?>/mv03.jpg' alt=''>
                    </picture>
                </div>
            </div>
        </div>
    </div>
    <div class="mv__inner inner">
        <p class="mv__foot-label sp">
            <picture>
                <source srcset='<?php echo ImgPath; ?>/webp/mv_foot-label.webp' type='image/webp'>
                <img src="<?php echo ImgPath; ?>/mv_foot-label.png" alt="">
            </picture>
        </p>
        <div class="hero">
            <h2 class="hero__ttl">
                <picture>
                    <source srcset='<?php echo ImgPath; ?>/webp/mv-ttl.webp' type='image/webp'>
                    <img src="<?php echo ImgPath; ?>/mv-ttl.png" alt="">
                </picture>
            </h2>
        </div>
        <div class="mv__foot">
            <p class="mv__foot-label pc">
                <picture>
                    <source srcset='<?php echo ImgPath; ?>/webp/mv_foot-label.webp' type='image/webp'>
                    <img src="<?php echo ImgPath; ?>/mv_foot-label.png" alt="">
                </picture>
            </p>
            <?php
            if (is_front_page())
                get_template_part('parts/home/fix-link-sp'); ?>
            <!-- <a href="" class="mv__foot__link">
                <figure class="mv__foot__thumb">
                    <picture>
                        <source srcset='<?php echo ImgPath; ?>/webp/mv_thumb.webp' type='image/webp'>
                        <img src='<?php echo ImgPath; ?>/mv_thumb.png' alt=''>
                    </picture>
                    <figcaption class="mv__foot__thumb-caption">
                        <p class="mv__foot__thumb-txt">座談会の様子はこちら</p>
                        <picture>
                            <source srcset='<?php echo ImgPath; ?>/webp/caption-arrow.webp' type='image/webp'>
                            <img class="mv__foot__thumb-icon" src="<?php echo ImgPath; ?>/caption-arrow.png" alt="">
                        </picture>
                    </figcaption>
                </figure>
            </a> -->
        </div>
    </div>
</div>