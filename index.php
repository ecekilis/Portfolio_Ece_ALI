
<?php

	$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

	if(isset($_POST['send'])){

		$name= mysqli_real_escape_string($conn, $_POST['name']);
		$email= mysqli_real_escape_string($conn, $_POST['email']);		
		$nummer= mysqli_real_escape_string($conn, $_POST['nummer']);
		$msg= mysqli_real_escape_string($conn, $_POST['message']);


		$select_message =mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND nummer = '$nummer' AND messages = '$msg'") or die('query failed');


		if(mysqli_num_rows($select_message) > 0)
		{
			$message[] = 'message sent already';
		}
		else
		{
			mysqli_query($conn, "INSERT INTO `contact_form`(name, email, nummer, messages) VALUES('$name', '$email', '$nummer', '$msg')") or die('query failed');
			$message[] = 'message sent successfully!';
		}



	}

?>




<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Free Web tutorials">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ece Ali Portfolio</title>
 	<link rel="stylesheet"  href="css/style.css">
 	<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

</head>

<body>


<div class="message">
	<span></span>
	<i class="fas fa-times" onclick="this.parentElement.remove();"></i>
</div>


	<?php

		 if(isset($message)){
		 	foreach($message as $message)
		 	{
		 		echo '
		 			<div class="message" data-aos="zoom-out">
		 			   <span>'.$message.'</span>
		 			   <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
		 			</div>
		 		';
		 	}
		 }
		 
	?>



	<!--header section starts-->
	<header class ="header">

		<div id ="menu-btn" class="fas fa-bars"></div>

		<a href="#home" class="logo">Portfolio</a>

		<nav class="navbar">
			<a href="#home" class="active">home</a>
			<a href="#about">Uber mich-skills</a>
			<a href="#services">Bildung-Erfahrung</a>
			<a href="#portfolio">Projekte</a>
			<a href="#contact">Kontakt</a>
		</nav>


	<div class="follow">
		<a href="https://www.linkedin.com/in/ece-ali-77050b127" class="fab fa-linkedin"></a>
		<a href="https://github.com/ecekilis" class="fab fa-github"></a>
						
	</div>	
   </header>

	<!--header section fnish-->





	<!--home section start-->

	<section class="home" id="home">

		<div class="image" data-aos="fade-right">
			<img src="images/ecea.JPG" alt="">
		</div>

		<div class="content">
			<h3 data-aos="fade-up"> Hallo, Ich bin Ece Ali</h3>
			<span data-aos="fade-up">Web Entwicklerin</span>
			<p data-aos="fade-up">Ich bin ein enthusiastischer, kreativer, starker Teamgeist und detailorientierter Web Entwicklerin</p>
			<a data-aos="fade-up" href="about" class="btn">about me</a>
		</div>

	</section>

	<!--home section fnish-->








	<!-- section start-->

	  <!--about section start-->

	<section class="about" id="about">
		<h1 class="heading" data-aos="fade-up"><span>Uber Mich</span></h1>
		<div class="biography">
			
			<div class="bio">
				<h4 data-aos="zoom-in"><span>name :</span> Ece ALI</h4>
				<h4 data-aos="zoom-in"><span>nummer :</span> 017657719778</h4>	
				<h4 data-aos="zoom-in"><span>email :</span> ecekilis@gmail.com</h4>
				<h4 data-aos="zoom-in"><span>address :</span> Heckenrosenweg 11 86156, Augsburg</h4>

			</div>

			<a href="#" class="btn">Herunterladen Lebenslauf</a>
		</div>
	

	<!--about section fnish-->






	<!--skills section start-->	
	<div class="skills" data-aos="fade-up">
	  	<h1 class="heading"><span>Skills</span></h1>
		<div class="progress">
			<div class="bar" data-aos="fade-left"><h3><span>HTML</span><span>55%</span></h3></div>
			<div class="bar" data-aos="fade-right"><h3><span>CSS</span><span>55%</span></h3></div>
			<div class="bar" data-aos="fade-left"><h3><span>Javascript</span><span>45%</span></h3></div>
			<div class="bar" data-aos="fade-right"><h3><span>PHP</span><span>35%</span></h3></div>
			<div class="bar" data-aos="fade-left"><h3><span>Mysql</span><span>35%</span></h3></div>
			<div class="bar" data-aos="fade-right"><h3><span>Wordpress</span><span>35%</span></h3></div>
			<div class="bar" data-aos="fade-left"><h3><span>Python</span><span>30%</span></h3></div>
		</div>
	</div>

	<!--skills section end-->	





	<!--edu section start-->	


  <!--edu section end-->	


</section>



<!--section about end-->



