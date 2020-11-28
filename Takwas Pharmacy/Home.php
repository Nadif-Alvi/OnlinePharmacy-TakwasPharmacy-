<?php 
	require('Include/config.php');
	require ('Include/db.php');

	//$query='SELECT * FROM notice WHERE Ref=1';

	//$result=mysqli_query($conn, $query);

	//$nt=mysqli_fetch_all($result,MYSQLI_ASSOC);
	//var_dump($nt);
	//mysqli_free_result($result);

	//mysqli_close($conn);
?>
<link rel="stylesheet" type="text/css" href="CSS/prac.css">
<?php include('Include/Header.php'); ?>
		<section id="showcase">
			<div class="container">
				<img src="Image/med1.jpg">

			</div>
		</section>

		<div class="container">
			<section id="main">
					<h1 style="font-size:40px">Welcome</h1>
					<p style="font-size:25px">Welcome to the <strong>Takwas Pharmacy</strong> virtual world demo.</p>
					<p style="font-size:18px">The Takwas Pharmacy is one of the leading online pharmacy across Bangladesh.Health
					 is one of the most important things in life. By time going on, medicines are increasing to prevent the increasing
					  number of diseases. So we need to increase the availability of the medicines as well as the consultation of a doctor
					   and to do so only physical shops or pharmacies are not enough. For example, in this global pandemic going outside is 
					   not safe anymore. Thus it would be a great relief for everyone if they could consult with a doctor and get the related 
					   medicines they need without stepping outside.</p>
			</section>

			<aside id="sidebar">
				<h3 style="text-align: center;background-color:#000">NOTICE</h3>
				<?php foreach($nt as $key):?>
					<h2><?php echo $key["title"];  ?></h3>
					<small>Created on <?php echo $key["Date"]; ?></small>
					<p style="font-size: 20px"><?php echo $key["Notice"]; ?></p>
				<?php endforeach; ?>
			</aside>
		</div>
<?php include('Include/Footer.php'); ?>

	