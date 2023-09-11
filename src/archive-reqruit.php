<?php get_header(); ?>
<main class="main">
    <div class="reqruit">
        <div class="page-top"></div>
        <div class="reqruit__inner inner">
            <div class="reqruit__container">
                <div class="reqruit__txt">
                    <p class="reqruit__txt-desc">
                        カシワバラグループは、カシワバラ・コーポレーションの中核事業であるインフラメンテナンスやマンション大規模修繕の領域を中心に事業を展開してきました。現在では不動産開発やマンション管理、金融、保険、広告、通信などの事業をグループに加え、人々の暮らしや住まいに関わる全てに対応できる体制づくりを進めています。<br>
                        近年の動きとして2022年に戸建住宅を手掛ける「株式会社東京組」と、シンガポールでコンドミニアム・商業施設・ホテル等を対象とした外壁塗装を手掛ける「LTC Coatings」を、2023年には福井県で変電所や新築の塗装工事を手掛ける「三優社工業株式会社」を完全子会社化。また「有限会社東京濾過工業所」よりオートストレーナ事業を譲受し、メーカーとしての第一歩を踏み出しました。<br>
                        カシワバラグループが目指しているのは、人が生きていく中で欠かせない「住」に関する新たな概念や価値を創造し提供する企業体です。お客さまの新しい動きやニーズを細かくキャッチし、そうして集めた多様な情報をグループ内で共有・活用することにより、これまでなかった価値を、より早く生み出すことができると考えています。<br>
                        カシワバラグループは新たな価値を生み出す情熱を持った方が、やりがいをもって働ける場所であり続けます。
                    </p>
                </div>
                <div class="personal">
                    <h3 class="personal-ttl">求める人物像</h3>
                    <p class="personal-lead">新しい価値を生み出すことができる人</p>
                    <ul class="personal__list">
                        <li class="personal__item">【人間力】何事にも誠心誠意取り組み、人をまとめ上げチームワークを発揮できる人</li>
                        <li class="personal__item">【論理力】論理的思考を持ち首尾一貫しつつも固定観念に囚われず、意見を分かりやすく伝えることができる人</li>
                        <li class="personal__item">【向上心】夢や志があり逆境にめげない芯の強さがある人</li>
                    </ul>
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