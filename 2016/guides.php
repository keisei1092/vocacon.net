<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>VOCACON 2016 参加案内</title>
  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <link href="./css/stylish-portfolio.css" rel="stylesheet">
  <link href="./css/text.css" rel="stylesheet">
  <link href="./css/mb/text.css" rel="stylesheet">
  <link href="./css/color.css" rel="stylesheet">
  <link href="./css/box.css" rel="stylesheet">
  <link href="./css/user.css" rel="stylesheet">
  <link href="./font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <link rel="apple-touch-icon" sizes="180x180" href="./img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="./img/favicon/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="./img/favicon/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="./img/favicon/manifest.json">
  <link rel="mask-icon" href="./img/favicon/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="theme-color" content="#ffffff">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script>
  // Google Analyticsを使うようになったらコメントアウトしてください
  // if (location.search.indexOf('referrer=') >= 0) {
  //   var params = location.search.replace('?', '').split('&');
  //   for (var i = 0; i < params.length; i++) {
  //     var kv = params[i].split('=');
  //     if (kv.length == 2 && kv[0] == 'referrer') {
  //       ga('set', 'referrer', decodeURIComponent(kv[1]));
  //       break;
  //     }
  //   }
  // }
  // ga('send', 'pageview');
  </script>
  <script src="./js/jquery.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <script src="./js/script.js"></script>
