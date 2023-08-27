<?php get_header(); ?>
<main class="main">
    <div class="interview">
        <div class="interview__inner inner">
            <h2 class="interview-ttl">interview<span class="interview-ruby">働く仲間を知る</span></h2>
            <ul class="interview__list">
                <?php
                $args = array(
                    'post_type' => 'interview',
                    'posts_per_page' => 9
                );
                $my_query = new WP_Query($args); ?>
                <?php if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); ?>
                        <li class="interview__item">
                            <a href="<?php the_permalink(); ?>" class="interview__item-link">
                                <div class="interview__item__body">
                                    <div class="interview__item__body__txt">
                                        <h4 class="interview__item__body__txt-ttl"><?php the_title(); ?></h4>
                                        <p class="interview__item__body__txt-desc"><?php the_field('desc'); ?></p>
                                    </div>
                                    <div class="interview__item__head">
                                        <p class="interview__item__head-label">ー
                                            <?php
                                            $terms = get_the_terms($post->ID, 'division');
                                            if ($terms) :
                                                foreach ($terms as $term) {
                                                    echo '<span>' . $term->name . '</span>';
                                                }
                                            endif;
                                            ?></p>
                                        <time class="interview__item__head-data" date-time="<?php echo get_the_time("Y/m/d"); ?>"><?php echo get_the_time("Y/m/d"); ?></time>
                                    </div>
                                </div>
                                <figure class="interview__item__thumb">
                                    <img src='<?php the_field('thumbnail'); ?>' alt=''>
                                    <figcaption class="interview__item__thumb-caption interview__item__thumb-caption01"><?php the_field('thumnail-name01'); ?></figcaption>
                                    <figcaption class="interview__item__thumb-caption interview__item__thumb-caption02"><?php the_field('thumnail-name02'); ?></figcaption>
                                </figure>
                            </a>
                        </li>
                <?php endwhile;
                endif;
                wp_reset_postdata(); ?>
            </ul>
        </div>
    </div>
    <?php get_template_part('parts/contact'); ?>
</main>
<?php get_footer(); ?>