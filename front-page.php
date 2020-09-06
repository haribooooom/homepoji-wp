<?php get_header(); ?>

<div class="topmenu">
  <div class="container">
    <div id="fv" class="bg">
      <div class="fv__box"><strong class="mes js-anime">ちょっと自分が<span class="red">スキ</span>になる！</strong><strong class="js-anime">ようこそ、<span>ホメポジ</span>へ！</strong></div>
      <!--fv__box-->
      <img class="js-anime" src="<?php echo get_template_directory_uri(); ?>/assets/img/il_fv_having_fun.png">
    </div>
    <!--fv-->
    <div id="about" class="bg">
      <div class="about__inner">
        <div class="about__wrap pc__flex bg">
          <div class="about__box"><strong>最近、<br>褒められていますか？</strong>
            <p>ホメポジは<br><span class="bold">「参加前よりちょっと自分を<span class="red">スキ</span>になる」</span><br>を目的としてお互いに頑張ったことを認め合う会です。</p>
            <ul>
              <li class="js-anime">頑張ってるのに報われない</li>
              <li class="js-anime">なんか毎日惰性で生きてる</li>
              <li class="js-anime">優しい気持ちになりたい</li>
              <li class="js-anime">知らない人と話してみたい</li>
              <li class="js-anime">人見知りを克服したい</li>
            </ul>
            <p class="js-anime">そのようなあなたに来て欲しいと思っています。</p>
            <div class="btn js-anime"><a href="./hoge.html">開催者の想い</a></div>
          </div>
          <!--about__box-->
        </div>
        <!--about__wrap-->
      </div>
      <!--about__inner-->
    </div>
    <!--about-->

    <div id="voice">
      <div class="voice__inner">
        <h2>参加した人の声</h2>
        <div class="voice__wrap">

          <div class="swiper-voice-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/il_way_conf.png" alt="">
                <div class="voice__box">
                  <p class="">（ルイさん）</p>
                  <p class="">「人見知りを治したい」,「明るい人と会いたい」という人に本気でおすすめです。最高に素敵な会です。</p>
                </div>
                <!--voice__box-->
              </div>
              <!--.swiper-slide-->
              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/il_way_conf.png" alt="">
                <div class="voice__box">
                  <p class="">（たいさすけさん）</p>
                  <p class="">コーラ飲んだだけで成長できた。</p>
                </div>
                <!--voice__box-->
              </div>
              <!--.swiper-slide-->

            </div>
            <!--swiper-wrapper-->

          </div>
          <!--swiper-container-->


          <div class="voice-right flex bg">

            <div class="tw-word flex">
              <a href="https://twitter.com/share?url=%23&hashtags=%E3%83%9B%E3%83%A1%E3%83%9D%E3%82%B8" target="_blank" rel="noopener noreferrer"><span><i class="fa fa-twitter" aria-hidden="true"></i>#ホメポジ</span>
              </a>

            </div>
            <!-- tw-word -->

            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/il_sp.png" alt="" class=" js-anime">


          </div>
          <!--voice__right-->

        </div>
        <!--voice__wrap-->


      </div>
      <!--voice__inner-->
    </div>
    <!--voice-->


    <div id="way">
      <div class="way__inner">
        <h2>参加方法</h2>
        <div class="way__box pc__flex">
          <div class="way__item  js-anime"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/il_way_conf.png" alt="">
            <p class="">後述の参加上の注意を確認する</p>
          </div>
          <!--way__item-->
          <div class="way__item js-anime"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/il_way_message.png" alt="">
            <p class="">Twitter・当公式サイトの応募フォームから応募！</p>
          </div>
          <!--way__item-->
          <div class="way__item js-anime"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/il_way_wait.png" alt="">
            <p class="">運営からの連絡を待つ！</p>
          </div>
          <!--way__item-->
        </div>
        <!--way__box flex-->
      </div>
      <!--way__inner-->
    </div>
    <!--way-->

    <div id="attention">
      <div class="attention__inner">
        <h2>参加上の注意事項</h2>
        <div class="attention__wrap bg">
          <div class="attention__box">
            <ul>
              <li class="js-anime">相手をけなしたりバカにすること</li>
              <li class="js-anime">宗教、ビジネスの勧誘</li>
              <li class="js-anime">店員さんや周囲のお客様への迷惑行為</li>
              <li class="js-anime">他の参加者に対して迷惑やハラスメントに当たる行為</li>
              <li class="js-anime">その他、不適切と取れるような行為</li>
            </ul>
            <p class="bold js-anime">※守れない場合は退場していただく場合もあります。</p>
          </div>
          <!--attention__box-->
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/il_caution_warning.png" alt="">
        </div>
        <!--attention__wrap-->
      </div>
      <!--attention__inner-->
    </div>
    <!--attention-->

    <div id="qa">
      <div class="qa__inner">

        <h2>ホメポジQ&amp;A</h2>

        <div class="qa__items">
          <div class="cp_qa">
            <div class="cp_actab js-anime">
              <input id="qa_1" type="checkbox" name="tabs">
              <label for="qa_1">Q1.ホメポジはいつ開催されますか？</label>
              <div class="cp_actab-content">
                <p>A１.月一で不定期で運営の揃う土日の夜に開催されます。
                  次回の開催についてはホメポジ公式アカウントか、運営のツイートを随時ご確認ください。<a href="#">→ホメポジ公式</a></p>
              </div>
            </div>
            <div class="cp_actab js-anime"><input id="qa_2" type="checkbox" name="tabs"><label for="qa_2">Q2.どこで開催されますか？</label>
              <div class="cp_actab-content">
                <p>A2.東京都内の山手線沿線で開催されます。</p>
              </div>
            </div>
            <div class="cp_actab js-anime"><input id="qa_3" type="checkbox" name="tabs"><label for="qa_3">Q3.一人で参加することが不安です。。</label>
              <div class="cp_actab-content">
                <p>A3.一人で参加される方がほとんどです！安心して参加してください。（下記の「参加者のあれこれ」というページから今までの参加者の方の傾向を紹介するページがあります。よろしければご覧ください！）</p>
              </div>
            </div>
            <div class="cp_actab js-anime"><input id="qa_4" type="checkbox" name="tabs"><label for="qa_4">Q3.一人で参加することが不安です。。</label>
              <div class="cp_actab-content">
                <p>A3.一人で参加される方がほとんどです！安心して参加してください。（下記の「参加者のあれこれ」というページから今までの参加者の方の傾向を紹介するページがあります。よろしければご覧ください！）</p>
              </div>
            </div>
            <div class="cp_actab js-anime"><input id="qa_5" type="checkbox" name="tabs"><label for="qa_5">Q3.一人で参加することが不安です。。</label>
              <div class="cp_actab-content">
                <p>A3.一人で参加される方がほとんどです！安心して参加してください。（下記の「参加者のあれこれ」というページから今までの参加者の方の傾向を紹介するページがあります。よろしければご覧ください！）</p>
              </div>
            </div>
          </div>
        </div>
        <!--qa__items-->


        <div class="qa__btn__items">
          <p class="qa-mes">その他ご質問等ございましたら、
            <a href="#">ホメポジ公式アカウント</a>までご連絡ください。</p>

          <!--watch__btn-->
        </div>
        <!--qa__btn__items-->

      </div>
      <!--qa__inner-->
    </div>
    <!--qa-->

    <div class="f-mes">
      <div class="f-mes__inner">

        <div class="f-mes__wrap">
          <div class="f-mes__box">

            <p class="mes js-anime"><span class="bold">ホメポジ</span>に参加して</p>
            <p class="mes js-anime">ちょっと自分が<br><span class="red">スキ</span><br>になる</p>
            <p class="js-anime">あなたのご参加をお待ちしております！</p>

            <div class="swiper-fmes-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/00.jpg" alt="">
                </div>
                <!--swiper-slide-->
                <div class="swiper-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/01.jpg" alt="">
                </div>
                <!--swiper-slide-->
                <div class="swiper-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/02.jpg" alt="">
                </div>
                <!--swiper-slide-->
                <div class="swiper-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/03.jpg" alt="">
                </div>
                <!--swiper-slide-->
                <div class="swiper-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/05.jpg" alt="">
                </div>
                <!--swiper-slide-->
              </div>
              <!--swiper-wrapper-->
            </div>
            <!--swiper-container-->

          </div>
          <!--f-mes__box-->

        </div>
        <!--f-mes__wrap-->


      </div>
      <!--f-mes__inner-->
    </div>
    <!--f-mes-->

  </div>
</div>


<?php get_footer(); ?>
