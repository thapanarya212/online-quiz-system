<?php
	if(isset($_SESSION['test_ongoing']))
		header("Location: files/quiz.php");
?>

<html>
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="keywords" content="iamrohitsuthar,Iamrohitsuthar,i am rohit suthar,Hi i am rohit suthar,Hi iamrohitsuthar,i am Rohit Suthar,I am RohitSuthar,mrrohitsuthar,rohit suthar,RohitSuthar,Rohit Suthar,rohitsuthar website,rohit suthar website,programmer,amravati,rohitsuthar,rohit suthar blog,Rohit Suthar,Rohit,Suthar,Rohit Karma,Suthar Rohit,iamrohitsuthar blog,iamrohitsuthar twitter,iamrohitsuthar instagram,iamrohitsuthar stackoverflow,iamrohitsuthar github,iamrohitsuthar linkedin,iamrohitsuthar website">
	    <title>Quizller</title>
	    <link rel="icon"  href="admin/assets/img/12.jpg">
		<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/header.css">
		<link rel="stylesheet" type="text/css" href="css/util.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
		<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
		<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/tilt/tilt.jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/js-cookie@beta/dist/js.cookie.min.js"></script>

	</head>

	<body>
		<!-- Header -->
		<header class="header1">
			<!-- Header desktop -->
			<div class="container-menu-header">
				<div class="wrap_header">
					<!-- Logo -->
					<a href="index.html" class="logo">
						<img src="images/icons/12.jpg"  width="170%" height="80%" alt="IMG-LOGO">
					</a>

					<!-- Header Icon -->

				</div>
			</div>

			<!-- Header Mobile -->
			<div class="wrap_header_mobile">
				<!-- Logo moblie -->
				<a href="index.php" class="logo-mobile">
					<img src="images/icons/12.jpg" alt="IMG-LOGO">
				</a>

				<!-- Button show menu -->
				<div class="btn-show-menu">
					<!-- Header Icon mobile -->
					<div class="header-icons-mobile">
						<a href="#" class="header-wrapicon1 dis-block">
							<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
						</a>
					</div>
				</div>
			</div>
			</div>
		</header>

		<section>
			<div class="limiter">
				<div class="container-login100">
					<div class="wrap-login100">
						<div class="login100-pic js-tilt" data-tilt>
							<img src="data:image/png;base64,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" alt="IMG">
						</div>
						<div class="login100-form validate-form">
						<span class="login100-form-title">
							Student Login
						</span>
						
						<div class="wrap-input100 validate-input">
							<input class="input100" id="studentRollNumber" type="text" name="rollNumber"
								placeholder="Roll Number" required>
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-user-circle-o" aria-hidden="true"></i>
							</span>
							<span class="error text-danger" id="empty_roll_number_field"></span>
						</div>

						<div class="wrap-input100 validate-input">
							<input class="input100" id="studentPassword" type="password" name="password"
								placeholder="Password" required>
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-lock" aria-hidden="true"></i>
							</span>
							<span class="error text-danger" id="empty_roll_password_field"></span>
						</div>

						<div class="container-login100-form-btn">
							<button class="login100-form-btn" onclick="login()">
								Login
							</button>
						</div>

						<div class="text-center p-t-136">
						</div>
</div>
					</div>
				</div>
			</div>
		</section>
		<script>
			$(document).ready(function () {

				if (Cookies.get('last_question_was_answered') != undefined) {
					Cookies.remove('last_question_was_answered');
					Cookies.remove('last_question');
				}
				if (Cookies.get('test_submitted_status') != undefined)
					Cookies.remove('test_submitted_status');	
			});


			$('.js-tilt').tilt({
				scale: 1.1
			})

			function login() {
				var someFieldIsEmpty = false;

				if (!$('#studentRollNumber').val()) {
					someFieldIsEmpty = true;
					$('#empty_roll_number_field').val("Please enter your roll number");
				}
				if (!$('#studentPassword').val()) {
					someFieldIsEmpty = true;
					$('#empty_roll_passsword_field').val("Please enter your password");
				}

				if (!someFieldIsEmpty) {
					$.ajax({
						type: 'POST',
						url: 'files/student_login.php',
						data: {
							'rollNumber': $('#studentRollNumber').val(),
							'password': $('#studentPassword').val(),
						},
						success: function (response) {
							if(response == "STUDENT_RECORD_NOT_FOUND")
								alert("Wrong Credentails entered");
							else
								window.location.replace("files/dashboard.php");
						}
					});
				}
			}
		</script>
	</body>
</html>