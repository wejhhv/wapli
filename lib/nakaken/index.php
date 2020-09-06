<!DOCTYPE html>
<html lang="ja">
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=2,user-scalable=no">
		<title>WapliApp</title>
	
		  <!-- CSS読み込み-->
		  <link rel="stylesheet" type="text/css" href="lib/onsenui/css/onsenui.css">
		  <link rel="stylesheet" type="text/css" href="lib/onsenui/css/onsen-css-components.css">
		  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
		  <link rel="stylesheet" href="css/map.css">
		  <link rel="stylesheet" type="text/css" href="css/timetable.css">
	
   
		 <!--JS読み込み-->
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		 <script type="text/javascript" src="lib/jquery.js"></script>
		 <script type="text/javascript" src="lib/onsenui/js/onsenui.js"></script>
		 <script type="text/javascript" src="js/splitter.js"></script>
			 <script type="text/javascript" src="js/hidePeriod.js"></script>
		 <script type="text/javascript" src="js/timetable_ver5.js"></script>
		 <script type="text/javascript" src="js/zoom.js"></script>
		 <script type="text/javascript" src="js/openInf.js"></script>
		 <script type="text/javascript" src="js/locateServices.js"></script>
</head>
<body>
		<ons-page>
				<ons-tabbar>
						<ons-tab page="home.html" label="home" icon="home"> </ons-tab>
						<ons-tab page="map.html" label="マップ" icon="map"> </ons-tab>
						<ons-tab page="timetable.html" label="タイムテーブル" icon="clock"> </ons-tab>
						<ons-tab page="ai.html" label="チャット" icon="user"> </ons-tab>
				</ons-tabbar>
		</ons-page>
		<template id="home.html">
			<ons-page id="ons-home">
				home
			  </ons-page>
		</template>

		
