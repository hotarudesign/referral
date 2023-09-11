<?php get_header(); ?>
<main class="reqruit-post">
    <div class="page-top"></div>
    <div class="reqruit-post__inner inner">
        <article class="post">
            <div class="reqruitment">
                <h3 class="reqruitment-ttl"><?php the_title(); ?></h3>
                <div class="reqruitment__part">
                    <h4 class="reqruitment__part-ttl">
                        募集要項
                    </h4>
                    <dl class="reqruitment__list">
                        <dt class="reqruitment__list-ttl">
                            応募資格
                        </dt>
                        <dd class="reqruitment__list-data"><?php the_field('entry_detail'); ?></dd>
                    </dl>
                    <dl class="reqruitment__list">
                        <dt class="reqruitment__list-ttl">
                            雇用形態
                        </dt>
                        <dd class="reqruitment__list-data"><?php the_field('employment-status'); ?></dd>
                    </dl>
                    <dl class="reqruitment__list">
                        <dt class="reqruitment__list-ttl">
                            入社日
                        </dt>
                        <dd class="reqruitment__list-data"><?php the_field('join-day'); ?></dd>
                    </dl>
                    <dl class="reqruitment__list">
                        <dt class="reqruitment__list-ttl">
                            事業内容
                        </dt>
                        <dd class="reqruitment__list-data"><?php the_field('business-content'); ?></dd>
                    </dl>
                    <dl class="reqruitment__list">
                        <dt class="reqruitment__list-ttl">
                            仕事内容
                        </dt>
                        <dd class="reqruitment__list-data"><?php the_field('job-description'); ?></dd>
                    </dl>
                    <dl class="reqruitment__list">
                        <dt class="reqruitment__list-ttl">
                            採用フロー
                        </dt>
                        <dd class="reqruitment__list-data"><?php the_field('reqruit-flow'); ?></dd>
                    </dl>
                    <dl class="reqruitment__list">
                        <dt class="reqruitment__list-ttl">
                            選考方法
                        </dt>
                        <dd class="reqruitment__list-data"><?php the_field('selection-method'); ?></dd>
                    </dl>
                    <dl class="reqruitment__list">
                        <dt class="reqruitment__list-ttl">
                            提出書類
                        </dt>
                        <dd class="reqruitment__list-data"><?php the_field('document-submit'); ?></dd>
                    </dl>
                    <dl class="reqruitment__list">
                        <dt class="reqruitment__list-ttl">
                            基本給
                        </dt>
                        <dd class="reqruitment__list-data"><?php the_field('salary'); ?></dd>
                    </dl>
                    <dl class="reqruitment__list">
                        <dt class="reqruitment__list-ttl">
                            諸手当
                        </dt>
                        <dd class="reqruitment__list-data"><?php the_field('allowances'); ?></dd>
                    </dl>
                    <dl class="reqruitment__list">
                        <dt class="reqruitment__list-ttl">
                            昇給
                        </dt>
                        <dd class="reqruitment__list-data"><?php the_field('salary-increase'); ?></dd>
                    </dl>
                    <dl class="reqruitment__list">
                        <dt class="reqruitment__list-ttl">
                            賞与
                        </dt>
                        <dd class="reqruitment__list-data"><?php the_field('bonus'); ?></dd>
                    </dl>
                    <dl class="reqruitment__list">
                        <dt class="reqruitment__list-ttl">
                            休日休暇
                        </dt>
                        <dd class="reqruitment__list-data"><?php the_field('holiday'); ?></dd>
                    </dl>
                    <dl class="reqruitment__list">
                        <dt class="reqruitment__list-ttl">
                            待遇<br>福利厚生<br>社内制度
                        </dt>
                        <dd class="reqruitment__list-data"><?php the_field('welfare'); ?></dd>
                    </dl>
                    <dl class="reqruitment__list">
                        <dt class="reqruitment__list-ttl">
                            勤務地
                        </dt>
                        <dd class="reqruitment__list-data"><?php the_field('location'); ?></dd>
                    </dl>
                    <dl class="reqruitment__list">
                        <dt class="reqruitment__list-ttl">
                            勤務時間
                        </dt>
                        <dd class="reqruitment__list-data"><?php the_field('work_time'); ?></dd>
                    </dl>
                    <dl class="reqruitment__list">
                        <dt class="reqruitment__list-ttl">
                            問い合わせ先
                        </dt>
                        <dd class="reqruitment__list-data"><?php the_field('contact-submit'); ?></dd>
                    </dl>
                </div>
            </div>
        </article>
        <a href="https://thkd5375.talent-p.net/EntryFormMng/Entryform?url_token=b71d970ffcf54e6c9b2478287e7757e1" class="entry-btn">エントリー</a>
    </div>
</main>
<?php get_template_part('parts/contact'); ?>
<?php get_footer(); ?>