<?

/* Copyright (c) 2009 National Research Institute for Earth Science and
 * Disaster Prevention (NIED).
 * This code is licensed under the GPL 3.0 license, availible at the root
 * application directory.
 */

$css_file_content = <<<__CSS__
/* e-community platform auto generated skin */

* {
	margin: 0;
	padding: 0;
	word-break: break-all;
}

html, body, #wrapper {
	height: 100%;
}

body > #wrapper {
	height: auto;
	min-height: 100%;
}

body {
	color: #333;
	font-family: "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", "メイリオ", Meiryo, Verdana, "ＭＳ Ｐゴシック", sans-serif;
	background:${bg_color} url(${filename}/kabe.gif) ;
	font-size: 13px;
	*font-size: small;
	*font: x-small;
}

/* 背景対策 */
*:first-child+html body {
	padding-left: 1px;
}
* html body {
	padding-left: 1px;
}
body,x:-moz-broken {
	margin-left: -1px;
}

a {
	color: ${link_color};
	text-decoration: none;
}

a:hover {
	text-decoration: underline;
}
a:visited {
	color: ${link_visited_color};
}


/* ヘッダ */

#header {
	height: ${bannar_height}px;
	width:880px;
	margin:0 auto;
	background:url(${bannar_file}) no-repeat center top;
}

#header h1 {
	font-size: 22px;
	*font-size: 167%;
	color: ${page_title_color};
	font-weight: bold;
	padding-top:35px;
	padding-left:25px;
	text-align:left;
	line-height:1;
}


#header h1 a {
	color: ${page_title_color};
	text-decoration: none;
}

#header h1 a:visited {
	color: ${page_title_color};
}

#header h2 {
	font-size: 13px;
	*font-size: 100%;
	color: ${page_title_color};
	font-weight:normal;
	text-align:right;
	margin-top:5px;
	padding-right:20px;
	line-height:1.4;
}


/* wrapper: footerを下寄せするための枠 */

#wrapper {
	background-color:${bg_color};
	margin: 0 auto;
	width: 880px;;
}


/* パンくずリスト */

#nav {
	color:#333;
	display:block;
	width: 880px;
	margin-left:auto;
	margin-right:auto;
	text-align:center;
}

#nav .nav_tp {
	text-align:right;
	margin-top: 5px;
}

#nav ul {
	margin: 0px;
	padding: 0px;
	list-style: none;
	height: 15px;
	color:#333;
}

#nav li {
	width: 95%;
	height: 15px;
	margin: 0;
	padding: 0;
	color: #ffffff;
	font-size: 0.9em;
}


/* ブロック用コンテナ */

#container {
	position: relative;
	clear: both;
	width: 870px;
	margin-left: auto;
	margin-right: auto;
	margin-top:5px;
	text-align: left;
	padding-bottom: 30px;
}

/* space_wrapper: 中央&左ブロックの枠 */
#space_wrapper {
	width:665px;
	float:left;
}

/* space_1: 中央ブロック */
#space_1 {
	width: 460px;
	float:right;
}

#space_1 .box {
	margin-bottom: 15px;
	background-color:#FFF;
}

#space_1 .box_menu {
	display: block;
	font-weight: bold;
	background-color: ${block_title_bg_color};
	padding-left: 5px;
	line-height: 25px;
}

#space_1 .box_menu span {
	display: block;
	color: ${block_title_color};
	font-size: 14px;
	*font-size: 108%;
	font-weight: bold;
	padding-left: 10px;
}

#space_1 .box_main {
	padding:10px;
}

/* space_2: 左ブロック */

#space_2 {
	width: 200px;
	float:left;
	padding-left: 0px;
}

#space_2 .box {
	margin-bottom: 15px;
	background-color:#FFF;
}

#space_2 .box_menu {
	padding-left: 2px;
	line-height: 21px;
	background-color: ${block_title_bg_color};
}

#space_2 .box_menu span {
	display: block;
	font-size: 14px;
	*font-size: 108%;
	font-weight: bold;
	color: ${block_title_color};
	padding-left:8px;
}


#space_2 .box_main{

}


/* space_3: 右ブロック */

#space_3 {
	width: 200px;
	float: right;
	padding-right: 0px;
}

#space_3 .box {
	margin-bottom: 15px;
	background-color:#FFF;
}

#space_3 .box_menu {
	padding-left: 2px;
	line-height: 21px;
	background-color: ${block_title_bg_color};
}

#space_3 .box_menu span {
	display: block;
	font-size: 14px;
	*font-size: 108%;
	font-weight: bold;
	color: ${block_title_color};
	padding-left:8px;
}
#space_3 .box_main{

}

/* ブロック共通 */
.box_main {
	margin: 0;
	padding: 0;
	background-color: #fff;
}

.box div a {
	;
}
.box div a:visited {
	;
}
.box_menu span {
	display: block;
	color: ${block_title_color};
	*font-size:113%;
	font-weight: bold;
}
.box_main {
	padding:5px;
	font-size: 0,9em;
}
.box_edit {
	font-size: 0.9em;
}

.nav, .nav ul { 
	list-style: none;
	margin: 0;
	padding: 0;
}

.nav {
  font-family: Arial, Helvetica, sans-serif;
  z-index: 98;
  position: relative;
}
.nav li {
  float: left;
  margin: 0;
  padding: 0;
  position: relative;
}
.nav li a, .nav li a:link, .nav li a:active, .nav li a:visited {
	background-image: url(image/nav_bg.png);
	background-repeat: repeat-x;
	display: block;
}

/* フッタ */

#footer {
	clear: both;
	position: relative;
	padding: 0;
	margin-left: auto;
	margin-right: auto;
	height: 25px;
	width: 880px;
	text-align: center;
	background-color: ${footer_bg_color};
}

#footer .footer_content {
	border-top:solid 1px #fff;
	color: ${footer_color};
	font-size: 10px;
	padding-top: 5px;
}

#footer a, #footer a:visited {
	text-decoration: underline;
	color: ${footer_color};
}

/* clearfix */
.clearfix:after {
	content: ".";
	display: block;
	height: 0;
	clear: both;
	visibility: hidden;
}
.clearfix {
	display: inline-block;
}
/* Hides from IE-mac \*/
* html .clearfix {
	height: 1%;
}
.clearfix {
	display: block;
}
/* End hide from IE-mac */
__CSS__;
?>