<!-- ここからマップ -->
<template id="map.html">
    <ons-page id="ons-map">
      <!--ここから左端のメニュー-->
      <ons-splitter>    
          <ons-splitter-side id="map_menu" side="left" width="220px" collapse swipeable swipe-target-width="50px">
            <ons-page>
              <div class="list_title">
                  <span id="list_title">メニュー</span>
              </div>
              <div class="cp_actab">
              <input id="tab-one" type="button" name="tabs" onclick="locateServices(0)">
              <label for="tab-one">WiFi</label>
              <div class="cp_actab-content">
                
              </div>
              </div>
              <div class="cp_actab">
                <input id="tab-three" type="button" name="tabs" onclick="locateServices(1)">
                <label for="tab-three">Dokodemoプリント</label>
                <div class="cp_actab-content">
                    
                </div>
              </div>
              <div class="cp_actab">
                <input id="tab-four" type="button" name="tabs" onclick="locateServices(2)">
                <label for="tab-four">書面発行機</label>
                <div class="cp_actab-content">
                    
                </div>
              </div>
              <div class="cp_actab">
                <input id="tab-eight" type="button" name="tabs" onclick="locateServices(3)">
                <label for="tab-eight">コピー機</label>
                <div class="cp_actab-content">

                </div>
              </div>
              <div class="cp_actab">
                <input id="tab-six" type="button" name="tabs" onclick="locateServices(4)">
                <label for="tab-six">自動販売機</label>
                <div class="cp_actab-content">
                    
                </div>
              </div>
              <div class="cp_actab">
                <input id="tab-seven" type="button" name="tabs" onclick="locateServices(5)">
                <label for="tab-six">食事</label>
                <div class="cp_actab-content">
                    
                </div>
              </div>
              <div class="cp_actab">
                <input id="tab-eight" type="button" name="tabs" onclick="locateServices(6)">
                <label for="tab-eight">PC</label>
                <div class="cp_actab-content">

                </div>
              </div>
            </ons-page>
          </ons-splitter-side>
          <ons-splitter-content id="ms_content" page="page-top.html"></ons-splitter-content>
      </ons-splitter>
      <!--ここまで左端のメニュー-->
    </ons-page>
  </template>

  <template id="page-top.html">
    <ons-page id="page-top">
      <ons-toolbar>
        <div class="left">
          <ons-toolbar-button onclick="fn1.open()">
          <ons-icon icon="md-menu"></ons-icon>
          </ons-toolbar-button>
        </div>
        <div class="center">
        
        </div>
        <div class="right">
          <ons-button id="zoomin">+</ons-button>
          <ons-button id="zoomout">-</ons-button>
        </div>
      </ons-toolbar>
    
      <div id="map">
        <img id="mapImage" src="imgs/kyotanabeMap.png">

        <!-- 各種マップピン -->
        <img class="pin" id="libraryPin" src="imgs/_i_icon_00140_icon_001400_256.png">
        <img class="pin" id="rohmPin" src="imgs/_i_icon_00140_icon_001400_256.png">
        <img class="pin" id="shigyoPin" src="imgs/_i_icon_00140_icon_001400_256.png">
        <img class="pin" id="rikagakuPin" src="imgs/_i_icon_00140_icon_001400_256.png">
        <img class="pin" id="jmPin" src="imgs/_i_icon_00140_icon_001400_256.png">
        <img class="pin" id="mkPin" src="imgs/_i_icon_00140_icon_001400_256.png">
        <img class="pin" id="nichiryoPin" src="imgs/_i_icon_00140_icon_001400_256.png">
        <img class="pin" id="hokenPin" src="imgs/_i_icon_00140_icon_001400_256.png">
        <img class="pin" id="shionPin" src="imgs/_i_icon_00140_icon_001400_256.png">
        <img class="pin" id="davisPin" src="imgs/_i_icon_00140_icon_001400_256.png">
        <img class="pin" id="seishinPin" src="imgs/_i_icon_00140_icon_001400_256.png">
        <img class="pin" id="vend1Pin" src="imgs/_i_icon_00140_icon_001400_256.png">
        <img class="pin" id="vend2Pin" src="imgs/_i_icon_00140_icon_001400_256.png">
        <img class="pin" id="kdPin" src="imgs/_i_icon_00140_icon_001400_256.png">


        <!-- 図書館 -->
        <ons-button class="obj" id="obj0" onclick="openInf(0)"></ons-button>
        <!-- ローム -->
        <ons-button class="obj" id="obj1" onclick="openInf(1)"></ons-button>
        <!-- 嗣業館 -->
        <ons-button class="obj" id="obj2" onclick="openInf(2)"></ons-button>
         <!-- 理化学館 -->
        <ons-button class="obj" id="obj3" onclick="openInf(3)"></ons-button>
        <!-- JM -->
        <ons-button class="obj" id="obj4" onclick="openInf(4)"></ons-button>
        <!-- 夢告館 -->
        <ons-button class="obj" id="obj5" onclick="openInf(5)"></ons-button>
        <!-- 日糧館 -->
        <ons-button class="obj" id="obj6" onclick="openInf(6)"></ons-button>
        <!-- 保健センター -->
        <ons-button class="obj" id="obj7" onclick="openInf(7)"></ons-button>
        <!-- 紫苑館 -->
        <ons-button class="obj" id="obj8" onclick="openInf(8)"></ons-button>
        <!-- デイヴィス記念館 -->
        <ons-button class="obj" id="obj9" onclick="openInf(9)"></ons-button>


        <!-- 各建物情報 -->
        <!-- 図書館情報 -->
        <div class="obj_inf" id="obj_inf0">
          <h1>ラーネッド記念図書館</h1>
          <p>
            <!--開館時間をホームページから盗みたい-->
            <i class="fas fa-home">　空白</i><br>
            <i class="fas fa-globe">　<a href=" https://library.doshisha.ac.jp/"> https://library.doshisha.ac.jp/</a></i><br>
            <!--Wi-Fi情報-->
            <i class="fas fa-rss">　DO-NET使えます</i> <br>
            <br>      
            <a href="https://doors.doshisha.ac.jp/opac/opac_search/?lang=0" class="btn">DOORS </a> 

            <br>      
            <a href="https://ryoshinkan-lc.doshisha.ac.jp/" class="btn">▼ラーニングコモンズ空席情報はこちら</a> 
          </p>
        </div>
        <!-- ローム情報 -->
        <div class="obj_inf" id="obj_inf1">
          <h1>ローム記念館(RM)</h1>
            <div>
              <p>
              <!--開館時間-->
              <i class="fas fa-home">　8:00~20:00</i><br>
              <!--ジョアミ情報-->
              <i class="fas fa-utensils" >　【ジョアミ】<br>　　平日　8:30~18:00<br>　　土曜　8:30～15:00<br>　　閉店　日・祝日</i><br>
              <!--ロームの電話番号-->
              <i class="fas fa-phone">　0774-65-7800</i><br>
              <!--ロームメールアドレス-->
              <i class="fas fa-paper-plane">　<a href="mailto:jt-rohm@mail.doshisha.ac.jp">jt-rohm@mail.doshisha.ac.jp</a></i><br>
              <!--ホームぺージ-->
              <i class="fas fa-globe">　<a href="https://rohm.doshisha.ac.jp/">https://rohm.doshisha.ac.jp/</a></i><br>
              <!--Wi-Fi状況-->
              <i class="fas fa-rss">　DO-NET使えます</i> <br>
              <!-- 折り畳み展開ポインタ -->
              <div onclick="obj=document.getElementById('open').style; obj.display=(obj.display=='none')?'block':'none';">
                <a style="cursor:pointer;">▼ローム記念館の詳細はこちら</a>
              </div>
              <!--// 折り畳み展開ポインタ -->
              <!-- 折り畳まれ部分 -->
              <div id="open" style="display:none;clear:both;">
                          <!--ここから折りたたまれる内容部分。-->
                      <p>　ローム株式会社から寄付をもとに建設した「同志社ローム記念館」と、最先端の情報教育環境を備えた正課授業で利用する「情報メディア館」からなる複合施設です。 <br>
                      </p><p>　「同志社ローム記念館」は、学生・生徒と産業界、地域との連携による様々なプロジェクトを展開するための施設です。<br>
                      </p><p>　各プロジェクトの活動拠点となるプロジェクトルームを数多備えるだけでなく、グランドフロア吹き抜けは、200インチ大スクリーン、12面大型マルチビジョンを配置したオープンテラス「劇場空間」となっており、コンテンツ制作のためのマルチメディアラウンジやスタジオも配備しています。<br>
                      </p><p>　プロジェクトのミーティング、行事、展示スペース、成果発表等の目的に応じて自由に活用できる空間となっています。 
                      </p>
            </div>
          </div>
              <!--// 折り畳まれ部分 -->
              <br>    
              <!--マルチメディアの空席情報のページに飛ぶ-->  
              <a href="http://sakura.doshisha.ac.jp/Ext/EXT_NEW02.aspx?AreaId=02&LocationCd=60400021&MapId=RG" class="btn">マルチメディアラウンジ空席情報はこちら</a>
        </div>
        <!-- 嗣業館情報 -->
        <div class="obj_inf" id="obj_inf2">
          <h1><ruby>嗣業館<rt>しぎょうかん</rt></ruby></h1>
          <div onclick="obj=document.getElementById('open5').style; obj.display=(obj.display=='none')?'block':'none';">
            <u style="cursor:pointer;">▼嗣業館の情報はこちら</u>
          </div>
          <div id="open5" style="display:none;clear:both;">
            <p>留学生課やキャリアセンター、京田辺校地総務課等の事務室機能が集積した施設です。<br>館名は、 旧約聖書詩篇第73章26節<br>「されど神はわがこころの磐（いわ）わがとこしえの嗣業 （ゆずり）なり」<br>に由来します。</p>
          </div>
          <br>
          <i class="fas fa-globe"fa-4x>　<a href="https://ois.doshisha.ac.jp/index.html">▼留学生課のホームページはこちら</a></i><br>
          <i class="fas fa-globe"fa-4x>　<a href="https://career-center.doshisha.ac.jp/">▼キャリアセンターのホームページはこちら</a></i><br>
        </div>
        <!-- 理化学館情報 -->
        <div class="obj_inf" id="obj_inf3">
          <h1>理化学館(RG)</h1>
          <div onclick="obj=document.getElementById('open17').style; obj.display=(obj.display=='none')?'block':'none';">
            <u style="cursor:pointer;">▼館の情報はこちら</u>
          </div>
          <div id="open17" style="display:none;clear:both;">
            <p>今出川キャンパスにあるハリス理化学館の理念を継いだ理工学部・理工学研究科の拠点施設です。<br>正面玄関上には、J.N.ハリスの言葉"SEEK THROUGH YOUR VOCATION TO SERVE GOD AND HUMANITY"<br>（天職による神と人類への献身）が刻まれています。</p>
          </div>
          <a href="https://se.doshisha.ac.jp" class="btn">▼理工学部HPはこちら</a><br>
          <a href="https://biomedical.doshisha.ac.jp" class="btn">▼生命医科学部HPはこちら</a>
        </div>
        <!-- JM情報 -->
        <div class="obj_inf" id="obj_inf4">
          <h1>情報メディア館（JM）</h1>
           <div onclick="obj=document.getElementById('open61').style; obj.display=(obj.display=='none')?'block':'none';">
              <u style="cursor:pointer;">▼館の情報はこちら</u><br>
              <a href="http://openpc.doshisha.ac.jp/clv/s/" class="btn">▼PC空席情報はこちら</a> 
           </div>
           <div id="open61" style="display:none;clear:both;">
               <p>      
              </p>
           </div>
        </div>
        <!-- 夢告館情報 -->
        <div class="obj_inf" id="obj_inf5">
          <h1><ruby> 夢告館<rt>むこくかん</rt>（MK）　</ruby></h1>
          <div onclick="obj=document.getElementById('open52').style; obj.display=(obj.display=='none')?'block':'none';">
            <u style="cursor:pointer;">▼館の情報はこちら</u><br>
            <a href="https://www.cis.doshisha.ac.jp" class="btn">▼文化情報学部のHPはこちら</a> 
          </div>
          <div id="open52" style="display:none;clear:both;">
              <p>   
                    文化情報学部・文化情報学研究科の拠点施設および教室棟で、<br>
                    新約聖書マタイによる福音書第1章20節「視（み）よ、主の使、夢に現れて言ふ『ダビデの子ヨセフよ、妻マリアを納（い）るる事を恐るな。<br>
                    その胎に宿る者は聖霊によるなり。』」に由来します。
            </p>
          </div>
        </div>
        <!-- 日糧館情報 -->
        <div class="obj_inf" id="obj_inf6">
          <h1>日糧館</h1>
          <h2>【京田辺Cafeteria】</h2>
          <p>
            <!--開館情報-->
            <i class="fas fa-utensils">　平日　8:30~14:00<br>　　土曜　8:30～14:00<br>　</i><br>
            日糧館の二階にあるカフェテリア方式の大型食堂です。座席数は５２５席。
            <!--ホームぺージ-->
            <i class="fas fa-globe">　<a href="https://www.doshisha.ac.jp/information/facility/restaurant.html">▼ホームページはこちら</a></i><br>
          </p>
          <h2>【カフェテリア　FUJIYA】</h2>
          <p>
            <!--開館情報-->
            <i class="fas fa-utensils">　平日　10:00~15:00<br>　　土曜　10:00～14:00<br>　</i><br>
            日糧館の一階にあるカフェテリア方式の大型食堂です。座席数は５４８席。
            <!--ホームぺージ-->
            <i class="fas fa-globe">　<a href="https://www.doshisha.ac.jp/information/facility/restaurant.html">▼ホームページはこちら</a></i><br>
          </p>
          <h2>【カリーハウス】</h2>
          <p>
          <!--開館情報-->
          <i class="fas fa-utensils" >　平日　11:00~14:00<br>　　土曜　10:00~15:00<br>　</i><br>
          日糧館の一階にあるおいしんボ横丁と呼ばれる食堂専門街です。座席数は４１席。
          <!--ホームぺージ-->
          <i class="fas fa-globe">　<a href="https://www.doshisha.ac.jp/information/facility/restaurant.html">▼ホームページはこちら</a></i><br>
          </p>
          <h2>【和麺・丼　いも文】</h2>
          <p>
          <!--開館情報-->
          <i class="fas fa-utensils" >　平日　11:00~19:00<br>　　土曜　11:00~14:00<br>　</i><br>
          日糧館の一階にあるおいしんボ横丁と呼ばれる食堂専門街です。座席数は32席。
          <!--ホームぺージ-->
          <i class="fas fa-globe">　<a href="https://www.doshisha.ac.jp/information/facility/restaurant.html">▼ホームページはこちら</a></i><br>
          </p>
          <h2>【とんかつ　ふじカツ】</h2>
          <p>
          <!--開館情報-->
          <i class="fas fa-utensils">　平日　11:00~15:00<br>　　土曜　11:00~45:00<br>　</i><br>
          日糧館の一階にあるおいしんボ横丁と呼ばれる食堂専門街です。座席数は34席。
          <!--ホームぺージ-->
          <i class="fas fa-globe">　<a href="https://www.doshisha.ac.jp/information/facility/restaurant.html">▼ホームページはこちら</a></i><br>
          </p>
          <h2>【Hamac de Paradis Latte】</h2>
          <p>
          <!--開館情報-->
          <i class="fas fa-utensils">　平日　10:30~20:00（l.o.）<br>　　土曜　11:00~14:00（l.o.）<br>　</i><br>
          日糧館の一階にあるおいしんボ横丁と呼ばれる食堂専門街です。座席数は120席。
          <!--ロームの電話番号-->
          <i class="fas fa-phone">　0774-65-8368</i><br>
          <!--ホームぺージ-->
          <i class="fas fa-globe">　<a href="https://www.balnibarbi.com/shops/hamac_latte/">▼ホームページはこちら</a></i><br>
          </p>
        </div>
        <!-- 保健センター情報 -->
        <div class="obj_inf" id="obj_inf7">
          <h1>保健センター</h1>
          <p>
          <!--開館時間-->
          <i class="fas fa-home">　月～金<br>　　９：００～１２：００、<br>　　１３：００～１７：００</i><br>
          ・一般診療　月～金　13：00～16：00<br>
          （受け付けは15:30まで）<br>
          ・精神保健相談　火・金　予約制 <br>
          <i class="fas fa-phone"fa-4x>　0774-65-7390</i><br>
          <!--ホームぺージ-->
          <i class="fas fa-globe"fa-4x>　<a href="https://health.doshisha.ac.jp/">▼ホームページはこちらです。</a></i><br>
          </p>
        </div>
        <!-- 紫苑館情報 -->
        <div class="obj_inf" id="obj_inf8">
          <h1><ruby>紫苑館<rt>しおんかん</rt></ruby></h1>
          <p>
          <!--開館情報-->
          <i class="fas fa-utensils " >　平日　11:00~20:00<br>　　休日　11:00~19:00<br>　</i><br>
          カフェテリア方式の大食堂やラウンジといった福利厚生施設です。座席数は７８１席。
          </p>
        </div>
        <!-- デイヴィス記念館情報 -->
        <div class="obj_inf" id="obj_inf9">
          <h1>デイヴィス記念館</h1>
          <div onclick="obj=document.getElementById('open60').style; obj.display=(obj.display=='none')?'block':'none';">
            <u style="cursor:pointer;">▼館の情報はこちら</u>
          </div>
          <div id="open60" style="display:none;clear:both;">
            <p>   
              ・開講期間中は月曜～金曜の15時～21時30分、土曜の13時～21時30分 <br>
              ・試験期間中、夏期・冬期・春期休暇中、日・祝日は9時～21時<br>
                ・夏期（8月中旬）と冬期（年末年始）は使用不可の期間あり<br>
              トレーニングルーム<br>
              【使用日時】<br>
                ○開講・試験期間 <br>
                ＜当日使用の場合＞ 　　平日9：00～11：30<br>
                　ただし、土曜日に使用する場合は前日の金曜日  9：00～11：30に受付 　　（金曜日が休日の場合はその前日）<br>
              ＜事前予約する場合＞ 　　使用日の前週の金曜日  9：00～11：30（金曜日が休日の場合はその前日） <br>
              ※教室ダイヤが確定していない時期は貸し出しできない場合がある。<br>
              月・火・水・金：12：15～20：00 <br>
              土　曜　日：10：30～18：00 <br>
              ※木曜日、日曜日、祝日は閉室。<br>
                ※授業時間割によって変更の可能性がある。<br>
                詳細はスポーツ支援課事務室前掲示板にて周知する。<br>
              【申込受付】 <br>
              ・必ず使用者講習（約1時間）を受講すること。（講習申込は、スポーツ支援課）。<br>
                ・各講習日とも定員30名、先着順にて受け付ける。<br> 
              ・講習日程は、スポーツ支援課事務室前掲示板にてお知らせ。<br>
            </p>
          </div>
        </div>

      </div>

    </ons-page>
  </template>
