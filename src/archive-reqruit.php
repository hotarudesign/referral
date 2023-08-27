<?php get_header(); ?>
<main class="main">
    <div class="reqruit">
        <div class="page-top"></div>
        <div class="reqruit__inner inner">
            <div class="reqruit__container">
                <div class="reqruit__txt">
                    <h2 class="reqruit__txt-ttl">
                        自らを変える勇気とこれまでを越える意志。
                    </h2>
                    <p class="reqruit__txt-desc">
                        町の塗装店として創業した私たち。<br>
                        現在では人々の暮らしをあらゆる面から支える企業グループへと成長し、2019年に「カシワバラグループ」として新たな一歩を踏み出しました。<br>
                        このような多面的な成長の過程で常に抱いてきた想いが、自らを変える勇気とこれまでを越える意志。<br>
                        我々が何をするのかではなく、お客様に何ができるのかという視点で既成概念に縛られることなく果敢なチャレンジを続けることで、<br>
                        さまざまな「世界」を生み出すことができるグループになったのです。<br>
                        ここには、自分らしいキャリアを描ける無限の活躍フィールドがあります。<br>
                        スペシャリストにも、ゼネラリストにもなれる環境があります。<br>
                        常に進化を続ける私たちと共に進む、あなたという新しい力を求めています。<br>
                    </p>
                </div>
                <div class="reqruit__occupation">
                    <h3 class="reqruit__occupation-ttl">
                        募集職種一覧
                    </h3>
                    <ul class="reqruit__occupation__list">
                        <?php
                        $args = array(
                            'post_type' => 'reqruit',
                            'posts_per_page' => 4
                        );
                        $my_query = new WP_Query($args); ?>
                        <?php if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); ?>
                                <li class="reqruit__occupation__item">
                                    <a href="<?php echo the_permalink(); ?>">
                                        <?php
                                        $terms = get_the_terms(get_the_ID(), 'job');
                                        if (!empty($terms)) : if (!is_wp_error($terms)) :
                                        ?>
                                                <ul>
                                                    <?php foreach ($terms as $term) : ?>
                                                        <li><?php echo $term->name; ?></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                        <?php endif;
                                        endif; ?>
                                    </a>
                                </li>
                        <?php endwhile;
                        endif;
                        wp_reset_postdata(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part('parts/contact'); ?>
</main>
<?php get_footer(); ?>