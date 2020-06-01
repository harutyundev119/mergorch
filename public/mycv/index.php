<!DOCTYPE html>
<html lang="hy">
<head>
	<title>CV3</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/icon" href="images/logo.jpg">
</head>
<body>

<style>

	* {
		margin: 0;
		padding: 0;
	}

	body {
		background-image: url(images/back_img.jpg);
		background-size: 100%;
		font-weight: bolder;
	}

	.input-container {
		position: relative;
		margin-bottom: 15px;
	}

	.input-container label {
		position: absolute;
		top: 5px;
		left: 15px;
		color: white;
		transition: all 0.5s ease-in-out;
		cursor: pointer;
	}

	.input-container input { 
		border: 0;
		border-bottom: 2px solid #555;
		border-radius: 5px;
		background: transparent;
		width: 100%;
		padding: 8px 0 5px 0;
		font-size: 15px;
		color: #fff;
	}

	.input-container input:focus { 
		border: none;
		outline: none;
		border-bottom: 1.5px solid #555;
	}

	.input-container input:focus ~ label,
	.input-container input:valid ~ label {
		top: -12px;
		font-size: 14.8px;
	}

	textarea {
		margin: 8px;
		display: block;
		border: 2px solid #555;
		border-radius: 5px;
		background: transparent;
		width: 100%;
		padding: 4.2px;
		font-size: 16px;
		color: #fff;
		resize: none
	}

	::placeholder {
		color: white;
		opacity: 0.9
	}

	#sbm:hover {
		background-color: #28a745
	}

	#inp1, #inp2, #inp5, #inp6, #inp8, #inp9, #inp10 {
		text-transform: capitalize
	}

	form {
		margin: 14px 10px 10px 10px;
		border: 5px solid darkgrey;
		border-radius: 30px;
		text-align: center;
		padding: 10px 0 10px 30px;
	}

	h1 {
		color: white;
		text-align: center;
		margin-top: 5px
	}