<!--ここまでマップ  -->

		
<!-- ここからタイムテーブル -------------------------------------------------------------->
		<template id="timetable.html">
			<ons-page id="ons-timetable.html">

<!-- 出欠　----------------------------------------------------------------------------- -->
<template id="attendanceConfirmation0">
	<ons-page id="ons-attendanceConfirmation0">
			<ons-toolbar id="lectureName0" width="100%" style="background-color:rgb(255, 255, 254);">		
				<div class="center" >出欠確認</div>
				<div class="left">
								<ons-back-button>戻る</ons-back-button>
							</div>
</ons-toolbar>
	<div>講義0のだよ</div>
	<!-- 出欠ボタン----------------------------------- -->
<div class="checkAttendance" id="attendance0">
	<a href="#" class="btn-attendance">
		<i class="fas fa-running"></i>
	  </a>
	  <div>　　出席</div>
	</div>

	<div class="checkAttendance" id="late0">
		<a href="#" class="btn-late">
			<i class="fas fa-exclamation-circle"></i>
		  </a>
		  <div>　  遅刻</div>
		</div>
		<div class="checkAttendance" id="absence0">
			<a href="#" class="btn-absence">
			<i class="fas fa-bed"></i>
			  </a>
			  <div>　　欠席</div>
			</div>
