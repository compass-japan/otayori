<?php

	$cn1=mysql_connect("localhost","root","root");
	$db=mysql_select_db("tegami",$cn1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
	<SCRIPT src="../../script/jquery-132.js" type="text/javascript"></SCRIPT>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js?ver=1.8.3"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
	<script src="//code.jquery.com/jquery-1.9.1.js"></script>
	<script>
		 function goServletB(){
		 document.getElementById('form').action = 'pages/preview.php ';
		 }
		function goServletC(){
		 document.getElementById('form').action = 'pages/mikan.php';
		 }
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
	 <script>
	 
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
	</script>
</head>
<body>
	<form method="post" action="preview.php" id="form" name="form" enctype="multipart/form-data">
		<input type="hidden" name="id" value="$no">
		<input type="hidden" name="photo0" value="$photo0">
		<input type="hidden" name="photo1" value="$photo1">
		<input type="hidden" name="photo2" value="$photo2">
		<input type="hidden" name="photo3" value="$photo3">
		<input type="hidden" name="photo4" value="$photo4">
		<input type="hidden" name="photo11" value="$photo11">
		<div class="wrap">
				<!--ヘッダー-->
		    <Table align="center">
		      <Tr>
		      <Td width="400" align="left" style="font-family :'游ゴシック','ＭＳ ゴシック'; font-size:20px; color:#ff69b4;"><b>お便りシステム　　</b></Td>
		       <Td width="400"></Td>
		       <Td width="378">
				</Td>
		       </Tr>
		       <Tr>
		       <Td width="400" align="left" style="font-family :'Yu Gothic',sans-serif; font-size:33px; color:#ff69b4;"><b>ラヴィーレ習志野台</b></Td>
		       <Td width="400" colspan="2" align="right">
		       		<a href="pages/list.php"><img src="img/menu_unfinished.png" alt=""></a>
					<a href="pages/nyuukyosya.html"><img src="img/menu_register.png" alt=""></a>
					<a href="pages/search.php"><img src="img/menu_mainregister.png" alt=""></a>
					<a href="pages/print.php"><img src="img/menu_print.png" alt=""></a>
				</Td>
		       </Tr>
		       <Tr>
		       		<Td width="400"></Td>
		       </Tr>
				<Tr style="background-color:#ff69b4;">
					<Td width="400" align="center" colspan="3">
						<h3>
							編集責任者：　<input type="text" name="reader" size="15">　　発行日：　<input type="text" size="5" name="day"  style="ime-mode: disabled;">  年　<input type="text" size="3" name="day1"  style="ime-mode: disabled;">  月　<input type="text" size="3" name="day2"  style="ime-mode: disabled;">  日　　年月
							<select  name="name1">
								<option value="2017年">2017年</option>
								<option value="2018年">2018年</option>
								<option value="2019年">2019年</option>
								<option value="2020年">2020年</option>
								<option value="2021年">2021年</option>
								<option value="2022年">2022年</option>
							</select>
							<select  name="name2">
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
						</h3>
					</Td>
				</Tr>
				<Tr>
		       		<Td height="20"></Td>
		       </Tr>
		       <!--ヘッダー終了-->
		    </table>

			<div class="zentai">
				<h2>◇全体</h2>
				<p>全体に向けての情報を入れてください</p>
				<div class="zentai1">
					<h4>◆メッセージ</h4>

					<p><textarea cols="40" id="info" rows="10" name="info"></textarea></p>
					<div id="cool_upload">
				    	<img src="img/52.gif" id="cool_upload_image"width="70"multiple>
				    <input type="file" id="cool_upload_form">
				  </div>
					<h4>◆全体でのイベント</h4>
					<p>全体のイベント写真とコメントを入れてください</p>
					
					<p><img src="img/photo_all.png" onclick="click0()"></p>
					<input type="file" name="imgup0" id="photo_file0" class="photo_file0" multiple="" src="$photo0">
					<p><input type="text" maxlength="13" name="capc" class="capc_tx"  placeholder="写真のコメントを入れて下さい"></p>
				</div>
			</div>
			
			<script>
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
			</script>


			<div class="name">
				<h2>◇ご入居様(個人)</h2>
				<p>ご入居様(個人)の情報を入れてください</p>
				<div class="name1">
					<h4>◆お名前</h4>
					<select  name="name">
					<?php
						$cn=mysql_connect("localhost","root","root");
						mysql_select_db("meibo",$cn);

						$result5 = mysql_query("SELECT name FROM meibo ",$cn);
						$i=0;
								while($row = mysql_fetch_array($result5))
								{
									$name = $row["name"];
									?>
									<option value="<?php echo $name; ?>"><?php echo $name; ?></option>
									<?php 
										$i++;
								}
						mysql_close($cn);
					?>
					</select>
						<div class="photo1">
							<h4>
								◆写真(1枚用)
							</h4>
						</div>
						 <input type="file" name="imgup11" id="photo_file11" class="photo_file11 delf">
						<p><img src="img/photo01.gif" alt="画像" onclick="click11();"><input type="text" align="left" size="35" placeholder="写真のコメントを入れて下さい"></p>
						<div class="photo1">
							<h4>
								◆写真(4枚用)
							</h4>
						</div>
						<div class="photoBox">
							<input type="file" name="imgup" id="photo_file1" class="photo_file1 delf">
							<img src="img/photo01.gif" alt="画像"  onclick="click1();"><input type="text" align="left" size="35"  maxlength="14"  class="mleft-10"><br>
							<input type="file" name="imgup1" id="photo_file2" class="photo_file2 delf">
							<img src="img/photo02.gif" alt="画像"  onclick="click2();"><input type="text" align="left" size="35"  maxlength="14"  class="mleft-10"><br>
							<input type="file" name="imgup2" id="photo_file3" class="photo_file3 delf">
							<img src="img/photo03.gif" alt="画像"  onclick="click3();"><input type="text" align="left" size="35"  maxlength="14"  class="mleft-10"><br>
							<input type="file" name="imgup3" id="photo_file4" class="photo_file4 delf">
							<img src="img/photo04.gif" alt="画像"  onclick="click4();"><input type="text" align="left" size="35"  maxlength="14"  class="mleft-10">	
						</div>
						<h4>◆健康状態</h4>
						<p>体重：　<input type="text" name="kg" align="left" size="10">kg</p>
						<p>血圧：　<input type="text" name="mmhg" align="left" size="10">mmhg</p>
				</div>
			</div>
		</div>
		<div class="bt">
			<input type="image" src="img/finish_preview.png" width="150" name="send" id="form" onclick="goServletB();">
			<input type="image" src="img/finish_unfinished.png" width="150" name="send" id="form" onclick="goServletC();">
		</div>

</body>
</html>