</style>

	<h1>Լրացրեք Ձեր Տվյալները ՝ Online CV Ստեղծելու Համար</h1>

	<form action="show_page.php" method="post" 	class="res_form" enctype="multipart/form-data">

		<div class="row" style="width: 100%; margin-top: 20px">

			<div class="col-sm-4 form_div">

				<div class="input-container">

					<input type="text" required="" id="inp1" name="firstname">

					<label for="inp1">Անուն</label>

				</div>

				<div class="input-container">

					<input type="text" required="" id="inp2" name="lastname">

					<label for="inp2">Ազգանուն</label>

				</div>

				<div class="input-container">

					<input type="text" required="" id="inp3" name="middlename">

					<label for="inp3">Հայրանուն</label>

				</div>

				<div class="input-container">

					<input type="number" required="" id="inp4" name="age">

					<label for="inp4">Տարիք</label>

				</div>

				<div class="input-container">

					<input type="text" required="" id="inp5" name="cityofresidence">

					<label for="inp5">Բնակության Քաղաք</label>

				</div>

				<div class="input-container">

					<input type="text" required="" id="inp6" name="residenceaddress">

					<label for="inp6">Բնակության Հասցե</label>

				</div>

				<div class="input-container">

					<input type="number" required="" id="inp15" name="phone">

					<label for="inp15">Հեռախոսահամար</label>

				</div>

				<div class="input-container">

					<input type="text" id="inp8" name="mijnakarg_dproc">

					<label for="inp8">Միջնակարգ կրթօջախի անվանումը</label>

				</div>

				<div class="input-container">

					<input type="text" id="inp9" name="avag_dproc">

					<label for="inp9">Ավագ կրթօջախի անվանումը</label>

				</div>

				<!-- <input type="text" name="firstname" placeholder="Անուն" class="inp_1"> -->
				<!-- <input type="text" name="lastname" placeholder="Ազգանուն"> -->
				<!-- <input type="text" name="middlename" placeholder="Հայրանուն"> -->
				<!-- <input type="number" name="age" class="number_input" min="8" max="120" placeholder="Տարիք"> -->
				<!-- <input type="text" name="cityofresidence" placeholder="Բնակության Քաղաք"> -->
				<!-- <input type="text" name="residenceaddress" placeholder="Բնակության Հասցե"> -->
				<!-- <input type="mail" name="mail" placeholder="Էլ․ Հասցե"> -->
				<!-- <input type="text" name="mijnakarg_dproc" placeholder="Միջնակարգ կրթօջախի անվանումը"> -->
				<!-- <input type="text" name="avag_dproc" placeholder="Ավագ կրթօջախի անվանումը"> -->

			</div>

			<div class="col-sm-4 form_div">

				<div class="input-container">

					<input type="text" id="inp10" name="bardzraguyn_ushast">

					<label for="inp10">Բարձրագույն կրթօջախի անվանումը</label>

				</div>

				<div class="input-container">

					<input type="text" id="inp11" name="linkedin">

					<label for="inp11">Ձեր Linkedin-յան էջի հասցեն</label>

				</div>

				<div class="input-container">

					<input type="text" id="inp12" name="github">

					<label for="inp12">Ձեր Github-յան էջի հասցեն</label>

				</div>

				<div class="input-container">

					<input type="text" id="inp13" name="twitter">

					<label for="inp13">Ձեր Twitter-յան էջի հասցեն</label>

				</div>

				<div class="input-container">

					<input type="text" id="inp14" name="facebook">

					<label for="inp14">Ձեր Facebook-յան էջի հասցեն</label>

				</div>

				<div class="input-container">

					<input type="text" required="" id="inp7" name="mail">

					<label for="inp7">Էլ․ Հասցե</label>

				</div>

				<div class="input-container">

					<input type="text" id="inp17" name="languages">

					<label for="inp17">Ծրագրավորման լեզուներ, որոնց տիրապետում եք</label>

				</div>

				<div class="input-container">

					<input type="text" id="inp18" name="workflow">

					<label for="inp18">Աշխատանքային ուղղություններ</label>

				</div>

				<div class="input-container">

					<input type="text" id="inp16" name="profession">

					<label for="inp16">Մասնագիտություն</label>

				</div>	

				<div class="input-container" style="margin-bottom: 5px; border: 2px solid #555; border-radius: 20px;" id="sbm">

					<input type="submit" name="submit" value="Ուղարկել" class="btn btn-success sbm_btn" style="margin: 8px">

				</div>

				<!-- <input type="text" name="bardzraguyn_ushast" placeholder="Բարձրագույն կրթօջախի անվանումը"> -->
				<!-- <textarea name="aboutme1" placeholder="Պատմեք ձեր մասին"></textarea> -->
				<!-- <input type="url" name="linkedin" placeholder="Ձեր Linkedin-յան էջի հասցեն"> -->
				<!-- <input type="url" name="github" placeholder="Ձեր Github-յան էջի հասցեն"> -->
				<!-- <input type="url" name="twitter" placeholder="Ձեր Twitter-յան էջի հասցեն"> -->
				<!-- <input type="url" name="facebook" placeholder="Ձեր Facebook-յան էջի հասցեն"> -->
				<!-- <input type="number" name="phone" class="number_input" placeholder="Հեռախոսահամար"> -->
				<!-- <input type="text" name="profession" placeholder="Մասնագիտություն"> -->
				<!-- <textarea name="xorurd" placeholder="Խորհուրդներ ձեր կողմից՝ սկսնակներին՝ կապված ձեր մասնագիտության հետ"></textarea> -->
				<!-- <input type="submit" name="submit" value="Submit" class="btn btn-success sbm_btn"> -->

			</div>

			<div class="col-sm-4 form_div">

				<div class="input-container">

					<input type="text" id="inp19" name="lastjoblocation">

					<label for="inp19">Վերջին Աշխատանքի Վայրը</label>

				</div>

				<div class="input-container">

					<input type="number" id="inp20" name="date1">

					<label for="inp20">Այստեղ Աշխատել եմ () Թվականից</label>

				</div>

				<div class="input-container">

					<input type="number" id="inp21" name="date2">

					<label for="inp21">Այստեղ Աշխատել եմ Մինչև () Թվականը</label>

				</div>

				<div class="input-container">

					<input type="text" id="inp22" name="diplom">

					<label for="inp22">Դիպլոմներ</label>

				</div>

				<div class="input-container">

					<input type="text" id="inp23" name="sertifikat">

					<label for="inp23">Սերտիֆիկատներ</label>

				</div>

				<div class="input-container">

					<textarea type="text" name="xorurd" placeholder="Խորհուրդներ ձեր կողմից՝ սկսնակներին՝ կապված ձեր մասնագիտության հետ"></textarea>

				</div>

				<div class="input-container">

					<textarea type="text" name="aboutme1" placeholder="Պատմեք ձեր մասին"></textarea>

				</div>

				<div class="input-container">

					<textarea type="text" name="interests" placeholder="Ի՞նչ հետաքրքրություններ ունեք"></textarea>

				</div>

				<!-- <input type="text" name="languages" placeholder="Ծրագրավորման լեզուներ, որոնց տիրապետում եք"> -->
				<!-- <input type="text" name="workflow" placeholder="Աշխատանքային ուղղություններ"> -->
				<!-- <input type="text" name="lastjoblocation" placeholder="Վերջին Աշխատանքի Վայրը"> -->
				<!-- <input type="number" name="date1" class="number_input" min="1920" max="2020" placeholder="Այստեղ Աշխատել եմ () Թվականից"> -->
				<!-- <input type="number" name="date2" class="number_input" min="1920" max="2020" placeholder="Այստեղ Աշխատել եմ Մինչև () Թվականը"> -->
				<!-- <input type="text" name="diplom" placeholder="Դիպլոմներ"> -->
				<!-- <input type="text" name="sertifikat" placeholder="Սերտիֆիկատներ"> -->
				<!-- <textarea placeholder="Ի՞նչ հետաքրքրություններ ունեք" name="interests"></textarea> -->

			</div>

		</div>	

	</form>

</body>
</html>