</head>
<body>
  <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle" onclick="return false;"><i class="fa fa-bars"></i></a>
  <nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
      <li class="sidebar-brand">
        <a href="./#top" onclick="$('#menu-close').click();">VOCACON 2016</a>
      </li>
      <li>
        <a href="./#top" onclick="$('#menu-close').click();">Top</a>
      </li>
      <li>
        <a href="./#about" onclick="$('#menu-close').click();">大会情報</a>
      </li>
      <li>
        <a href="./#program" onclick="$('#menu-close').click();">出展企画</a>
      </li>
      <li>
        <a href="./#news" onclick="$('#menu-close').click();">NEWS</a>
      </li>
      <li>
        <a href="./#contact" onclick="$('#menu-close').click();">お問い合わせ</a>
      </li>
    </ul>
  </nav>
  <header id="top_guide" class="headershort">
    <div class="text-vertical-center cancel-table-cell">
      <img src="./img/logo.png" alt="vocacon main logo" style="width:80%; height:auto;">
    </div>
  </header>
  <section id="about" class="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-vertical-center">
          <h1 class="bigunderline bigunderline-lightblue">参加案内</h1><br>
          <p class="lead">VOCACON&trade;に参加いただく際には、「宿泊参加」または「日帰り参加」をお選びいただけます。宿泊参加の方はオプションでバスツアーをご利用いただけます。</p>
        </div>
      </div>
    </div>
  </section>
  <section id="guide">
    <div class="container guide">
      <div class="text-vertical-center cancel-table-cell"><br>
      <!-- <div style="text&#45;align: center; vertical&#45;align: middle;"><br> -->
        <h1 class="bigunderline bigunderline-amber">参加プラン概要</h1>
        <h3 class="guide__text-heading">宿泊参加</h3>
        <p class="guide__text-normal">
          ヤマハリゾートつま恋内&nbsp;ホテル・サウスウィングでの<br>
          <span class="pink">一泊三食付 (夕・朝・昼)</span>&nbsp;宿泊プランです。<br>
          宿泊形式で参加いただくことで、&nbsp;<span class="pink">大会プログラムの全日程</span>&nbsp;を<br>
          お楽しみいただくことができます。<br>
          また、宿泊参加の方はオプションで&nbsp;<span class="pink">東京方面からのバスツアー</span>&nbsp;をご利用いただけます。
        </p>
        <table class="guide__text-normal">
          <tr>
            <td class="min-width-100">
              <span class="box">宿泊料金</span><br>
              <span class="box">(1泊3食付)</span>
            </td>
            <td>
              14,000円〜/人
            </td>
          </tr>
          <tr>
            <td class="min-width-100">
              <span class="box">大会参加費</span>
            </td>
            <td>
              未定&nbsp;※前回実績: 5,000円/2日<br>
              (18歳以下無料)
            </td>
          </tr>
        </table>
        <p class="guide__text-normal bold">
          <a href="#2days" class="btn btn-light">
            宿泊参加についての詳細はこちら<br>
            ただいま <b><?php echo(file_get_contents("http://vocacon.net/2016/counter/counter.php?method=echo&type=stay")); ?></b> 人が参加申し込み中です
          </a>
        </p>
        <p class="guide__text-normal">
        ※宿泊プランおよびバスツアーの詳細については、今後変更される可能性もありますので<br>予めご了承ください。
        </p>
        <hr class="guide__text-hr">
        <h3 class="guide__text-heading">日帰り参加</h3>
        <p class="guide__text-normal">
          10/29(土)、10/30(日) のどちらか、または両日とも、日帰りでご参加いただくことが可能です。<br>
          日帰り参加を希望される方につきましても、原則として<span class="pink">事前のお申し込みが必要</span>です。<br>
          なお、日帰り参加の場合には参加可能なプログラムに制約がありますので、ご注意ください。
        </p>
        <p class="guide__text-normal">
          <span class="box">DAY 1: 10/29(土)</span>
        </p>
        <p class="guide__text-normal">
          夕方以降に行われる<span class="pink">一部のプログラムに参加いただけません</span>。<br>
          詳細は大会タイムテーブル（参加申込受付開始と同時に公開予定）にてご確認ください。
        </p>
        <p class="guide__text-normal">
          <span class="box">DAY 2: 10/30(日)</span>
        </p>
        <p class="guide__text-normal">
          9:00 開場 から 17:00 閉会式までの全てのプログラムにご参加いただけます。<br>
        </p>
        <table class="guide__text-normal">
          <tr>
            <td class="min-width-100">
              <span class="box">
                大会参加費
              </span>
            </td>
            <td>
              未定 ※前回実績: 3,000円/日<br>
              (18歳以下無料)
            </td>
          </tr>
        </table>
        <hr class="guide__text-hr">
        <h3 class="guide__text-heading">
          未成年者の<br>
          ご参加について
        </h3>
        <p class="guide__text-normal">
          未成年者の方でも大会にご参加いただけますが、<br>青少年の健全育成の観点から以下の取り決めを設けさせていただきます。<br>
          受付にて年齢確認および同意書の確認をさせていただきますので、<br>ご理解とご協力のほど、よろしくお願いいたします。<br>
        </p>
        <table class="guide__text-normal">
          <tr>
            <td class="min-width-100 text-center">
              <span class="box">宿泊参加</span>
            </td>
            <td>
              18歳以上20歳未満の方が未成年者のみで宿泊参加される場合には、<br>
              <span class="pink">保護者の同意書</span>をご提示ください。<br>
              また、18歳未満の方につきましては、必ず<span class="pink">保護者同伴での参加</span>をお願いいたします。<br>
            </td>
          </tr>
          <tr>
            <td class="min-width-100 text-center">
              <span class="box">日帰り参加</span>
            </td>
            <td>
              中学生・高校生の方は必ず保護者の許可を得たうえで参加をお願いいたします。<br>
              また、小学生以下の方は必ず保護者同伴での参加をお願いいたします。<br>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </section>
  <section id="2days">
    <aside class="call-to-action bg-info">
      <div class="container text-vertical-center cancel-table-cell">
        <div class="row">
          <h1 class="bigunderline bigunderline-lime">宿泊参加詳細</h1>
          <div class="col-lg-12">
            <p class="guide__text-normal">
              宿泊参加される皆様には、<a href="http://www.tsumagoi.net/stay/southwing.php" target="_blank">ホテル・サウスウィング</a>（ヤマハリゾートつま恋 敷地内）へ宿泊していただきます。
            </p>
            <h3 class="guide__text-heading">チェックイン</h3>
            <p class="guide__text-normal">
              10/29(土)に、部屋割りの発表と鍵の受け渡しを実行委員会から行います。鍵は同室のメンバー同士で管理をお願いします。<br>
              <span class="pink">ホテルフロントではチェックインできません</span>のでご注意ください。 
            </p>
            <hr class="guide__text-hr-dark">
            <h3 class="guide__text-heading">チェックアウト</h3>
            <p class="guide__text-normal">
              <span class="pink">10/30(日)10時まで</span>にミュージックガーデンの大会受付へ鍵を返却してください。
            </p>
            <hr class="guide__text-hr-dark">
            <h3 class="guide__text-heading">客室</h3>
            <p class="guide__text-normal">
              ツインルーム + エクストラベッド(ソファベッド)の３人部屋です。<br>
              ※<span class="pink">ホテル客室は全室禁煙です</span>。喫煙は所定の喫煙所にてお願いします。
            </p>
            <hr class="guide__text-hr-dark">
            <h3 class="guide__text-heading">相部屋について</h3>
            <p class="guide__text-normal">
              一室2〜3名での相部屋（男女別）とさせていただきます。<br>
              ご家族やグループでの同室を希望される方は、参加申し込みフォームの「同室希望者の記入欄」に必要事項を記入してください。<br>
              ※申し込み後に同室希望者を照合できるよう、お名前にお間違いのないようお願いいたします。<br>
              ※2名で申し込まれた場合はツイン利用となるよう配慮しますが、ご希望に添えないことがあります。<br>
              ※小学生以下の方の宿泊については、お申し込みの前に実行委員会にご相談ください。
            </p>
            <hr class="guide__text-hr-dark">
            <h3 class="guide__text-heading">お食事</h3>
            <p class="guide__text-normal">
              宿泊プランには、三食分のお食事がセットで含まれています。
            </p>
            <p class="guide__text-normal">
              つま恋のメイン施設 S.M.C. 内にある ビュフェテラス をご利用いただきます。<br>
              毎食分のクーポンチケットをお渡ししますので、会場にお持ちください。
            </p>
            <hr class="guide__text-hr-dark">
            <h3 class="guide__text-heading">入浴施設</h3>
            <p class="guide__text-normal">
              <span class="box">温泉施設「森林乃湯」</span>
            </p>
            <p class="guide__text-normal">
              温泉施設はホテル・サウスウィングから徒歩で 10〜15 分の別棟にあります。<br>
              移動には、無料の園内周遊バス (北ゲート周り) を利用することもできます。<br>
              温泉施設の利用はオプションとなっており、宿泊者は 1,000円のチケットで二日間何度でも入館できます。<br>
              宿泊で参加される方に宿泊証明書をお渡ししますので、温泉施設のフロントに提示してチケットを購入してください。<br>
              営業時間は 10:00-23:00 です。<span class="pink">22:30 が最終入場となっています</span>のでご注意ください。<br>
              <span class="pink">タオル類はホテル客室のものを持参ください</span>。施設のフロントでレンタルすることもできますが有料です。
            </p>
            <p class="guide__text-normal">
              <span class="box">大浴場「ガーデンビューバス」</span>
            </p>
            <p class="guide__text-normal">
              ホテル・ノースウィング1階にある大浴場で、サウスウィング宿泊者も無料で利用することができます。<br>
              ホテル・サウスウィングから屋外・屋内の渡り廊下を通って徒歩で 7〜10 分ほどの場所にあります。<br>
              営業時間は 6:30-9:00 / 11:00-24:00 です。それぞれ<span class="pink">終了時間30分前が最終入場となっています</span>のでご注意ください。<br>
              タオル類はホテル客室のものを持参ください。<br>
              ※温泉ではありません。
            </p>
            <p class="guide__text-normal">
              <span class="box">客室のユニットバス</span>
            </p>
            <p class="guide__text-normal">
              チェックアウト時間までであれば、いつでも利用可能です。<br>
              ※温泉ではありません。
            </p>
            <hr class="guide__text-hr-dark">
            <h3 class="guide__text-heading">荷物預かり</h3>
            <p class="guide__text-normal">
              <span class="box">クローク</span>
            </p>
            <p class="guide__text-normal">
              主催側で無料のクロークを用意します。<br>
              大会本部にて受け付けますので、ご利用ください。<br>
              ※<span class="pink">貴重品は必ずご自身で管理</span>をお願いいたします。
            </p>
            <p class="guide__text-normal">
              <span class="box">コインロッカー</span>
            </p>
            <p class="guide__text-normal">
              コインロッカーは、メイン施設 S.M.C. の地下と、ノースウイング内の更衣室に設置されています。
            </p>
            <hr class="guide__text-hr-dark">
            <h3 class="guide__text-heading">その他の施設や設備</h3>
            <p class="guide__text-normal">
              その他の施設や設備に関しては、<a href="http://www.tsumagoi.net/" target="_blank">ヤマハリゾートつま恋のWebサイト</a>をご参照ください。
            </p>
            <hr class="guide__text-hr-dark">
            <h3 class="guide__text-heading">(オプション)<br>バスツアーを利用する</h3>
            <p class="guide__text-normal">
              関東方面から参加される方を対象に、大会公式のバスツアーを催行します。
            </p>
            <p class="guide__text-normal">
              <span class="box">旅程</span> <span class="gray">(詳細はツアー会社からの旅行確認書を参照ください)</span>
            </p>
            <table class="guide__text-normal">
              <tr>
                <td class="min-width-100">
                  <span class="box">
                    10/29(土)
                  </span>
                </td>
                <td class="min-width-100">
                  東京駅付近を9:00に出発し、会場までお送りします。<br>
                  当日8時30分から受付を開始します。<span class="pink">遅くとも出発10分前までに集合</span>いただいて、スムースな車両運行にご協力ください。
                </td>
              </tr>
              <tr>
                <td>
                  <span class="box">
                    10/30(日)
                  </span>
                </td>
                <td>
                  閉会式終了後に会場を出発し、20:30に東京駅八重洲口に帰着する予定です。
                </td>
              </tr>
            </table>
            <p class="guide__text-normal">
              <span class="box">バスツアー利用料金</span> 7,500円/人
            </p>
            <p class="guide__text-normal">
              ただいま <b><?php echo(file_get_contents("http://vocacon.net/2016/counter/counter.php?method=echo&type=bustour")); ?></b> 人がバスツアー参加申し込み中です
            </p>

            <div class="col-lg-12 text-center">
              <a href="#" class="btn btn-lg btn-light">
                宿泊参加申込みフォーム<br>
                （9月初旬受付開始）
              </a>
            </div>
          </div>
        </div>
      </div>
    </aside>
  </section>
  
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-lg-offset-1 text-center">
          <h4><strong>主催：VOCACON実行委員会</strong>
          </h4>
          <p>本大会に関するお問い合わせは下記連絡先にお寄せください。<br>
            ＊本イベントは有志団体「VOCACON実行委員会」が主催するファンイベントです。<br>
            ＊本イベントに関するお問い合わせを開催会場にすることのないようご注意ください。</p>
            <ul class="list-unstyled">
              <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:vocacon@gmail.com">vocacon@gmail.com</a>
              </li>
            </ul>
            <br>
            <ul class="list-inline">
              <li>
                <a href="http://twitter.com/vocacon" target="_blank"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
              </li>
            </ul>
            <hr class="small">
            <p class="text-muted">Copyright &copy; 2016 VOCACON Executive Committee<br>
              ※「VOCALOID（ボーカロイド）」はヤマハ株式会社の登録商標です。<br>
            </p>
            <script type="text/javascript" src="https://minmoji.ucda.jp/sealjs/http%3A__vocacon.net" charset="UTF-8"></script>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
