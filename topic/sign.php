<!DOCTYPE HTML>
<html>
	<head>
		<title>星座運勢</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/sign.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.html">回首頁</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="index.html">主頁</a></li>
											<li><a href="taro.html">塔羅牌運勢</a></li>
											<li><a href="sign.html">星座運勢</a></li>
											<li><a href="astrology.html">占星骰子</a></li>
											<li><a href="login.html">登入</a></li>
											<li><a href="signup.html">註冊</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<article id="main">
						<header>
							<h2>星座運勢</h2>
							<p>這裡將提供您的星座運勢<br />
							您可以查閱您星座的每日、每周、每月運勢<br />
						</p>
						</header>
						
						<section class="wrapper style5">
							<div class="inner">
								星座選擇：
								<form method="post" action="signaction.php">
									<select name="id1" id = "id1" class="form-select" aria-label="Default select example">
										<option value="0" selected >選擇您的星座</option>
										<option value="1">白羊座</option>
										<option value="2">金牛座</option>
										<option value="3">雙子座</option>
										<option value="4">巨蟹座</option>
										<option value="5">獅子座</option>
										<option value="6">處女座</option>
										<option value="7">天秤座</option>
										<option value="8">天蠍座</option>
										<option value="9">射手座</option>
										<option value="10">魔羯座</option>
										<option value="11">水瓶座</option>
										<option value="12">雙魚座</option>
									</select>
									運勢類別選擇：
									<select name="id2" id="id2" class="form-select" aria-label="Default select example">
										<option value="0" selected >選擇運勢</option>
										<option value="1">本日運勢</option>
										<option value="2">本周運勢</option>
										<option value="3">本月運勢</option>
									</select>
								
									<div class="d-grid gap-2 d-md-block">
										</br><center><button type="submit" value="結果" onclick="return myFunction()">結果</center>
									</div>
								</script>
									<hr class="simple" color="#6f5499" />
								</form>

								<script type="text/javascript">
									function myFunction() {
										var id1 = document.getElementById("id1");
										if (id1.value == "0" && id2.value == "0") {
											//If the "Please Select" option is selected display error.
											alert("請選擇運勢與類別!");
											return false;
										}
										if (id1.value == "0") {
											//If the "Please Select" option is selected display error.
											alert("請選星座運勢!");
											return false;
										}
										if (id2.value == "0") {
											//If the "Please Select" option is selected display error.
											alert("請選運勢類別!");
											return false;
										}
										return true;
									}
								</script>

								<?php
									include("starsign.php");
									$sql = "SELECT * FROM view_star_sign";

									if($pp = $db->query($sql))
									{
										while($result = mysqli_fetch_object($pp))
										{
											echo '<p style="font-size:30px ;">結果解析</p><div style="font-size:25px ;">'.$result->sign_name. '</div><div style="font-size:18px ;">'.$result->star_mean.'</div><div style="font-size:15px ;">' .$result->star_mean1.'</div>';
										}
										
									}

									$sql="DELETE FROM `view_star_sign` WHERE 1";
									$result = $db->query($sql);

								?>
								</div>
						</section>
					</article>

					
					

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
						<ul class="copyright">
							<li>&copy; STUST.CSIE</li><li>Design BY: Ren Chien Liao</li>
						</ul>
					</footer>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/sign.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>