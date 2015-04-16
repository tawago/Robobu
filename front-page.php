<html>
	<head>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/modules/jquery-fullPage.js"></script>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/modules/jquery.slimscroll.min.js"></script>
	
		<script type="text/javascript">
			$(document).ready(function() {
				$('#fullpage').fullpage({
					anchors: ['firstPage'],
					autoScrolling: false,
					fitToSection: false,
					css3: true
				});
			});
		</script>
		<script type="text/javascript" src=""></script>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/modules/jquery-fullPage.css"></style>
		<link href="//fonts.googleapis.com/css?family=Montserrat:400normal,700normal|Open+Sans:400normal;subset=all" rel="stylesheet" type="text/css">

		<style>
			body{
				margin:0;
				padding:0;
				font-family: 'Montserrat' !important;
  			font-style:  normal;
 				font-weight: 400;
				text-align: center;
			}
			#fullpage{
				background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/img/robobu-top.png) ; 
  			-webkit-background-size: cover;
  			-moz-background-size: cover;
  			-o-background-size: cover;
  			background-size: cover;
				color: #cfcfcf;
				height: auto!important;
			}
			#fullpage .fp-tableCell {
				display: block;
				vertical-align: middle;
				width: 100%;
				height: auto!important;
				padding-top: 200px;
			}
			#fullpage h1{
				text-align: center;
				font-size: 5em;
				padding-left: 160px;
			}
			#fullpage p{
				font-size: 2.5em;
				padding-left: 160px;
			}
			.link_button{
				display: inline-block;
				text-decoration: none;
				width: 300px;
				padding: 10px;
				color: #cfcfcf;
				background: rgba(75,75,75,0.4);
				border: 2px solid #cfcfcf;
				border-radius: 4px;
				webkit-border-radius: 4px;
				-webkit-transition: all 0.3s ease;
				-moz-transition: all 0.3s ease;
				-ms-transition: all 0.3s ease;
				-o-transition: all 0.3s ease;
				transition: all 0.3s ease;
			}
			.link_button:hover{
				background: rgba(0,0,0,0.5);
			}
			.link_button:after{
				height: 16px;
				width: 16px;
				content: "\25B6";
				display: inline-block;
				font-size: .75em;
				position: relative;
				text-align: center;
				left: 2px;
				-webkit-transition: all 0.3s ease;
				-moz-transition: all 0.3s ease;
				-ms-transition: all 0.3s ease;
				-o-transition: all 0.3s ease;
				transition: all 0.3s ease;
			}
			.link_button:hover:after{
				left: 6px;
			}
			#wrap{
				background: #fffff5;
				width: 100%;
				height: 960px;
				color: #80807b;
			}
			.border{
				border-bottom: 2px dotted #e9ccff;
				clear:both;
				width:95%;
				margin: 100px auto 0;
			}
			#top_about{
				padding: 50px 0;
				height: auto;
			}
			#top_about h2{
				margin-bottom: 50px;
			}
			
			#top_about .about_type{
				display: block;
				float: left;
				width: 33%;
			}
			#top_about .about_type p{
				padding: 20px 40px;
			}
			#top_news{}
			#news_body{
				padding: 0 100px;
				height: auto;

			}
			#top_news{
				height: auto;
			}
			#top_search{
				height: auto;
			}
			#top_buin{
				height: auto;
			}
			#buin{
			}
		</style>
	</head>
	<body>
		<div id="fullpage">
			<div class="section" id="section0">
				<div id="robotu-top">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/robobuin.png" style="float:right; margin:50px 140px 0 0;" width="200">
					<h1>{Robobu:ロボ部}</h1>
					<p>ロボット・ヒューマノイド情報 メディア</p>
					<a href="<?php
$recent_post = get_posts('numberposts=1&category_name=new');
if (count($recent_post) > 0) {
	$recent_post_id = $recent_post[0]->ID;
	$recent_post_url = get_permalink($recent_post_id);
	echo $recent_post_url;
} ?>" class="link_button">最新記事を読んでみる</a>
				</div>
			</div>
		</div>
		<div id="wrap">
			<section id="top_about">
				<h2>- ジャンル・記事タイプ -</h2>
				<div class="about_type">
					<h3>試してみた</h3>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/robo-b.png" width="200">
					<p>ロボットは可能性が無限大。日々思いつくアイデアから何ができるか実験</p>
				</div>
				<div class="about_type">
					<h3>最新情報まとめ</h3>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/robo-b.png" width="200">
					<p>ロボットに関する最新情報や注目の技術を分かりやすく解説。これを読めば君もロボ部員</p>
				</div>
				<div class="about_type">
					<h3>インタビュー</h3>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/robo-b.png" width="200">
					<p>あの技術を開発した人の裏話！インタビューから見えてくるロボットの未来とは？</p>
				</div>
				<div class="border"></div>
			</section>
			<section id="top_news">
				<h2>今一番熱い最新記事はこちら！</h2>
				<div id="news_body">
					<p>吾輩わがはいは猫である。名前はまだ無い。<br>
					どこで生れたかとんと見当けんとうがつかぬ。何でも薄暗いじめじめした所でニャーニャー泣いていた事だけは記憶している。吾輩はここで始めて人間というものを見た。</p>
				</div>
				<div class="border"></div>
			</section>
			<section id="top_search">
				<h2>キーワードで気になる記事を検索</h2>
				<form role="search" method="get" class="search-form" action="/">
					<label>
						<input type="search" class="search-field" placeholder="ロボットの名前やハードウェア、ソフトウェア、企業名などで検索ができます" value="" name="s" title="検索:">
					</label>
					<input type="submit" class="search-submit screen-reader-text" value="検索">
				</form>
				<div class="border"></div>
			</section>
			<section id="top_buin">
				<h2>ロボ部部員</h2>
				<div class="buin">試してみた</div>
				<div class="buin">最新情報まとめ</div>
				<div class="buin">インタビュー</div>
				<div class="border"></div>
			</section>
		</div>
	</body>
</html>
