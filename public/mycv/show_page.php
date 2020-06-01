<?php include 'funkcia.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>MY CV</title>

	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom fonts for this template -->
	<link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
  	<link href="css/resume.min.css" rel="stylesheet">


  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body id="page-top">

	<div id="content">
	
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">

			<a class="navbar-brand js-scroll-trigger" href="#page-top">

				<span class="d-block d-lg-none">Clarence Taylor</span>

				<span class="d-none d-lg-block">

					<img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profile.jpg" alt="">

				</span>

			</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

				<span class="navbar-toggler-icon"></span>

			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">

				<ul class="navbar-nav">

					<li class="nav-item">

						<a class="nav-link js-scroll-trigger" href="#about">About</a>

					</li>

					<li class="nav-item">

						<a class="nav-link js-scroll-trigger" href="#experience">Experience</a>

					</li>

					<li class="nav-item">

						<a class="nav-link js-scroll-trigger" href="#education">Education</a>

					</li>

					<li class="nav-item">

						<a class="nav-link js-scroll-trigger" href="#skills">Skills</a>

					</li>

					<li class="nav-item">

						<a class="nav-link js-scroll-trigger" href="#interests">Interests</a>

					</li>

					<li class="nav-item">

						<a class="nav-link js-scroll-trigger" href="#awards">Awards</a>

					</li>


				</ul>

			</div>

		</nav>

	<div class="container-fluid p-0">

		<section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">

			<div class="w-100">

				<h1 style="text-align: center;">

					<?php echo $_POST['profession'] ?>

				</h1>

				<br><br>

				<h1 class="mb-0"> <?php echo htmlspecialchars(trim( $_POST['firstname'])) ?>

					<span class="text-primary"> <?php echo htmlspecialchars(trim($_POST['lastname'])) ?> </span>

					<span class="text-primary"> <?php echo htmlspecialchars(trim($_POST['middlename'])) ?> </span> <br>

					<span class="text-primary"> <?php echo htmlspecialchars(trim($_POST['age'])) ?> <small> տարեկան</small></span>

				</h1>

				<div class="subheading mb-5"><?php echo htmlspecialchars(trim($_POST['cityofresidence'])) ?> · <?php echo htmlspecialchars(trim($_POST['residenceaddress'])) ?> · <?php echo htmlspecialchars(trim($_POST['phone'])) ?> ·

					<a href="mailto:name@email.com"> <?php echo htmlspecialchars(trim($_POST['mail'])) ?> </a>

				</div>

				<p class="lead mb-5">
			  
					<?php echo htmlspecialchars(trim($_POST['aboutme1'])) ?>

				</p>

				<div class="social-icons">

					<a href=" <?php echo htmlspecialchars(trim($_POST['linkedin'])) ?> ">

						<i class="fab fa-linkedin-in"></i>

					</a>

					<a href=" <?php echo htmlspecialchars(trim($_POST['github'])) ?> ">

						<i class="fab fa-github"></i>

					</a>

					<a href=" <?php echo htmlspecialchars(trim($_POST['twitter'])) ?> ">

						<i class="fab fa-twitter"></i>

					</a>

					<a href=" <?php echo htmlspecialchars(trim($_POST['facebook'])) ?> ">

						<i class="fab fa-facebook-f"></i>

					</a>

				</div>

			</div>

		</section>

	<div>

		<h3 style="color: black; text-align: center;">Last Job Location</h3><br>
		<h2 style="color: black; text-align: center;"> <?php echo htmlspecialchars(trim($_POST['lastjoblocation'])) ?> </h2><br><br>
		<h4 style="text-align: center;"><span style="margin: 20px">Այստեղ Աշխատել եմ</span> <?php echo htmlspecialchars(trim($_POST['date1'])) ?> <span style="margin-left: 20px">Թվականից</span></h4><br>
		<h4 style="text-align: center;"><span style="margin: 20px">Այստեղ Աշխատել եմ Մինչև</span> <?php echo htmlspecialchars(trim($_POST['date2'])) ?> <span style="margin-left: 20px">Թվականը</span> </h4>

	</div>

	<hr class="m-0">

	<section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">

		<div class="w-100">

			<h2 class="mb-5" style="text-align: center;">Experience</h2>

			<div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">

				<div class="resume-content">

					<h3 class="mb-0">

						<?php echo htmlspecialchars(trim($_POST['profession'])) ?>

					</h3>

					<div class="subheading mb-3">Խորհուրդներ իմ կողմից՝ սկսնակներին՝ կապված իմ մասնագիտության հետ</div>

					<p>
				  
						<?php echo htmlspecialchars(trim($_POST['xorurd'])) ?>

					</p>

				</div>

				<div class="resume-date text-md-right">

					<span class="text-primary">

						<?php echo htmlspecialchars(trim(date("Y/m/d"))) ?>

					</span>

				</div>

			</div>

		</div>

	</section>

	<hr class="m-0">

	<section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">

		<div class="w-100">

			<h2 class="mb-5">Education</h2>

			<div class="resume-item d-flex flex-column flex-md-row justify-content-between">

				<div class="resume-content">

					<h3 class="mb-0"> <?php echo htmlspecialchars(trim($_POST['bardzraguyn_ushast'])) ?> </h3>

				</div>

			</div>


			<div class="resume-item d-flex flex-column flex-md-row justify-content-between">

				<div class="resume-content">

					<h3 class="mb-0"> <?php echo htmlspecialchars(trim($_POST['avag_dproc'])) ?> </h3>

				</div>

			</div>

			<div class="resume-item d-flex flex-column flex-md-row justify-content-between">

				<div class="resume-content">

					<h3 class="mb-0"> <?php echo htmlspecialchars(trim($_POST['mijnakarg_dproc'])) ?> </h3>

				</div>

			</div>

		</div>

	</section>

	<hr class="m-0">

	<section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="skills">

		<div class="w-100">

			<h2 class="mb-5">Skills</h2>

			<div class="subheading mb-3">Programming Languages &amp; Tools</div>

			<ul class="list-inline dev-icons">

				<li class="list-inline-item">

					<?php echo htmlspecialchars(trim($_POST['languages'])) ?>

				</li>

			</ul>

			<div class="subheading mb-3">Workflow</div>

			<ul class="fa-ul mb-0">

				<li>

					<?php echo htmlspecialchars(trim($_POST['workflow'])) ?>

				</li>

			</ul>

		</div>

	</section>

	<hr class="m-0">

	<section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="interests">

		<div class="w-100">

			<h2 class="mb-5">Interests</h2>

			<p>

				<?php echo $_POST['interests'] ?>

			</p>

		</div>

	</section>

	<hr class="m-0">

	<section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="awards">

		<div class="w-100">

			<h2 class="mb-5">Awards &amp; Certifications</h2>

			<ul class="fa-ul mb-0">

				<li>

					<?php

						echo htmlspecialchars(trim(($_POST['sertifikat'])))

					?>

				</li>

				<li>
					
					<?php 

						echo htmlspecialchars(trim(($_POST['diplom'])))

					?>

				</li>

			</ul>

		</div>

	</section>

 

	<button class="btn" style="background-color:rgb(189,93,56); margin-left: 15px">
			
		<a id="clickbind" href="#" style="color: white;">Export To Word</a>

	</button>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.min.js"></script>

	<script type="text/javascript">
	
		function onClick() {

			var pdf = new jsPDF('p', 'pt', 'letter');
			pdf.canvas.height = 72 * 11;
			pdf.canvas.width = 72 * 8.5;

			pdf.fromHTML('#content');

			pdf.save('test.pdf');

		};

		var element = document.getElementById("clickbind");
		element.addEventListener("click", onClick);

	</script>

	<!-- Bootstrap core JavaScript -->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<script src="jspdf.js"></script>

	<!-- Plugin JavaScript -->
	<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for this template -->
	<script src="js/resume.min.js"></script>

	<script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>

</body>
</html>