<!-- 出欠ボタン ここまで------------------------------------>

			<!-- 出欠の詳細 ---------------------------------->
			<div id='attendanceDetails0' class='attendanceDetails'>
				<div>出席</div>
				<div id="attendanceTime0" class="attendanceTime"></div>
			   </div>

			   <div id='lateDetails0' class='lateDetails'>
				<div>遅刻</div>
				<div id="lateTime0" class="lateTime"></div>
			   </div>

			   <div id='absenceDetails0' class='absenceDetails'>
				<div>欠席</div>
				<div id="absenceTime0" class="absenceTime"></div>
			   </div>
				   <!--------- 出欠の詳細　ここまで ------------->
				   
		<!-- 出欠回数--------------------- -->
			<ons-list-header >出席回数</ons-list-header>
			<ons-list-item  class="attendanceCount" id="attendanceCount0" tappable>
			</ons-list-item>
			<ons-list-header >遅刻回数</ons-list-header>
			<ons-list-item  class="lateCount" id="lateCount0" tappable>
			</ons-list-item>
			<ons-list-header >欠席回数</ons-list-header>
			<ons-list-item  class="absenceCount" id="absenceCount0" tappable>
			</ons-list-item>
<!-- 出欠回数 ここまで--------------------- -->
			
			<br>
			<br>
			<ons-list-item  class="checkAttendanceClear" tappable>
				<div>クリア</div>
			</ons-list-item>


		</ons-page>
</template>
<!--メモ ----------------------------------------------------------------- -->
	<template id="memo0">
			<ons-page id="ons-memo0">
				<ons-toolbar id="lectureName0" width="100%" style="background-color:rgb(255, 255, 254);">		
					<div class="center" >メモ</div>
					<div class="left">
									<ons-back-button>戻る</ons-back-button>
								</div>
	</ons-toolbar>
		<div>講義0のだよ</div>
		<form name="memoForm0">
			<textarea name="lectureMemo" placeholder="自由にメモしてください"  id="memoContent0" name="memoContent0" class="memoContent" value=""></textarea>
		</form>
		  <ons-button id="saveMemo0" class="saveMemo" onClick="saveStorage()">メモの保存</ons-button>
		<textarea id="displayMemo1">
		</textarea>
			</ons-page>

	</template>

<!--評価基準 ----------------------------------------------------------------- -->

	<template id="EvaluationCriteria0">
			<ons-page id="ons-EvaluationCriteria0">
					<ons-toolbar id="lectureName0" width="100%" style="background-color:rgb(255, 255, 254);">		
						<div class="center" >評価基準</div>
						<div class="left">
										<ons-back-button>戻る</ons-back-button>
									</div>
		</ons-toolbar>
			<div>講義0のだよ</div>
				</ons-page>
	</template>
<!--科目選択 ----------------------------------------------------------------- -->
	<template id="courseRegistration0">
		<ons-page id="ons-courseRegistration0">
				<ons-toolbar id="lectureName0" width="100%" style="background-color:rgb(255, 255, 254);">		
					<div class="center" >科目選択
					</div>
					<div class="left">
									<ons-back-button>戻る</ons-back-button>
								</div>
	</ons-toolbar>

		<form method="POST" action="シラバス検索.php">
			<div>科目コードを入力してください
				<br>
				<input type="text" name="c1"></div>
			<input type="submit" value="検索" style="background-color:deepskyblue;">
			</form>
			<br>
			<br>
			もしくは
			<br>
			<br>
			<form method="POST" action="シラバス検索.php">
				<div>開講年度
					<br>
					<input type="text" name="c1"></div>
				<div>授業名
					<br>
			<input type="text" name="c2"></div>
			<div>教授名
				<br>
				<input type="text" name="c3"></div>
			
				<input type="submit" value="検索" style="background-color:deepskyblue;">
				</form>
			</ons-page>
</template>

<!-- シラバス-------------------------------------------------------------------- -->
			　	<template id="syllabus0">
						<ons-page id="ons-syllabus0">
							<ons-toolbar id="lectureName0" width="100%" style="background-color:rgb(255, 255, 254);">		
								<div class="center" >シラバス</div>
								<div class="left">
												<ons-back-button>戻る</ons-back-button>
											</div>
				</ons-toolbar>
					<div>講義0のシラバスだよ</div>
						</ons-page>
		
				</template>
				<template id="syllabus1">
					<ons-page id="ons-syllabus1">
						<ons-toolbar id="lectureName0" width="100%" style="background-color:rgb(255, 255, 254);">			
							<div class="center" >シラバス</div>
							<div class="left">
											<ons-back-button>戻る</ons-back-button>
										</div>
			</ons-toolbar>
			<div>講義1のシラバスだよ</div>
					</ons-page>
				</template>
				
				
				
				
