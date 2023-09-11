<section class="news" id="news">
    <div class="news__inner inner">
        <h2 class="news-ttl sec-ttl">News<span class="news-ttl-ruby sec-ttl-ruby">お知らせ</span></h2>
        <div class="splide2 splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php
                    $args = array(
                        'post_type' => 'news',
                        'posts_per_page' => 9,
                        'order' => 'ASC'

                    );
                    $my_query = new WP_Query($args); ?>
                    <?php if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); ?>
                            <li class="splide__slide">
                                <div class="splide__slide__body">
                                    <div class="splide__slide__body__txt">
                                        <h4 class="splide__slide__body__txt-ttl"><?php the_title(); ?></h4>
                                        <p class="splide__slide__body__txt-desc"><?php the_field('detail'); ?></p>
                                    </div>
                                    <div class="splide__slide__head">
                                        <p class="splide__slide__head-label"><?php echo get_the_term_list($post->ID, 'news-category'); ?></p>
                                        <time class="splide__slide__head-data" date-time="<?php echo get_the_time("Y年n月j日"); ?>"><?php echo get_the_time("Y年n月j日"); ?></time>
                                    </div>
                                </div>
                                <figure class="splide__slide__thumb">
                                    <img src='<?php the_field('news_thumbnail'); ?>' alt=''>
                                </figure>
                            </li>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <li class="splide__slide">
                            <div class="splide__slide__body">
                                <div class="splide__slide__body__txt">
                                    <h4 class="splide__slide__body__txt-ttl">新しいお知らせまで少々お待ちください。</h4>
                                    </h4>
                                </div>
                                <div class="splide__slide__head">
                                    <p class="splide__slide__head-label"><?php echo get_the_term_list($post->ID, 'news-category'); ?></p>
                                </div>
                            </div>
                            <figure class="splide__slide__thumb">
                                <img src='<?php the_field('news_thumbnail'); ?>' alt=''>
                            </figure>
                        </li>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </ul>
            </div>
            <div class="splide__arrows">
                <button class="splide__arrow splide__arrow--prev button prev"></button>
                <button class="splide__arrow splide__arrow--next button next"></button>
            </div>
        </div>
    </div>
</section>