<?php
session_cache_limiter('none');
session_start(); 
$path = "../img/photo/";
$file0 = $_FILES["imgup0"]["name"];
$file = $_FILES["imgup"]["name"];
$file1 = $_FILES["imgup1"]["name"];
$file2 = $_FILES["imgup2"]["name"];
$file3 = $_FILES["imgup3"]["name"];
$file11 = $_FILES["imgup11"]["name"];

$filename0 = $path . $file0;
if (is_uploaded_file($_FILES["imgup0"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["imgup0"]["tmp_name"], $filename0)) {
    chmod("files/" . $filename0, 0644);
    echo "";
  } else {
    echo "";
  }
} else {
	$filename0 = $_POST["photo0"];
}

$filename = $path . $file;
if (is_uploaded_file($_FILES["imgup"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["imgup"]["tmp_name"], $filename)) {
    chmod("files/" . $filename, 0644);
    echo "";
  } else {
    echo "";
  }
} else {
		$filename = $_POST["photo1"];
}

$filename1=$path . $file1;
if (is_uploaded_file($_FILES["imgup1"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["imgup1"]["tmp_name"], $filename1)) {
    chmod("files/" . $filename1, 0644);
    echo "";
  } else {
    echo "";
  }
} else {
		$filename1 = $_POST["photo2"];
}
$filename2=$path . $file2;
if (is_uploaded_file($_FILES["imgup2"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["imgup2"]["tmp_name"], $filename2)) {
    chmod("files/" . $filename2, 0644);
    echo "";
  } else {
    echo "";
  }
} else {
		$filename2 = $_POST["photo3"];
}
$filename3=$path . $file3;
if (is_uploaded_file($_FILES["imgup3"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["imgup3"]["tmp_name"], $filename3)) {
    chmod("files/" . $filename3, 0644);
    echo "";
  } else {
    echo "";
  }
} else {
		$filename3 = $_POST["photo4"];
}
$filename11=$path . $file11;
if (is_uploaded_file($_FILES["imgup11"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["imgup11"]["tmp_name"], $filename11)) {
    chmod("files/" . $filename11, 0644);
    echo "";
  } else {
    echo "";
  }
} else {
		$filename11 = $_POST["photo11"];
}
$cn=mysql_connect("localhost","root","root");
$db=mysql_select_db("meibo",$cn);
mysql_query('SET NAMES utf8', $cn );
if(!empty($_POST["name"])){

$result = mysql_query("INSERT INTO meibo(name) VALUE(\"$_POST[name]\")",$cn);
	}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="Cache-Control" content="no-cache">
	<meta content="0" http-equiv="Expires"/>
	<title>作成画面</title>
	<link rel="stylesheet" href="css/home.css" />
	<SCRIPT src="../../script/jquery-132.js" type="text/javascript"></SCRIPT>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js?ver=1.8.3"></script>
	<script>

	function goServletA(){
 document.getElementById('form').action = 'javascript:window.opener = null ; window.close();';
 }
function goServletB(){
 document.getElementById('form').action = 'pages/preview.php ';
 }
function goServletC(){
 document.getElementById('form').action = 'pages/mikan.php';
 }
</script>
<script type="text/javascript">
/*<!--
function disp(){
	// 「OK」時の処理開始 ＋ 確認ダイアログの表示
	if(window.confirm('作業フォルダの写真をすべて削除します。')){
		location.href = "http://localhost:8080/delete.php"; // example_confirm.html へジャンプ
	}
	// 「OK」時の処理終了
	// 「キャンセル」時の処理開始
	else{
		
	}
	// 「キャンセル」時の処理終了
}

// -->
*/
</script>
<script language="JavaScript">
 <!--
window.document.onkeypress=lineCheck;
 function lineCheck(e){
 var ta=document.getElementById("TEXT");
 var row=ta.getAttribute("rows");
 var r=(ta.value.split("\n")).length;
 if(document.all){
 if(r>=row && window.event.keyCode==13){ //keyCode for IE
 return false; //入力キーを無視
}
 } else {
 if(r>=row && e.which==13){ //which for NN
 return false;
 }
 }
 }


 //-->
 </script>
</head>
<body bgcolor="#f9f9a9">

