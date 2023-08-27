<section class="interview" id="interview">
    <div class="interview__inner inner">
        <h3 class="interview-ttl about__sec-ttl">人を知る</h3>
        <div class="interview__head">
            <h4 class="interview__head-ttl">Interview<span class="interview__head-ruby">働く仲間を知る</span></h4>
            <figure class="interview__head__thumb">
                <picture>
                    <source srcset='<?php echo ImgPath; ?>/webp/interview-main.webp' type='image/webp'>
                    <img src="<?php echo ImgPath; ?>/interview-main.jpg" alt="">
                </picture>
            </figure>
        </div>
        <div class="splide1 splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php
                    $args = array(
                        'post_type' => 'interview',
                        'posts_per_page' => 9
                    ); ?>
                    <?php if (wp_is_mobile())
                        $args = array(
                            'post_type' => 'interview',
                            'posts_per_page' => 3
                        );
                    $my_query = new WP_Query($args); ?>
                    <?php if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); ?>
                            <li class="splide__slide">
                                <a href="<?php the_permalink(); ?>" class="splide__slide-link">
                                    <div class="splide__slide__body">
                                        <div class="splide__slide__body__txt">
                                            <h4 class="splide__slide__body__txt-ttl"><?php the_title(); ?></h4>
                                            <p class="splide__slide__body__txt-desc"><?php the_field('desc'); ?></p>
                                        </div>
                                        <div class="splide__slide__head">
                                            <p class="splide__slide__head-label">-
                                                <?php
                                                $terms = get_the_terms($post->ID, 'division');
                                                if ($terms) :
                                                    foreach ($terms as $term) {
                                                        echo  $term->name;
                                                    }
                                                endif;
                                                ?>
                                            </p>
                                            <time class="splide__slide__head-data" date-time="<?php echo get_the_time('Y/m/d'); ?>"><?php echo get_the_time('Y/m/d'); ?></time>
                                        </div>
                                    </div>
                                    <figure class="splide__slide__thumb">
                                        <img src="<?php the_field('thumbnail'); ?>" alt="">
                                        <figcaption class="splide__slide__thumb-caption splide__slide__thumb-caption01"><?php the_field('thumbnail-name01'); ?></figcaption>
                                        <figcaption class="splide__slide__thumb-caption splide__slide__thumb-caption02"><?php the_field('thumbnail-name02'); ?></figcaption>
                                    </figure>
                                </a>
                            </li>
                    <?php endwhile;
                    endif;
                    wp_reset_postdata(); ?>
                </ul>
            </div>
            <div class="splide__arrows">
                <button class="splide__arrow splide__arrow--prev button prev"></button>
                <button class="splide__arrow splide__arrow--next button next"></button>
                <a href="<?php echo esc_url(home_url("/interview")); ?>" class="btn">
                    <figure class="btn-txt">
                        <picture>
                            <source srcset='<?php echo ImgPath; ?>/webp/view-more.webp' type='image/webp'>
                            <img src='<?php echo ImgPath; ?>/view-more.png' alt=''>
                        </picture>
                    </figure>
                </a>
            </div>
        </div>
    </div>
</section>