<!-- ここから各ページ ------------------------------------------------------------------->
						<template id="lecturePage0">
								<ons-page id="ons-lecturePage0">
												<ons-toolbar id="lectureName0" width="100%" style="background-color:rgb(255, 255, 254);">
														
																<div class="center" >講義０</div>
																<div class="left">
																				<ons-back-button>戻る</ons-back-button>
																			</div>
												</ons-toolbar>
									   
						<ons-list id=lecturePage0List>
							   
								<ons-list-header >管理</ons-list-header>
								<ons-list-item  class="lecturePageListItem" tappable>
										<div>出欠</div>
								</ons-list-item>
								<ons-list-item  class="lecturePageListItem" tappable>
										<div>メモ</div>
								</ons-list-item>
								<ons-list-header>授業詳細</ons-list-header>
								<ons-list-item   class="lecturePageListItem syllabus"  value="0"  tappable>
										<div >シラバス</div>
								</ons-list-item>
								<ons-list-item  class="lecturePageListItem" tappable>
										<div>e-class</div>
								</ons-list-item>
								<ons-list-header>授業情報</ons-list-header>
								<ons-list-item class="lecturePageListItem" tappable>
										<div>評価基準</div>
								</ons-list-item>
								<ons-list-header>授業連絡</ons-list-header>
								<ons-list-item  class="lecturePageListItem" tappable>
										<div>休講情報</div>
								</ons-list-item>
								<ons-list-header>授業設定</ons-list-header>
								<ons-list-item  class="lecturePageListItem" tappable>
									<div>講義選択</div>
							</ons-list-item>
						</ons-list>
						<br>
						<br>
						<br>
		</ons-page>
				</template> <template id="lecturePage1">
				<ons-page id="ons-lecturePage1">
					<ons-toolbar width="100%" style="background-color:rgb(255, 255, 254);">
					<div class="left">
						<ons-back-button>戻る</ons-back-button>
					</div>
					<div class="center" >講義１</div>
					</ons-toolbar>
					<ons-list id=lecturePage1List>
							   
						<ons-list-header >記録</ons-list-header>
						<ons-list-item  class="lecturePageListItem" tappable>
								<div>出欠</div>
						</ons-list-item>
						<ons-list-item  class="lecturePageListItem" tappable>
								<div>メモ</div>
						</ons-list-item>
						<ons-list-header>リンク</ons-list-header>
						<ons-list-item   class="lecturePageListItem syllabus"  value="0"  tappable>
								<div >シラバス</div>
						</ons-list-item>
						<ons-list-item  class="lecturePageListItem" tappable>
								<div>e-class</div>
						</ons-list-item>
						<ons-list-header>授業情報</ons-list-header>
						<ons-list-item class="lecturePageListItem" tappable>
								<div>評価基準</div>
						</ons-list-item>
						<ons-list-header>授業連絡</ons-list-header>
						<ons-list-item  class="lecturePageListItem" tappable>
								<div>休講情報</div>
						</ons-list-item>
						<ons-list-item  class="lecturePageListItem" tappable>
							<div>科目登録</div>
					</ons-list-item>
				</ons-list>
				<br>
				<br>
				<br>
				</ons-page>
				</template> <template id="lecturePage2">
				<ons-page id="ons-lecturePage2">
					<ons-toolbar width="100%" style="background-color:rgb(255, 255, 254);">
					<div class="left">
						<ons-back-button>戻る</ons-back-button>
					</div>
					<div class="center">講義２</div>
					</ons-toolbar>
				</ons-page>
				</template> <template id="lecturePage3">
					<ons-page id="ons-lecturePage3">
					<ons-toolbar width="100%" style="background-color:rgb(255, 255, 254);">
						<div class="left">
						<ons-back-button>戻る</ons-back-button>
						</div>
						<div class="center">講義３</div>
					</ons-toolbar>
					</ons-page>
				</template> <template id="lecturePage4">
					<ons-page id="ons-lecturePage4">
						<ons-toolbar width="100%" style="background-color:rgb(255, 255, 254);">
						<div class="left">
							<ons-back-button>戻る</ons-back-button>
						</div>
						<div class="center">講義4</div>
						</ons-toolbar>
					</ons-page>
				</template> <template id="lecturePage5">
					<ons-page id="ons-lecturePage5">
					<ons-toolbar width="100%" style="background-color:rgb(255, 255, 254);">
						<div class="left">
						<ons-back-button>戻る</ons-back-button>
						</div>
						<div class="center">講義５</div>
						</ons-toolbar>
					</ons-page>
				</template> <template id="lecturePage6">
				<ons-page id="ons-lecturePage6">
				<ons-toolbar width="100%" style="background-color:rgb(255, 255, 254);">
				<div class="left">
				<ons-back-button>戻る</ons-back-button>
				</div>
				<div class="center">講義６</div>
				</ons-toolbar>
				</ons-page>
				</template> <template id="lecturePage7">
				<ons-page id="ons-lecturePage7">
				<ons-toolbar width="100%" style="background-color:rgb(255, 255, 254);">
				<div class="left">
				<ons-back-button>戻る</ons-back-button>
				</div>
				<div class="center">講義７</div>
				</ons-toolbar>
				</ons-page>
				</template> <template id="lecturePage8">
				<ons-page id="ons-lecturePage8">
				<ons-toolbar width="100%" style="background-color:rgb(255, 255, 254);">
				<div class="left">
				<ons-back-button>戻る</ons-back-button>
				</div>
				<div class="center">講義８</div>
				</ons-toolbar>
				</ons-page>
				</template> <template id="lecturePage9">
				<ons-page id="ons-lecturePage9">
				<ons-toolbar width="100%" style="background-color:rgb(255, 255, 254);">
				<div class="left">
				<ons-back-button>戻る</ons-back-button>
				</div>
				<div class="center">講義９</div>
				</ons-toolbar>
				</ons-page>
				</template> <template id="lecturePage10">
				<ons-page id="ons-lecturePage10">
				<ons-toolbar width="100%" style="background-color:rgb(255, 255, 254);">
				<div class="left">
				<ons-back-button>戻る</ons-back-button>
				</div>
				<div class="center">講義１０</div>
				</ons-toolbar>
				</ons-page>
				</template> <template id="lecturePage11">
				<ons-page id="ons-lecturePage11">
				<ons-toolbar width="100%" style="background-color:rgb(255, 255, 254);">
				<div class="left">
				<ons-back-button>戻る</ons-back-button>
				</div>
				<div class="center">講義１１</div>
				</ons-toolbar>
				</ons-page>
				</template> <template id="lecturePage12">
				<ons-page id="ons-lecturePage12">
				<ons-toolbar width="100%" style="background-color:rgb(255, 255, 254);">
				<div class="left">
				<ons-back-button>戻る</ons-back-button>
				</div>
				<div class="center">講義１２</div>
				</ons-toolbar>
				</ons-page>
				</template> <template id="lecturePage13">
				<ons-page id="ons-lecturePage13">
				<ons-toolbar width="100%" style="background-color:rgb(255, 255, 254);">
				<div class="left">
				<ons-back-button>戻る</ons-back-button>
				</div>
				<div class="center">講義１３</div>
				</ons-toolbar>
				</ons-page>
				</template> <template id="lecturePage14">
				<ons-page id="ons-lecturePage14">
				<ons-toolbar width="100%" style="background-color:rgb(255, 255, 254);">
				<div class="left">
				<ons-back-button>戻る</ons-back-button>
				</div>
				<div class="center">講義１４</div>
				</ons-toolbar>
				
				
				</ons-page>
				</template> <template id="lecturePage15">
				<ons-page id="ons-lecturePage15">
				<ons-toolbar width="100%" style="background-color:rgb(255, 255, 254);">
				<div class="left">
				<ons-back-button>戻る</ons-back-button>
				</div>
				<div class="center">講義１５</div>
				</ons-toolbar>
				
				
				</ons-page>
				</template> <template id="lecturePage16">
				<ons-page id="ons-lecturePage16">
				<ons-toolbar width="100%" style="background-color:rgb(255, 255, 254);">
				<div class="left">
				<ons-back-button>戻る</ons-back-button>
				</div>
				<div class="center">講義１６</div>
				</ons-toolbar>
				
				
				</ons-page>
				</template> <template id="lecturePage17">
				<ons-page id="ons-lecturePage17">
				<ons-toolbar width="100%" style="background-color:rgb(255, 255, 254);">
				<div class="left">
				<ons-back-button>戻る</ons-back-button>
				</div>
				<div class="center">講義１７</div>
				</ons-toolbar>
				
				
				</ons-page>
				</template> <template id="lecturePage18">
				<ons-page id="ons-lecturePage18">
				<ons-toolbar width="100%" style="background-color:rgb(255, 255, 254);">
				<div class="left">
				<ons-back-button>戻る</ons-back-button>
				</div>
				<div class="center">講義１８</div>
				</ons-toolbar>
				
				
				</ons-page>
				</template> <template id="lecturePage19">
				<ons-page id="ons-lecturePage19">
				<ons-toolbar width="100%" style="background-color:rgb(255, 255, 254);">
				<div class="left">
				<ons-back-button>戻る</ons-back-button>
				</div>
				<div class="center">講義１９</div>
				</ons-toolbar>
				
				
				</ons-page>
				</template> <template id="lecturePage20">
				<ons-page id="ons-lecturePage20">
				<ons-toolbar width="100%" style="background-color:rgb(255, 255, 254);">
				<div class="left">
				<ons-back-button>戻る</ons-back-button>
				</div>
				<div class="center">講義２０</div>
				</ons-toolbar>
				
				
				</ons-page>
				</template> <template id="lecturePage21">
				<ons-page id="ons-lecturePage21">
				<ons-toolbar width="100%" style="background-color:rgb(255, 255, 254);">
				<div class="left">
				<ons-back-button>戻る</ons-back-button>
				</div>
				<div class="center">講義２１</div>
				</ons-toolbar>
				
				
				</ons-page>
				</template> <template id="lecturePage22">
				<ons-page id="ons-lecturePage22">
				<ons-toolbar width="100%" style="background-color:rgb(255, 255, 254);">
				<div class="left">
				<ons-back-button>戻る</ons-back-button>
				</div>
				<div class="center">講義２２</div>
				</ons-toolbar>
				
				
				</ons-page>
				</template> <template id="lecturePage23">
				<ons-page id="ons-lecturePage23">
				<ons-toolbar width="100%" style="background-color:rgb(255, 255, 254);">
				<div class="left">
				<ons-back-button>戻る</ons-back-button>
				</div>
				<div class="center">講義２３</div>
				</ons-toolbar>
				
				
				</ons-page>
				</template> <template id="lecturePage24">
				<ons-page id="ons-lecturePage24">
				<ons-toolbar width="100%" style="background-color:rgb(255, 255, 254);">
				<div class="left">
				<ons-back-button>戻る</ons-back-button>
				</div>
				<div class="center">講義２４</div>
				</ons-toolbar>
				
				
				</ons-page>
				</template> <template id="lecturePage25">
				<ons-page id="ons-lecturePage25">
				<ons-toolbar width="100%" style="background-color:rgb(255, 255, 254);">
				<div class="left">
				<ons-back-button>戻る</ons-back-button>
				</div>
				<div class="center">講義２５</div>
				</ons-toolbar>
				
				
				</ons-page>
				</template> <template id="lecturePage26">
				<ons-page id="ons-lecturePage26">
				<ons-toolbar width="100%" style="background-color:rgb(255, 255, 254);">
				<div class="left">
				<ons-back-button>戻る</ons-back-button>
				</div>
				<div class="center">講義２６</div>
				</ons-toolbar>
				
				
				</ons-page>
				</template> <template id="lecturePage27">
				<ons-page id="ons-lecturePage27">
				<ons-toolbar width="100%" style="background-color:rgb(255, 255, 254);">
				<div class="left">
				<ons-back-button>戻る</ons-back-button>
				</div>
				<div class="center">講義２７</div>
				</ons-toolbar>
				
				
				</ons-page>
				</template> <template id="lecturePage28">
				<ons-page id="ons-lecturePage28">
				<ons-toolbar width="100%" style="background-color:rgb(255, 255, 254);">
				<div class="left">
				<ons-back-button>戻る</ons-back-button>
				</div>
				<div class="center">講義２８</div>
				</ons-toolbar>
				
				
				</ons-page>
				</template> <template id="lecturePage29">
				<ons-page id="ons-lecturePage29">
				<ons-toolbar width="100%" style="background-color:rgb(255, 255, 254);">
				<div class="left">
				<ons-back-button>戻る</ons-back-button>
				</div>
				<div class="center">講義２９</div>
				</ons-toolbar>
				
				
				</ons-page>
				</template> <template id="lecturePage30">
				<ons-page id="ons-lecturePage30">
				<ons-toolbar width="100%" style="background-color:rgb(255, 255, 254);">
				<div class="left">
				<ons-back-button>戻る</ons-back-button>
				</div>
				<div class="center">講義３０</div>
				</ons-toolbar>
				
				
				</ons-page>
				</template> <template id="lecturePage31">
				<ons-page id="ons-lecturePage31">
				<ons-toolbar width="100%" style="background-color:rgb(255, 255, 254);">
				<div class="left">
				<ons-back-button>戻る</ons-back-button>
				</div>
				<div class="center">講義３１</div>
				</ons-toolbar>
				
				
				</ons-page>
				</template> <template id="lecturePage32">
				<ons-page id="ons-lecturePage32">
				<ons-toolbar width="100%" style="background-color:rgb(255, 255, 254);">
				<div class="left">
				<ons-back-button>戻る</ons-back-button>
				</div>
				<div class="center">講義３２</div>
				</ons-toolbar>
				
				
				</ons-page>
				</template> <template id="lecturePage33">
				<ons-page id="ons-lecturePage33">
				<ons-toolbar width="100%" style="background-color:rgb(255, 255, 254);">
				<div class="left">
				<ons-back-button>戻る</ons-back-button>
				</div>
				<div class="center">講義３３</div>
				</ons-toolbar>
				
				
				</ons-page>
				</template> <template id="lecturePage34">
				<ons-page id="ons-lecturePage34">
				<ons-toolbar width="100%" style="background-color:rgb(255, 255, 254);">
				<div class="left">
				<ons-back-button>戻る</ons-back-button>
				</div>
				<div class="center">講義３４</div>
				</ons-toolbar>
				
				
				</ons-page>
				</template> <template id="lecturePage35">
				<ons-page id="ons-lecturePage35">
				<ons-toolbar width="100%" style="background-color:rgb(255, 255, 254);">
				<div class="left">
				<ons-back-button>戻る</ons-back-button>
				</div>
				<div class="center">講義３５</div>
				</ons-toolbar>
				
				
				</ons-page>
				</template> <template id="lecturePage36">
				<ons-page id="ons-lecturePage36">
				<ons-toolbar width="100%" style="background-color:rgb(255, 255, 254);">
				<div class="left">
				<ons-back-button>戻る</ons-back-button>
				</div>
				<div class="center">講義３６</div>
				</ons-toolbar>
				
				
				</ons-page>
				</template> <template id="lecturePage37">
				<ons-page id="ons-lecturePage37">
				<ons-toolbar width="100%" style="background-color:rgb(255, 255, 254);">
				<div class="left">
				<ons-back-button>戻る</ons-back-button>
				</div>
				<div class="center">講義３７</div>
				</ons-toolbar>
				
				
				</ons-page>
				</template> <template id="lecturePage38">
				<ons-page id="ons-lecturePage38">
				<ons-toolbar width="100%" style="background-color:rgb(255, 255, 254);">
				<div class="left">
				<ons-back-button>戻る</ons-back-button>
				</div>
				<div class="center">講義３８</div>
				</ons-toolbar>
				
				
				</ons-page>
				</template> <template id="lecturePage39">
				<ons-page id="ons-lecturePage39">
				<ons-toolbar width="100%" style="background-color:rgb(255, 255, 254);">
				<div class="left">
				<ons-back-button>戻る</ons-back-button>
				</div>
				<div class="center">講義３９</div>
				</ons-toolbar>
				
				
				</ons-page>
				</template> <template id="lecturePage40">
				<ons-page id="ons-lecturePage40">
				<ons-toolbar width="100%" style="background-color:rgb(255, 255, 254);">
				<div class="left">
				<ons-back-button>戻る</ons-back-button>
				</div>
				<div class="center">講義４０</div>
				</ons-toolbar>
				
				
				</ons-page>
				</template> <template id="lecturePage41">
				<ons-page id="ons-lecturePage41">
				<ons-toolbar width="100%" style="background-color:rgb(255, 255, 254);">
				<div class="left">
				<ons-back-button>戻る</ons-back-button>
				</div>
				<div class="center">講義４１</div>
				</ons-toolbar>
				</ons-page>
				</template>
