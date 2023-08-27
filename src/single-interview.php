<?php get_header(); ?>
<main class="inteview-post">
    <div class="inteview-post__inner inner">
        <h2 class="inteview-post-ttl">interview<span class="inteview-post-ruby">働く仲間を知る</span></h2>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article class="post">
                    <div class="post__head">
                        <h2 class="post__head-ttl"><?php the_field('title'); ?></h2>
                        <figure class="post__head-thumb">
                            <img class="pc-only" src='<?php the_field('eyecatch'); ?>' alt=''>
                            <img class="sp-only" src="<?php the_field('eyecatch-sp'); ?>" alt="">
                            <figcaption class="post__head-label post__head-label01">
                                <p class="post__head-division"><?php the_field('division_01'); ?></p>
                                <p class="post__head-name"><?php the_field('name_01'); ?><span class="post__head-en"><?php the_field('name-en_01'); ?></span></p>
                                <p class="post__head-join"><?php the_field('join_01'); ?>年入社</p>
                            </figcaption>
                            <figcaption class="post__head-label post__head-label02">
                                <p class="post__head-division"><?php the_field('division_02'); ?></p>
                                <p class="post__head-name"><?php the_field('name_02'); ?><span class="post__head-en"><?php the_field('name-en_02'); ?></span></p>
                                <p class="post__head-join"><?php the_field('join_02'); ?>年入社</p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="talk talk01">
                        <div class="talk__body">
                            <h3 class="talk-ttl">ー<?php the_field('title_01'); ?></h3>
                            <div class="talk__answer">
                                <div class="talk__item">
                                    <p class="talk__item-name"><?php the_field('person_01'); ?></p>
                                    <p class="talk__item-desc"><?php the_field('talk01_answer01'); ?></p>
                                </div>
                                <div class="talk__item">
                                    <p class="talk__item-name"><?php the_field('person_01'); ?></p>
                                    <p class="talk__item-desc"><?php the_field('talk01_answer01'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="talk talk02">
                        <div class="talk__body">
                            <h3 class="talk-ttl">ー<?php the_field('title_02'); ?></h3>
                            <div class="talk__answer">
                                <div class="talk__item">
                                    <p class="talk__item-name"><?php the_field('person_01'); ?></p>
                                    <p class="talk__item-desc"><?php the_field('talk02_answer01'); ?></p>
                                </div>
                                <div class="talk__item">
                                    <p class="talk__item-name"><?php the_field('person_01'); ?></p>
                                    <p class="talk__item-desc"><?php the_field('talk02_answer02'); ?></p>
                                </div>
                            </div>
                        </div>
                        <figure class="talk__item__thumb">
                            <img src="<?php the_field('talk02_thumbnail'); ?>" alt="">
                        </figure>
                    </div>
                    <div class="talk talk03">
                        <div class="talk__body">
                            <h3 class="talk-ttl">ー<?php the_field('title_03'); ?></h3>
                            <div class="talk__answer">
                                <div class="talk__item">
                                    <p class="talk__item-name"><?php the_field('person_01'); ?></p>
                                    <p class="talk__item-desc"><?php the_field('talk03_answer01'); ?></p>
                                </div>
                                <div class="talk__item">
                                    <p class="talk__item-name"><?php the_field('person_01'); ?></p>
                                    <p class="talk__item-desc"><?php the_field('talk03_answer02'); ?></p>
                                </div>
                            </div>
                        </div>
                        <figure class="talk__item__thumb">
                            <img src="<?php the_field('talk03_thumbnail'); ?>" alt="">
                        </figure>
                    </div>
                </article>
        <?php endwhile;
        endif; ?>
    </div>
</main>
<?php get_template_part('parts/contact'); ?>
<?php get_footer(); ?>