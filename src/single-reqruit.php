<?php get_header(); ?>
<main class="reqruit-post">
    <div class="page-top"></div>
    <div class="reqruit-post__inner inner">
        <article class="post">
            <h2 class="post__ttl">
                施工管理は、リーダーシップを育む訓練の場。そこから多様な分野に挑戦してほしい
            </h2>
            <p class="post__desc">
                コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。
            </p>
            <div class="reqruitment">
                <h3 class="reqruitment-ttl"><?php the_title(); ?></h3>
                <div class="reqruitment__part">
                    <h4 class="reqruitment__part-ttl">
                        採用情報
                    </h4>
                    <dl class="reqruitment__list">
                        <dt class="reqruitment__list-ttl">
                            業務内容
                        </dt>
                        <dd class="reqruitment__list-data"><?php the_field('job-detail'); ?></dd>
                    </dl>
                    <dl class="reqruitment__list">
                        <dt class="reqruitment__list-ttl">
                            応募条件
                        </dt>
                        <dd class="reqruitment__list-data"><?php the_field('entry_detail'); ?></dd>
                    </dl>
                    <dl class="reqruitment__list">
                        <dt class="reqruitment__list-ttl">
                            求める人物像
                        </dt>
                        <dd class="reqruitment__list-data"><?php the_field('persona'); ?></dd>
                    </dl>
                    <dl class="reqruitment__list">
                        <dt class="reqruitment__list-ttl">
                            勤務地
                        </dt>
                        <dd class="reqruitment__list-data"><?php the_field('location'); ?></dd>
                    </dl>
                </div>
                <div class="reqruitment__part">
                    <h4 class="reqruitment__part-ttl">
                        募集要項
                    </h4>
                    <dl class="reqruitment__list">
                        <dt class="reqruitment__list-ttl">
                            勤務地
                        </dt>
                        <dd class="reqruitment__list-data"><?php the_field('work_time'); ?></dd>
                    </dl>
                    <dl class="reqruitment__list">
                        <dt class="reqruitment__list-ttl">
                            諸手当
                        </dt>
                        <dd class="reqruitment__list-data"><?php the_field('allowances'); ?></dd>
                    </dl>
                    <dl class="reqruitment__list">
                        <dt class="reqruitment__list-ttl">
                            休日・休暇
                        </dt>
                        <dd class="reqruitment__list-data"><?php the_field('holiday'); ?></dd>
                    </dl>
                    <dl class="reqruitment__list">
                        <dt class="reqruitment__list-ttl">
                            福利厚生
                        </dt>
                        <dd class="reqruitment__list-data"><?php the_field('welfare'); ?></dd>
                    </dl>
                    <dl class="reqruitment__list">
                        <dt class="reqruitment__list-ttl">
                            備考
                        </dt>
                        <dd class="reqruitment__list-data"><?php the_field('remarks'); ?></dd>
                    </dl>
                </div>
            </div>
        </article>
        <a href="https://thkd5375.talent-p.net/EntryFormMng/Entryform?url_token=b71d970ffcf54e6c9b2478287e7757e1" class="entry-btn">エントリー</a>
    </div>
</main>
<?php get_template_part('parts/contact'); ?>
<?php get_footer(); ?>