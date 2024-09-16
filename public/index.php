<?php get_header(); ?>
<main>
    <section class="mv">
        <div class="mv__img">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/FV.webp" alt="自然の恵みを感じ、豊かな未来を作る。">
        </div>
        <div class="mv__content">
            <div class="mv__logo">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/LOGO2.webp" alt="自然の恵み農園">
            </div>
            <h2 class="mv__text">自然の恵みを感じ、<br>豊かな未来を。</h2>
        </div>
        <?php
        $args = [
            'post_type' => 'post',
            'posts_per_page' => 1,
            'orderby' => 'date',
            'order' => 'DESC'
        ];

        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <div class="mv__news">
                    <a href="<?php the_permalink(); ?>" class="mv__news-link">
                        <p class="mv__news-head">news</p>
                        <time class="mv__news-date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d'); ?></time>
                        <p class="mv__news-title"><?php the_title(); ?></p>
                    </a>
                </div>
            <?php endwhile; ?>
        <?php endif;
        wp_reset_postdata(); ?>
        <div class="mv__scroll">
            <p>scroll</p>
            <div class="mv__scroll__img">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/パス1.webp" alt="下にスクロール">
            </div>
        </div>
    </section>

    <div class="about" id="about">
        <div class="inner about__inner">
            <div class="about__logo">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo.svg" loading="lazy" alt="自然の恵み農園">
            </div>
            <p class="about__text">
                自然の恵み農園は、
                <br>自然の恵みと動物の尊さが調和する<br class="br--sp">特別な場所です。
                <br>新鮮で美味しい農産物を栽培し、<br class="br--sp">心温まる動物たちと触れ合える場所<br class="br--sp">でもあります。
            </p>
            <p class="about__text">
                自然の恵みを受け、<br class="br--sp">動物たちとの特別なひとときを<br class="br--sp">楽しんでいただける場所として、
                <br>私たちは誇りを持って活動をしています。
                <br>一緒に自然と動物の美しさを共有しましょう。
            </p>
            <div class="about__img--left-Top wow fadeInUp" data-wow-duration="2s">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/マスクグループ2.webp" loading="lazy" alt="ヤギの写真">
            </div>
            <div class="about__img--right-Top wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/マスクグループ3.webp" loading="lazy" alt="トマトの写真">
            </div>
            <div class="about__img--left-under wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/マスクグループ6.webp" loading="lazy" alt="農家の方の写真">
            </div>
            <div class="about__img--right-under wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/グループ1536.webp" loading="lazy" alt="牛の親子">
            </div>
        </div>
    </div>

    <section class="works" id="works">
        <div class="works__inner">
            <h2 class="sectionTitle works__title">活動紹介</h2>
            <div class="works__content">
                <ul class="works__list" role="tablist">
                    <li class="works__tab is-active" id="tab-farm">農園</li>
                    <li class="works__tab" id="tab-ranch">牧場</li>
                    <li class="works__tab" id="tab-online">オンライン販売</li>
                </ul>
                <p class="works__text is-active" id="text-farm">
                    私たちは、「持続可能な農業」を掲げて、自然の恵みに感謝しながら、農作物を育てています。
                    <br>無農薬で、体にも環境にも優しく、季節ごとに異なる品種を育て、提供しています。
                    <br class="br--sp">ぜひ一度、農園にお越し頂き、自分の手で収穫した新鮮な野菜、果物をお召し上がりください。
                </p>
                <p class="works__text" id="text-ranch">
                    私たちの牧場は、自然と動物との共存を尊重し、持続可能な農業の原則に基づいて運営されています。
                    <br>広々とした環境で、動物たちとのふれ合いを通じて、自然の恵みと動物の尊さを感じ、
                    <br class="br--pc">心温まるひとときを過ごしていただけます。
                </p>
                <p class="works__text" id="text-online">
                    自然の恵み農園から直接お届けする、新鮮で美味しい農産物と
                    <br class="br--pc">手作りのジャムやバターなどの加工品を提供しています。
                    <br>自然の恩恵をご自宅でお楽しみいただけます。
                </p>
            </div>
        </div>

        <div class="works__slider is-active" id="slider-farm">
            <ul class="works__slider-lists">
                <li class="works__slider-list"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/AdobeStock_367389499.webp" loading="lazy" alt="眼が出たばかりの野菜"></li>
                <li class="works__slider-list"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/AdobeStock_562266191.webp" loading="lazy" alt="野菜を収穫する人々"></li>
                <li class="works__slider-list"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/AdobeStock_545162233.webp" loading="lazy" alt="カゴいっぱいのいちご"></li>
                <li class="works__slider-list"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/AdobeStock_382800161.webp" loading="lazy" alt="元気な農家の方々"></li>
            </ul>
            <ul class="works__slider-lists">
                <li class="works__slider-list"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/AdobeStock_367389499.webp" loading="lazy" alt="眼が出たばかりの野菜"></li>
                <li class="works__slider-list"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/AdobeStock_562266191.webp" loading="lazy" alt="野菜を収穫する人々"></li>
                <li class="works__slider-list"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/AdobeStock_545162233.webp" loading="lazy" alt="カゴいっぱいのいちご"></li>
                <li class="works__slider-list"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/AdobeStock_382800161.webp" loading="lazy" alt="元気な農家の方々"></li>
            </ul>
        </div>

        <div class="works__slider" id="slider-ranch">
            <ul class="works__slider-lists">
                <li class="works__slider-list"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/AdobeStock_307247648.webp" loading="lazy" alt="ヤギの写真"></li>
                <li class="works__slider-list"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/AdobeStock_485787177.webp" loading="lazy" alt="豚の写真"></li>
                <li class="works__slider-list"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/AdobeStock_477489148.webp" loading="lazy" alt="馬の夫婦"></li>
                <li class="works__slider-list"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/AdobeStock_105054722.webp" loading="lazy" alt="牧場でのんびりする牛たち"></li>
            </ul>
            <ul class="works__slider-lists">
                <li class="works__slider-list"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/AdobeStock_307247648.webp" loading="lazy" alt="ヤギの写真"></li>
                <li class="works__slider-list"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/AdobeStock_485787177.webp" loading="lazy" alt="豚の写真"></li>
                <li class="works__slider-list"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/AdobeStock_477489148.webp" loading="lazy" alt="馬の夫婦"></li>
                <li class="works__slider-list"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/AdobeStock_105054722.webp" loading="lazy" alt="牧場でのんびりする牛たち"></li>
            </ul>
        </div>

        <div class="works__slider" id="slider-online">
            <ul class="works__slider-lists">
                <li class="works__slider-list"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/AdobeStock_369550407.webp" loading="lazy" alt="色とりどりの野菜"></li>
                <li class="works__slider-list"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/AdobeStock_267533459.webp" loading="lazy" alt="フルーツと瓶に入ったジャム"></li>
                <li class="works__slider-list"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/AdobeStock_189730299.webp" loading="lazy" alt="手作りバター"></li>
                <li class="works__slider-list"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/AdobeStock_164456093.webp" loading="lazy" alt="キャラメルバニラアイス"></li>
            </ul>
            <ul class="works__slider-lists">
                <li class="works__slider-list"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/AdobeStock_369550407.webp" loading="lazy" alt="色とりどりの野菜"></li>
                <li class="works__slider-list"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/AdobeStock_267533459.webp" loading="lazy" alt="フルーツと瓶に入ったジャム"></li>
                <li class="works__slider-list"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/AdobeStock_189730299.webp" loading="lazy" alt="手作りバター"></li>
                <li class="works__slider-list"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/AdobeStock_164456093.webp" loading="lazy" alt="キャラメルバニラアイス"></li>
            </ul>
        </div>
    </section>

    <section class="faq" id="faq">
        <div class="inner faq__inner">
            <div class="textAlignCenter">
                <h2 class="sectionTitle faq__title">よくあるご質問</h2>
            </div>
            <dl class="faq__lists" role="tablist">
                <div class="faq__list is-open" role="tab" aria-expanded="true" aria-controls="answer-1">
                    <dt class="faq__question">
                        <p class="faq__question-text">農園の野菜や果物は有機栽培ですか？</p>
                        <button class="faq__question-button">Toggle Accordion</button>
                    </dt>
                    <dd class="faq__answer" id="answer-1" role="tabpanel" aria-hidden="false">
                        はい、私たちの農園では有機栽培の原則に従って野菜と果物を栽培しています。
                        <br>化学肥料や農薬を極力使用せず、土壌と作物の健康を第一に考えております。
                    </dd>
                </div>
                <div class="faq__list" role="tab" aria-expanded="false" aria-controls="answer-2">
                    <dt class="faq__question">
                        <p class="faq__question-text">農園での見学や体験ツアーは行っていますか？</p>
                        <button class="faq__question-button">Toggle Accordion</button>
                    </dt>
                    <dd class="faq__answer" id="answer-2" role="tabpanel" aria-hidden="true">
                        はい、農園での見学や体験ツアーを随時開催しています。
                        <br>農場の日常や農作業を親しみやすく説明し、実際に農園での体験を楽しむことができます。
                    </dd>
                </div>
                <div class="faq__list" role="tab" aria-expanded="false" aria-controls="answer-3">
                    <dt class="faq__question">
                        <p class="faq__question-text">オンラインで注文した農産物はどのように配送されますか？</p>
                        <button class="faq__question-button">Toggle Accordion</button>
                    </dt>
                    <dd class="faq__answer" id="answer-3" role="tabpanel" aria-hidden="true">
                        オンラインで注文いただいた農産物は、専用の梱包で新鮮さを保ったまま、
                        <br>指定された配送先にお届けします。
                    </dd>
                </div>
                <div class="faq__list" role="tab" aria-expanded="false" aria-controls="answer-4">
                    <dt class="faq__question">
                        <p class="faq__question-text">農園で提供される季節ごとの野菜や果物の品種は何ですか？</p>
                        <button class="faq__question-button">Toggle Accordion</button>
                    </dt>
                    <dd class="faq__answer" id="answer-4" role="tabpanel" aria-hidden="true">
                        春にはイチゴ、夏にはトマトや茄子、秋にはカボチャやリンゴ、冬にはブロッコリーやみかん
                        など、季節に応じた野菜、果物を提供、収穫体験することができます。
                    </dd>
                </div>
            </dl>
        </div>
    </section>

    <section class="news" id="news">
        <div class="news__content--left">
            <h2 class="sectionTitle news__title">お知らせ</h2>
            <p class="news__text">
                季節の農作物のお知らせ、見学ツアーのご案内、
                <br>オンライン販売セールのお知らせなど、自然の恵み農園の最新情報をお届けします。
            </p>
            <div class="news__button--top">
                <?php $page = get_page_by_path('archive'); ?>
                <a href="<?php echo esc_url(get_permalink($page->ID)); ?>" class="news__button-link">View More</a>
            </div>
        </div>
        <div class="news__content--right">
            <ul class="news__lists">
                <?php
                $args = [
                    'post_type'      => 'post',
                    'posts_per_page' => 3,
                ];

                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :
                ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <li class="news__list">
                            <a href="<?php the_permalink(); ?>" class="news__list-link">
                                <div class="news__list-head">
                                    <time class="news__list-date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d'); ?></time>
                                    <?php $category = get_the_category(); ?>
                                    <?php if ($category[0]) : ?>
                                        <p class="news__list-category"><?php echo $category[0]->cat_name; ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="news__list-title"><?php the_title(); ?></div>
                            </a>
                        </li>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p>投稿がありません。</p>
                <?php endif;
                wp_reset_postdata(); ?>
            </ul>
        </div>
        <div class="news__button--bottom">
            <?php $page = get_page_by_path('archive'); ?>
            <a href="<?php echo esc_url(get_permalink($page->ID)); ?>" class="news__button-link">View More</a>
        </div>
    </section>

    <section class="access" id="access">
        <div class="textAlignCenter">
            <h2 class="sectionTitle access__title">アクセス</h2>
        </div>
        <div class="inner access__inner">
            <dl class="access__lists">
                <div class="access__list">
                    <dt class="access__list-term">会社名</dt>
                    <dd class="access__list-definition">株式会社自然の恵み農園</dd>
                </div>
                <div class="access__list">
                    <dt class="access__list-term">所在地</dt>
                    <dd class="access__list-definition">〒123-4567 <br>千葉県〇〇市××町<br>1丁目23-45</dd>
                </div>
                <div class="access__list">
                    <dt class="access__list-term">電話番号</dt>
                    <dd class="access__list-definition">012-3456-7890</dd>
                </div>
                <div class="access__list">
                    <dt class="access__list-term">営業時間</dt>
                    <dd class="access__list-definition">10:00〜18:00<br>（土日祝を除く）</dd>
                </div>
                <div class="access__list last-item">
                    <dt class="access__list-term last-item">Googleマップ<a href="https://maps.app.goo.gl/32bkD4yWJrMrqNmj9" class="access__list-term-link">拡大地図を表示</a>
                    </dt>
                    <dd class="access__list-definition last-item">
                        <div class="access__map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3237.6468972794214!2d140.05826947626085!3d35.75948272567067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60227e5329d23245%3A0xd4cde63c28d3f984!2z44G144Gq44Gw44GX44Ki44Oz44OH44Or44K744Oz5YWs5ZyS!5e0!3m2!1sja!2sjp!4v1712905203976!5m2!1sja!2sjp" width="710" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </dd>
                </div>
            </dl>
        </div>
    </section>

    <section class="contact">
        <div class="inner contact__inner">
            <h2 class="contact__title">お問い合わせ</h2>
            <p class="contact__text">
                お仕事のご相談、農園体験、牧場の見学、その他ご質問
                <br>お気軽にお問い合わせください。
            </p>
            <div class="contact__button">
                <?php $page = get_page_by_path('contact'); ?>
                <a href="<?php echo esc_url(get_permalink($page->ID)); ?>" class="contact__button-link">お問い合わせ</a>
            </div>
            <dl class="contact__lists">
                <div class="contact__list">
                    <dt class="contact__list-term">問い合わせ電話：</dt>
                    <dd class="contact__list-definition">123-4567-8910</dd>
                </div>
            </dl>
            <p class="contact__reception">
                【受付時間】<br>10:00 ~ 18:00（土日祝を除く）
            </p>
        </div>
    </section>
</main>
<?php get_footer(); ?>