<section class="services" id="services">



		<div class="edu-exp">
			<h1 class="heading" data-aos="fade-up"><span>Bildung & Erfahrung</h1>

				<div class="row">
					<div class="box-container">
						<h3 class="title" data-aos="fade-right">Bildung</h3>
						<div class="box" data-aos="fade-right">
							<span>(Sep 2012 - Jun 2016) / ISTE-Turkei </span>
							<h3>Bachelor of Informatik</h3>
							<p>Ich habe als Bachelorarbeit eine "Hotel Webseite" entwickelt. Mit diesem projekt habe ich Grundkentnisse uber HTML, CSS und Javascript gelernt.</p>

						</div>
							<div class="box" data-aos="fade-right">
							<span>(Dez 2020 - Feb 2021) / ReDI School</span>
							<h3>Frontend Entwicklung Kurs</h3>
							<p>Ich habe einen 3-monatigen Frontend-Kurs besucht und mit diesem Kurs die Website der Universität entwickelt. Mit diesem Projekt habe ich meine HTML und CSS-Kenntnisse vertieft.</p>

						</div>
							<div class="box" data-aos="fade-right">
							<span>(Mär 2022 - Mai 2022) / ReDI School</span>
							<h3>UX-UI Design Kurs</h3>
							<p>Ich habe einen 3-monatigen UX-UI Design Kurs besucht und mit diesem Kurs habe ich Figma tool gelernt und Projekte von Impact Analysis und Pulse Sequence erstellt.</p>

						</div>
					</div>



					<div class="box-container">
						<h3 class="title" data-aos="fade-left">erfahrung</h3>
						<div class="box" data-aos="fade-left">
							<span>(Feb 2023 - Mai 2023) / TESTIFI-Deutschland</span>
							<h3>UX-UI Designer</h3>
							<p>Erstellen von Low und High Fidelity Designs zweier Projekte mit dem Figma Designtool.</p>

						</div>
							<div class="box" data-aos="fade-left">
							<span>(Jun  2017 - July 2018) / EBOS Ltd. Adana-Türkei</span>
							<h3>Software Entwicklerin (C#)</h3>
							<p>Entwicklung, Testen und Optimierung einer Schulautomatisierungssystem.</p>

						</div>

					</div>


				</div>

		</div>



</section>









<section class="portfolio" id="portfolio">
	<h1 class="heading" data-aos="fade-up"><span>projekte</span></h1>
	<div class="box-container">
		 <div class="box" data-aos="zoom-in">
		 	<a href="https://drive.google.com/file/d/13TNQcEQH0rANqnWzC6xxUjb7Oh-QOH4k/view?usp=drive_link"><img src="images/ecehotel.png" alt=""></a>
		 	<h3>Ece Hotel</h3>
		 </div>
		 <div class="box" data-aos="zoom-in">
		 	<a href="https://drive.google.com/file/d/1xMi1cOXhMmg_hBo99mPuXQZUegZsz4IK/view?usp=drive_link"><img src="images/haarstyle.png" alt=""></a>
		 	<h3>Haar Style</h3>
		 </div>
		 <div class="box" data-aos="zoom-in">
		 	<a href="https://drive.google.com/file/d/1Ek8Cn7NekiNDNG4wB_NKlx5csPyj5h2r/view?usp=drive_link"><img src="images/universitat.png" alt=""></a>
		 	<h3>Universitat Website</h3>
		 </div>
		 <div class="box" data-aos="zoom-in">
		 	<a href="https://drive.google.com/file/d/1jjtCtRfr2cJantR8jSoq-C_wIeMyYdSu/view?usp=drive_link"><img src="images/webflow.png" alt=""></a>
		 	<h3>Webflow website</h3>
		 </div>

	</div>


</section>







<section class="contact" id="contact">

<h1 class="heading" data-aos="fade-up"><span> Kontakt</span></h1>
<form action="" method="post">
	<div class="flex">
		<input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
		<input data-aos="fade-right" type="email" name="email" placeholder="enter your email" class="box" required>		
	</div>

		<input data-aos="fade-up" type="nummer" min="0" name="nummer" placeholder="enter your nummer" class="box" required>		
		<textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>

		<input type="submit" value="send message" name="send" class="btn">
</form>

	<div class="box-container">
			<div class="box">
				<i class="fas fa-phone" data-aos="zoom-in"></i>
				<h3>Nummer</h3>
				<p> 017657719778</p>
			</div>


			<div class="box">
				<i class="fas fa-envelope" data-aos="zoom-in"></i>
				<h3>email</h3>
				<p> ecekilis@gmail.com</p>
			</div>


			<div class="box">
				<i class="fas fa-map-marker-alt" data-aos="zoom-in"></i>
				<h3>Address</h3>
				<p> Heckenrosenweg 11, 86156 Augsburg</p>
			</div>

	</div>

</section>





<div class="credit">&copy; copyright @
	<?php 
	echo date('Y'); 
  ?> by <span>Ece Ali</span>
</div>



<script src="js/script.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>
AOS.init({
	duration:800,
	delay:300,

});
</script>

</body>

</html>