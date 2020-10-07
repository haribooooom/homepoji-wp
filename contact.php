<?php
/*
Template Name:contact
*/
?>
<?php get_header(); ?>

<main class="homeform">
  <div class="wrapper">
    <h1 class="mb30">ホメポジ参加フォーム</h1>
    <form action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSeKMu5MGYxKLOE1N6yrtJcw3f9k4HU8HnTcTp884zFiKpg4pw/formResponse" id="form" method="post" target="dummyIframe">

      <fieldset>
        <legend>1.お名前（呼ばれたい名前）を教えてください<span class="required"></span></legend>
        <input id="namae" type="text" placeholder="名前を記入してください" required name="entry.116488346" required>
      </fieldset>
      <!--name-->
      <fieldset>
        <legend>2.TwitterIDを@から教えてください<span class="required"></span></legend>
        <input id="tw-id" type="text" placeholder="TwitterIDを@から記入してください" required name="entry.173918627">
      </fieldset>
      <!--tw-id-->

      <fieldset>
        <legend>3.Twitter以外の連絡先がいい場合は教えてください</legend>
        <input id="contact-info" type="text" placeholder="Twitter以外の連絡先を記入してください" name="entry.128483184">
      </fieldset>
      <!--contact-info-->

      <!--      <p>-->
      <fieldset>
        <legend>4.性別を教えてください</legend>
        <div class="flex">
          <input type="radio" name="entry.2089404863" value="男性" id="Male"><label for="Male">男性</label>
          <input type="radio" name="entry.2089404863" value="女性" id="Female"><label for="Female">女性</label>
          <input type="radio" name="entry.2089404863" value="そのた" id="null"><label for="null">そのた</label>
          </div>
      </fieldset>
      <!--      </p>-->

      <fieldset>
        <legend>5.職業を教えてください</legend>
        <input id="job" type="text" placeholder="職業を教えてください" name="entry.307193417">
      </fieldset>
      <!--job-->


      <fieldset>
        <legend>6.20歳以上ですか？<small>(開催場所の検討のための確認)</small><span class="required"></span></legend>
        <div class="flex">
          <input type="radio" name="entry.1477809744" value="yes" id="yes"><label for="yes">はい</label>
          <input type="radio" name="entry.1477809744" value="no" id="no"><label for="no">いいえ</label>
        </div>
      </fieldset>
      <!--job-->

      <fieldset>
        <legend>7.キャンセルは2日前までに言ってください！<span class="required"></span></legend>
        <div class="flex">
          <input type="radio" name="entry.275532908" value="ok" id="ok" required><label for="ok">OK！</label>
        </div>
      </fieldset>
       <fieldset>
        <legend>8.補足事項があったら教えてください。</legend>
         <textarea name="entry.2020418719" id="" cols="30" rows="5"></textarea>
      </fieldset>

      <!--job-->
      <button type="submit" id="btn">送信する</button>
      <!--name-->
    </form>
    <!--    表示を止めるためのiframe-->



    <iframe name="dummyIframe" class="dummy">
    </iframe>
    <div class="thxMessage">
      <p>ご応募いただきありがとうございます！</p>
      <p>後日担当のものより、<br>改めて確認の連絡を任意の連絡先からさせていただきます。<br>しばらくお待ちください！</p>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/il_thank_smile.png" alt="">
      <div class="flex">
      <p><input type="button" value="前のページへ戻る" onclick="history.back()"></p>
        <p class=""><a href="./index.html">ホメポジホーム<span></span></a></p>
      </div>
      <div class="tw-follow"><a href="https://twitter.com/intent/follow?screen_name=home_positive">Twitterをフォローする</a></div>
    </div>
    <!--thxMessage-->
  </div>
  <!--wrapper-->
  </main>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
    $(function() {
      $('#btn').on('click', function() {

        //        名前とメールは必須
        var name = $('#namae').val();
        var tw = $('#tw-id').val();

        if (name === "" || tw === "") {
          if (name === "") {
            $('#namae').val('名前入力は必須です').addClass('errorText');
          }
          if (tw === "") {
            $('#tw-id').val('TwitterIDは必須です').addClass('errorText');
          }
          return false;
        }

        // フォームを消す
        $('#form').addClass('myform');
        // メッセージを表示する
        $('.thxMessage').show();
        });
        //inputタグにフォーカスを当てる
        $('input').on('focus', function() {
        // 文字を通常色に戻す
        $(this).removeClass('errorText').val('');
        });


    });
  </script>
<?php get_footer(); ?>
