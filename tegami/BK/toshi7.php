<?php

$cn=mysql_connect("localhost","root","root");
$db=mysql_select_db("tegami",$cn);
if(!empty($_POST["name"])){
$result = mysql_query("INSERT INTO complet(name,day,reader,name1,name2,info,yotei,cap1,cap2,cap3,cap4,kg,mmhg) VALUE(\"$_POST[name]\",\"$_POST[day]\",\"$_POST[reader]\",\"$_POST[name1]\",\"$_POST[name2]\",\"$_POST[info]\",\"$_POST[yotei]\",\"$_POST[cap1]\",\"$_POST[cap2]\",\"$_POST[cap3]\",\"$_POST[cap4]\",\"$_POST[kg]\",\"$_POST[mmhg]\")",$cn);

//$result = mysql_query("INSERT INTO otayori(eyar,mooth,name,syumi,club) VALUE(\"$_POST[eyar]\",\"$_POST[mooth]\",\"$_POST[name]\",\"$_POST[syumi]\",\"$_POST[club]\")",$cn);

	}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
    <link rel="stylesheet" href="../css/home.css" />
</head>
<body bgcolor="#f9f9a9">
	<h1 align="center"></h1>
	<form method="post" action="update.php"enctype="multipart/form-data"> 
        <div class="kako">
            <iframe src="" name="tuki"id="tuki"width="400" height="500"align="right" scrolling="yes"frameborder ="0"></iframe>
        	<div align="left">
                <h2><a href="search_view131.php"target="tuki">1月</a></h2>
                <h2><a href="search_view132.php"target="tuki">2月</a></h2>
                <h2><a href="search_view133.php"target="tuki">3月</a></h2>
                <h2><a href="search_view134.php"target="tuki">4月</a></h2>
                <h2><a href="search_view135.php"target="tuki">5月</a></h2>
                <h2><a href="search_view136.php"target="tuki">6月</a></h2>
                <h2><a href="search_view137.php"target="tuki">7月</a></h2>
                <h2><a href="search_view138.php"target="tuki">8月</a></h2>
                <h2><a href="search_view139.php"target="tuki">9月</a></h2>
                <h2><a href="search_view1310.php"target="tuki">10月</a></h2>
                <h2><a href="search_view1311.php"target="tuki">11月</a></h2>
                <h2><a href="search_view1312.php"target="tuki">12月</a></h2>
          </div>
	</div>
  <a href="../letter.php"><img src="../img/m.png" alt=""></a>
		
	</form>
</body>
</html>