<form method="post" action="pages/preview1.php" id="form" name="form" enctype="multipart/form-data">
	<input type="hidden" name="id" value="$no">
	<input type="hidden" name="photo0" value="$photo0">
	<input type="hidden" name="photo1" value="$photo1">
	<input type="hidden" name="photo2" value="$photo2">
	<input type="hidden" name="photo3" value="$photo3">
	<input type="hidden" name="photo4" value="$photo4">
	<input type="hidden" name="photo11" value="$photo11">
	<table class="hd">
		<div class="table">
			<tr><th class="title3">お便りシステム</th></tr>
			<tr><th class="title4">ラヴィーレ習志野台</th><th class="hk">発　行　日<input name="day" type="text" size="5" style="ime-mode: disabled;">年<input name="day1" type="text" size="1" style="ime-mode: disabled;">月<input name="day2" type="text" size="1" style="ime-mode: disabled;">日<br><br>編集責任者<input type="text" name="reader" type="text" size="20"></th></tr>
		</div>
	</table><br><br><br><br>
<div id="optionButton">
	<!--<a href="pages/photoeyarlist.php"><img src="img/231.png"width="100"></a>-->
	<a href="pages/list.php"><img src="img/mikan1.png" width="100"></a>
	<a href="pages/nyuukyosya.html"><img src="img/201.png" width="100"></a>
<!--	<img src="img/kansei.png"width="90"onclick="disp()"> -->
	<a href="pages/search.php"><img src="img/kako.png" width="116"></a>
	<a href="pages/print.php"><img src="img/231.png" width="100"></a>
