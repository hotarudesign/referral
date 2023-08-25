<?php get_header(); ?>
<main class="main">
    <div class="reqruit">
        <div class="page-top"></div>
        <div class="reqruit__inner inner">
            <div class="reqruit__container">
                <div class="reqruit__txt">
                    <h2 class="reqruit__txt-ttl">
                        <picture>
                            <source srcset='<?php echo ImgPath; ?>/webp/reqruit_ttl.webp' type='image/webp'>
                            <img src="<?php echo ImgPath; ?>/reqruit_ttl.png" alt="自らを変える勇気とこれまでを越える意志。">
                        </picture>
                    </h2>
                    <p class="reqruit__txt-desc">
                        <picture>
                            <source srcset='<?php echo ImgPath; ?>/webp/reqruit_desc.webp' type='image/webp'>
                            <img src="<?php echo ImgPath; ?>/reqruit_desc.png" alt="街の塗装店として創業した私たち。現在では人々の暮らしをあらゆる面から支える企業グループへと成長し、2019年に
                        「カシワバラグループ」として新たな一歩を踏み出しました。このような多面的な成長の過程で常に抱いてきた想いが、自らを変える勇気とこれまでを越える意志。我々が何をするのかではなく、お客様に何ができるのかという視点で既成概念に縛られることなく果敢なチャレンジを続けることで、さまざまな「世界」を生み出すことができるグループになったのです。ここには、自分らしいキャリアを描ける無限の活躍フィールドがあります。スペシャリストにも、ゼネラリストにもなれる環境があります。常に進化を続ける私たちと共に進む、あなたという新しい力を求めています。">
                        </picture>
                    </p>
                </div>
                <div class="reqruit__occupation">
                    <h3 class="reqruit__occupation-ttl">
                        <picture>
                            <source srcset='<?php echo ImgPath; ?>/webp/reqruit_list-ttl.webp' type='image/webp'>
                            <img src="<?php echo ImgPath; ?>/reqruit_list-ttl.png" alt="募集職種一覧">
                        </picture>
                    </h3>
                    <ul class="reqruit__occupation__list">
                        <li class="reqruit__occupation__item">
                            <a href="">
                                営業
                            </a>
                        </li>
                        <li class="reqruit__occupation__item">
                            <a href="">
                                施工管理
                            </a>
                        </li>
                        <li class="reqruit__occupation__item">
                            <a href="">
                                設計・積算
                            </a>
                        </li>
                        <li class="reqruit__occupation__item">
                            <a href="">
                                施工管理（新卒・第二新卒）
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part('parts/contact'); ?>
</main>
<?php get_footer(); ?>