<!-- ここまで各ページ -->


<ons-splitter>
		<ons-splitter-side itter-side id="timetable_menu" side="left" width="220px" collapse swipeable swipe-target-width="50px">
		  <ons-page id="lecture">
				<ons-list>
							<!--変更部分　12/19-->
							<div class="cp_actab-content">
								<input type="button" id="button_hidePiriod6" value="6限非表示" onclick="TableDisp(1)">
								<input type="button" id="button_dispPiriod6" value="6限表示" onclick="TableDisp(0)" hidden>
								<input type="button" id="button_hidePiriod7" value="7限非表示" onclick="TableDisp(3)">
								<input type="button" id="button_dispPiriod7" value="7限表示" onclick="TableDisp(2)" hidden>
								<input type="button" value="土曜非表示" onclick="TableDisp(4)">
								</div>
					<!--変更　ここまで-->
				  <ons-list-item onclick="fn2.load('settings.html')" tappable>
					設定
				  </ons-list-item>
				  <div>
					  <ons-list-item >
						  設定
						</ons-list-item>
				  </div>
				  </ons-list>



				  <div class="cp_actab">
					<input id="tab-one" type="checkbox" name="tabs">
					<label for="tab-one">年度</label>
					<div class="cp_actab-content">
					  <button id="jagaButton" modifier="quiet">2019</button>
					  <button id="potatoButton" modifier="quiet">2020</button>
					</div>
					</div>



				  </ons-page>
		  </ons-splitter-side>
		  <ons-splitter-content id="ts_content" page="ons-appsche.html"></ons-splitter-content>
	  </ons-splitter>      
	   </ons-page>
	  </template>
	   
		  <template id="settings.html">
		  <ons-page >
			<ons-toolbar>
			  <div class="left">
				<ons-toolbar-button onclick="fn2.open()">
				  <ons-icon icon="md-menu"></ons-icon>
				</ons-toolbar-button>
			  </div>
			  <div class="center">
				Settings
			  </div>
			</ons-toolbar>
		  </ons-page>
		</template>

	  
	  <template  id="ons-appsche.html">
		  <ons-page id="ons-appsche">
	  <ons-toolbar>
		  <div class="left">
		  <ons-toolbar-button onclick="fn2.open()">
			<ons-icon icon="md-menu"></ons-icon>
		  </ons-toolbar-button>
		  </div>
		<div class="center">
			講義
		</div>
	  </ons-toolbar>


	  <ons-navigator id="1_lecture">
		<ons-page id="ons-lecture">
				<!-- 講義の表 -->

		
				
				
				<table border="1" id="table" class='table' style="font-size: small;">
						<tr id="weeks" class="weeks">
								<th id="0-0"></th>
								<th id="0-1" class="day">月</th>
								<th id="0-2" class="day">火</th>
								<th id="0-3" class="day">水</th>
								<th id="0-4" class="day">木</th>
								<th id="0-5" class="day">金</th>
								<th id="0-6" class="day">土</th>
								</tr>
								<!-- 一限目 -->
								<tr  id="period_1">
										<td class="piriod_num"><div>9:00</div><br><b>1</b><br><br><div>10:30</div></td>
										<td id="1_1-1"  class="a">
												<div id="1_1-1c" class="sell "><p class="tagP"></p></div>
												<hr>
												<div id="1_1-1p" class=sell><p class="tagP  classroom"></p></div>
										</td>
										<td id="1_1-2" class="a" >
												<div id="1_1-2c" class="sell"><p class="tagP"></p></div>
												<hr>
												<div id="1_1-2p" class="sell"><p class="tagP classroom"></p></div>
										</td>
										<td id="1_1-3" class="a a-1-3">
												<div id="1_1-3c" class="sell"><p class="tagP">アナリティカルリーディング</p></div>
												<hr>
												<div id="1_1-3p" class="sell"><p class="tagP classroom">TC1-201</p></div>
										</td>
										<td id="1_1-4" class="a a-1-4">
												<div id="1_1-4c" class="sell"><p class="tagP">情報数学</p></div>
												<hr>
												<div id="1_1-4p" class="sell"><p class="tagP classroom">MK201</p></div>
										</td>
										<td id="1_1-5" class="a">
												<div id="1_1-5c" class="sell"><p class="tagP"></p></div>
												<hr>
												<div id="1_1-5p" class="sell"><p class="tagP classroom"></p></div>
										</td>
										<td id="1_1-6" class="a a-1-6">
												<div id="1_1-6c" class="sell"><p class="tagP">中国語2-1</p></div>
												<hr>
												<div id="1_1-6p" class="sell"><p class="tagP classroom">TC1-119</p></div>
										</td>
								</tr>
								<tr id="period_2">
												<td id="1_2-0" class="piriod_num"><div>10:45</div><br><b>2</b><br><br><div>12:15</div></td>
												<td id="1_2-1" class="a a-2-1">
														<div id="1_2-1c" class="sell"><p class="tagP">コミニカティブイングリッシュ</p></div>
														<hr>
														<div id="1_2-1p" class="sell"><p class="tagP classroom">TC1-310</p></div>
												</td>
												<td id="1_2-2" class="a">
														<div id="1_2-2c" class="sell"><p class="tagP"></p></div>
														<hr>
														<div id="1_2-2p" class="sell"><p class="tagP classroom"></p></div>
												</td>
												<td id="1_2-3" class="a a-2-3">
														<div id="1_2-3c" class="sell"><p class="tagP">運動学の基礎</p></div>
														<hr>
														<div id="1_2-3p" class="sell"><p class="tagP classroom">KD203</p></div>
												</td>
												<td id="1_2-4" class="a a-2-4">
														<div id="1_2-4c" class="sell"><p class="tagP">コンピュータグラフィックス</p></div>
														<hr>
														<div id="1_2-4p" class="sell"><p class="tagP classroom">KD106</p></div>
												</td>
												<td id="1_2-5" class="a a-2-5">
														<div id="1_2-5c" class="sell"><p class="tagP">コンピュータ基礎実習</p></div>
														<hr>
														<div id="2-5p" class="sell"><p class="tagP classroom">JM201</p></div>
												</td>
												<td id="1_2-6" class="a">
														<div id="1_2-6c" class="sell"><p class="tagP"></p></div>
														<hr>
														<div id="1_2-6p" class="sell"><p class="tagP classroom"></p></div>
												</td>
										</tr>
										<tr id="period_3">
												<td id="1_3-0" class="piriod_num"><div>13:10</div><br><b>3</b><br><br><div>14:40</div></td>
												<td id="1_3-1" class="a a-3-1">
														<div id="1_3-1c" class="sell"><p class="tagP">情報工学概論</p></div>
														<hr>
														<div id="1_3-1p" class="sell"><p class="tagP classroom">TC3-214</p></div>
												</td>
												<td id="1_3-2" class="a a-3-2">
														<div id="1_3-2c" class="sell"><p class="tagP">経済学2-1</p></div>
														<hr>
														<div id="1_3-2p" class="sell"><p class="tagP classroom">TC2-201</p></div>
												</td>
												<td id="1_3-3" class="a a-3-3">
														<div id="1_3-3c" class="sell"><p class="tagP">微分方程式</p></div>
														<hr>
														<div id="1_3-3p" class="sell"><p class="tagP classroom">KD204</p></div>
												</td>
												<td id="1_3-4" class="a a-3-4">
														<div id="1_3-4c" class="sell"><p class="tagP">解析学II</p></div>
														<hr>
														<div id="1_3-4p" class="sell"><p class="tagP classroom">KD104</p></div>
												</td>
												<td id="1_3-5" class="a a-3-5">
														<div id="1_3-5c" class="sell"><p class="tagP">バドミントン</p></div>
														<hr>
														<div id="1_3-5p" class="sell"><p class="tagP classroom">DV</p></div>
												</td>
												<td id="1_3-6" class="a">
														<div id="1_3-6c" class="sell"><p class="tagP"></p></div>
														<hr>
														<div id="1_3-6p" class="sell"><p class="tagP classroom"></p></div>
												</td>
										</tr>
										<tr id="period_4">
												<td id="1_4-0" class="piriod_num"><div>14:55</div><br><b>4</b><br><br><div>16:25</div></td>
												<td id="1_4-1" class="a">
														<div id="1_4-1c" class="sell"><p class="tagP"></p></div>
														<hr>
														<div id="1_4-1p" class="sell"><p class="tagP classroom"></p></div>
												</td>
												<td id="1_4-2" class="a a-4-2">
														<div id="1_4-2c" class="sell"><p class="tagP">中国語2-1</p></div>
														<hr>
														<div id="1_4-2p" class="sell"><p class="tagP classroom">TC1-119</p></div>
												</td>
												<td id="1_4-3" class="a a-4-3">
														<div id="1_4-3c" class="sell"><p class="tagP">線形代数学</p></div>
														<hr>
														<div id="1_4-3p" class="sell"><p class="tagP classroom">TC3-117</p></div>
												</td>
												<td id="1_4-4" class="a a-4-4">
														<div id="1_4-4c" class="sell"><p class="tagP">AES2-7</p></div>
														<hr>
														<div id="1_4-4p" class="sell"><p class="tagP classroom">TC1-309</p></div>
												</td>
												<td id="1_4-5" class="a a-4-5">
														<div id="1_4-5c" class="sell"><p class="tagP">CプログラミングII</p></div>
														<hr>
														<div id="1_4-5p" class="sell"><p class="tagP classroom">JM201</p></div>
												</td>
												<td id="1_4-6" class="a">
														<div id="1_4-6c" class="sell"><p class="tagP"></p></div>
														<hr>
														<div id="1_4-6p" class="sell"><p class="tagP classroom"></p></div>
												</td>
										</tr>
										<tr id="period_5">
												<td id="1_5-0" class="piriod_num"><div>16:40</div><br><b>5</b><br><br><div>18:10</div></td>
												<td id="1_5-1" class="a">
														<div id="1_5-1c" class="sell"><p class="tagP"></p></div>
														<hr>
														<div id="1_5-1p" class="sell classroom"><p class="tagP classroom"></p></div>
												</td>
												<td id="1_5-2" class="a">
														<div id="1_5-2c" class="sell"><p class="tagP"></p></div>
														<hr>
														<div id="1_5-2p" class="sell classroom"><p class="tagP classroom"></p></div>
												</td>
												<td id="1_5-3" class="a">
														<div id="1_5-3c" class="sell"><p class="tagP"></p></div>
														<hr>
														<div id="1_5-3p" class="sell classroom"><p class="tagP"></p></div>
												</td>
												<td id="1_5-4" class="a">
														<div id="1_5-4c" class="sell"><p class="tagP"></p></div>
														<hr>
														<div id="1_5-4p" class="sell classroom"><p class="tagP"></p></div>
												</td>
												<td id="1_5-5" class="a a-5-5">
														<div id="1_5-5c" class="sell"><p class="tagP">CプログラミングII</p></div>
														<hr>
														<div id="1_5-5p" class="sell classroom"><p class="tagP">JM201</p></div>
												</td>
												<td id="1_5-6" class="a">
														<div id="1_5-6c" class="sell"><p class="tagP"></p></div>
														<hr>
														<div id="1_5-6p" class="sell classroom"><p class="tagP"></p></div>
												</td>
										</tr>
										<tr id="period_6" >
												<td id="1_6-0" class="piriod_num"><div>18:25</div><br><b>6</b><br><br><div>19:55</div></td>
												<td id="1_6-1" class="a">
														<div id="1_6-1c" class="sell"></div>
														<hr>
														<div id="1_6-1p" class="sell classroom"></div>
												</td>
												<td id="1_6-2" class="a">
														<div id="1_6-2c" class="sell"></div>
														<hr>
														<div id="1_6-2p" class="sell classroom"></div>
												</td>
												<td id="1_6-3" class="a">
														<div id="1_6-3c" class="sell"></div>
														<hr>
														<div id="1_6-3p" class="sell classroom"></div>
												</td>
												<td id="1_6-4" class="a">
														<div id="1_6-4c" class="sell"></div>
														<hr>
														<div id="1_6-4p" class="sell classroom"></div>
												</td>
												<td id="1_6-5" class="a">
														<div id="1_6-5c" class="sell"></div>
														<hr>
														<div id="1_6-5p" class="sell classroom"></div>
												</td>
												<td id="1_6-6" class="a">
														<div id="1_6-6c" class="sell"></div>
														<hr>
														<div id="1_6-6p" class="sell classroom"></div>
												</td>
										</tr>
										<tr id="period_7" >
												<td id="1_7-0" class="piriod_num"><div>20:10</div><br><b>7</b><br><br><div>21:40</div></td>
												<td id="1_7-1" class="a">
														<div id="1_7-1c" class="sell"></div>
														<hr>
														<div id="1_7-1p" class="sell classroom"></div>
												</td>
												<td id="1_7-2" class="a">
														<div id="1_7-2c" class="sell"></div>
														<hr>
														<div id="1_7-2p" class="sell classroom"></div>
												</td>
												<td id="1_7-3" class="a">
														<div id="1_7-3c" class="sell"></div>
														<hr>
														<div id="1_7-3p" class="sell classroom"></div>
												</td>
												<td id="1_7-4" class="a">
														<div id="1_7-4c" class="sell"></div>
														<hr>
														<div id="1_7-4p" class="sell classroom"></div>
												</td>
												<td id="1_7-5" class="a">
														<div id="1_7-5c" class="sell"></div>
														<hr>
														<div id="1_7-5p" class="sell classroom"></div>
												</td>
												<td id="1_7-6" class="a"value="42">
														<div id="1_7-6c" class="sell"></div>
														<hr>
														<div id="1_7-6p" class="sell classroom"></div>
												</td>
										</tr>
				</table>
		</ons-page>
</ons-navigator>
		</ons-page>
		</template>
<!-- ここまでタイムテーブル -->
		<template id=ai.html>
			<ons-page id="ons-ai">
				ai
			  </ons-page>
		</template>
</body>
</html>