</div>
<div class="select" align="center">
		<select name="name1">	
			<option value="2017年">2017年</option>
			<option value="2018年">2018年</option>
			<option value="2019年">2019年</option>
			<option value="2020年">2020年</option>
			<option value="2021年">2021年</option>
			<option value="2022年">2022年</option>
		</select>
		<select name="name2">
			<option value="1月">1月</option>	
			<option value="2月">2月</option>
			<option value="3月">3月</option>
			<option value="4月">4月</option>
			<option value="5月">5月</option>
			<option value="6月">6月</option>
			<option value="7月">7月</option>
			<option value="8月">8月</option>	
			<option value="9月">9月</option>
			<option value="10月">10月</option>
			<option value="11月">11月</option>
			<option value="12月">12月</option>
		</select>
	名前：<select  name="name">
		<?php
		header("Content-Type: text/html; charset=UTF-8");
		$result = mysql_query("SELECT * FROM meibo",$cn);
		$i=0;
		while($row = mysql_fetch_array($result))
		{
		$name = $row["name"];
		?>
			<option value="<?php echo $name; ?>"><?php echo $name; ?></option>
			<?php 
				$i++;
				} 
			?>

		</select>様のご様子


		</div><br>
		<div id="messageBox">

			<span id="photo_file0"></span>
			<div>
			<input type="file" name="imgup0" id="photo_file0" class="photo_file0"multiple="">
			</div>
			<img src="img/homel.jpg" align="right" height="150" name="photo0" onclick="click0()">

			<div class="subTitleBarms">
				<div class="subTitleArea">
					<div class="subTitleBox">
						メッセージ
					</div>
				</div>
				<div class="ichiranButtonArea">
					<div class="ichiranButtonBox">
						<div class="ichiranButton">
							<a href="#">
								<div id="cool_upload">
							    <img src="img/13_ov.png" id="cool_upload_image"width="20">
							    <input type="file" id="cool_upload_form"accept="text/plain">
							  </div>
							</a>
						</div>
						<a href="#" class="messageLink">
							<span style="position:relative;bottom:3px;">選択</span>
						</a>
					</div>
				</div>
				<div class="hensyuButtonArea">
					<div class="hensyuButtonBox">
						<div class="hensyuButton">
							<a href="#">

							</a>
						</div>
						<a href="#" class="messageLink">

						</a>
					</div>
				</div>

				<div class="ichiranButtonArea">
					<div class="ichiranButtonBox">
						<div class="ichiranButton">
							<a href="#">

							</a>
						</div>
						<a href="#" class="messageLink">

						</a>
					</div>
				</div>
			</div>
			<div class="">
				<div class="">
						<textarea  rows="10" cols="53.8" wrap="hard" id="info" name="info" class="info_tx"></textarea>
						<?php $str = mb_convert_encoding($data,"utf-8","sjis"); // シフトJISからUTF-8に変換?>
				</div>
			</div>
			<div class="gyoji">
				<textarea  rows="4" cols="1" wrap="hard" name="capc" class="capc_tx"></textarea>
			</div>
			<script charset="UTF-8">
			var file = document.querySelector('#cool_upload_form');

			file.onchange = function (){
			  var fileList = file.files;
			  //読み込み
			  var reader = new FileReader();
			  reader.readAsText(fileList[0],"Shift-JIS");

			  //読み込み後
			  reader.onload = function  () {
			    document.querySelector('#info').textContent = reader.result;
			  };
			};

				function click0(){
				  $(".photo_file0").click();
				}
				function click1(){
				  $(".photo_file1").click();
				}
				function click2(){
				  $(".photo_file2").click();
				}
				function click3(){
				  $(".photo_file3").click();
				}
				function click4(){
				  $(".photo_file4").click();
				}
				function click11(){
				  $(".photo_file11").click();
				}

				$(function () {
			  	$(".photo_file0").change(function () {		
			  	$("#photo_file0").text("仮登録済み");
			  	$("#photo_file0").css({
			  		"color":"red",
			  		"margin-left":'500px',
			  		"margin-top":'-40px',
			  		});
				});
			  	$(".photo_file1").change(function () {
			  	$('#photo_delete1').val("0");
			  	$("#photofile01").text("仮登録済み");
			  	$("#photofile01").css({
			  		"color":"red",
			  		"margin-left":'30px',
			  		});
				});
				  $(".photo_file2").change(function () {
				  	$("#photo_file02").text("仮登録済み");
				  	$("#photo_file02").css({
				  		"color":"red",
				  		"margin-left":'30px',
				  		});
				  });
				  $(".photo_file3").change(function () {
				  	$("#photo_file03").text("仮登録済み");
				  	$("#photo_file03").css({
				  		"color":"red",
				  		"margin-left":'30px',
				  		});
				  });
				  $(".photo_file4").change(function () {
				  	$("#photo_file04").text("仮登録済み");
				  	$("#photo_file04").css({
				  		"color":"red",
				  		"margin-left":'30px',
				  		});
				  });
				  $(".photo_file11").change(function () {
				  	$("#photofile11").text("仮登録済み");
				  	$("#photofile11").css({
				  		"color":"red",
				  		"margin-left":'30px',
				  		});
				  });
				});
			  </script><br>
			  	<div id="messageBox11">
					<div class="subTitleBar1">
						<div class="subTitleArea">
							<div class="subTitleBox">
								写真(1枚用)
							</div>
						</div>
					</div>
					<div class="message">
						<div class="messageTextArea11">
							<span style="">

							<div class="albumBox">
								<span id="photofile11"></span>
								<input type="hidden" name="photo_delete1" id="photo_delete1" value="0">
							    <input type="file" name="imgup11" id="photo_file11" class="photo_file11"　multiple="multiple">
							    <img src="img/52_1.gif" height="25" onclick="click11();"><br>
							    <input type="text" name="cap11" size="35"　maxlength="80"><br>

							</div>
							</span>
						</div>
					</div>
				</div>
				<div id="messageBox2">
					<div class="subTitleBar1">
						<div class="subTitleArea">
							<div class="subTitleBox">
								写真
							</div>
						</div>
					</div>
					<div class="message">
						<div class="messageTextArea1">
							<span style="">
								<div class="albumBox">
									<span id="photofile01"></span>
									<input type="hidden" name="photo_delete1" id="photo_delete1" value="0">
								    <input type="file" name="imgup" id="photo_file1" class="photo_file1" multiple="multiple">
								    <img src="img/52_1.gif" height="25" onclick="click1();"><br>
								    <input type="text" name="cap1" size="35" maxlength="80"><br>
									<br>
									<span id="photo_file02"></span>
								    <input type="file" name="imgup1" id="photo_file2" class="photo_file2" multiple="multiple">
								    <img src="img/52_2.gif" height="25" onclick="click2()"><br>
								    <input type="text" name="cap2" size="35" maxlength="80"><br>
									<br>
									<span id="photo_file03"></span>
								    <input type="file" name="imgup2" id="photo_file3" class="photo_file3" multiple="multiple">
								    <img src="img/52_3.gif" height="25" onclick="click3()"><br>
									<input type="text" name="cap3" size="35" maxlength="80"><br>
									<br>
									<span id="photo_file04"></span>
								    <input type="file" name="imgup3" id="photo_file4" class="photo_file4" multiple="multiple">
								    <img src="img/52_4.gif" height="25" onclick="click4()">
								    <input type="text" name="cap4" size="35" maxlength="80">

								</div>
							</span>
						</div>
					</div>
				</div>
				
					<table align="center" width="300" height="120" border="1" style="ime-mode: disabled;">
					  <tr>
					    <th>体重</th>
					    <td align="left"><input name="kg" type="text" size="20" style="ime-mode: disabled;">kg</td>
					  </tr>
					  <tr>
					    <th>血圧(平均)</th>
					    <td align="left"><input name="mmhg" type="text"size="20">mmHg</td>
					  </tr>
					</table><br><br>
				
				<div align="center">
					<input type="image" src="img/22.png" name="send" id="form" onclick="goServletB();">
					<input type="image" src="img/mikan.png" name="send" id="form" onclick="goServletC();">
aaaa
				</div>
			</div>

</body>
</html>