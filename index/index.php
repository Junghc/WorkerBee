<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
	<!--bootstrap CSS-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<!--custom style for this web-->
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
	

	<style type="text/css">
		/*@import url(//fonts.googleapis.com/earlyaccess/notosanstc.css); /*思源黑體*/
	</style>

	<title>WorkerBee</title>
</head>

<body>
	<div class="container">
		<header class="py-3">
			<div class="row flex-nowrap justify-content-between align-items-center">
				<div class="col-4"></div>
				<div class="col-4 text-center" style="font-family:Times New Roman ; font-weight: bold">
					<a href="index.php" class="text-dark" style="font-size: 2.5rem; text-decoration: none;">
						Worker Bee
					</a>
				</div>
				<div class="col-4 d-flex justify-content-end align-items-center">
					<a href="#" class="text-muted">
						<img src="search.png" width="25" height="25">
					</a>
				</div>
			</div>
		</header>
		<hr class="my-1">
		<div class="nav-scroller">
			<nav class="nav d-flex justify-content-between"  style="font-family:微軟正黑體 Light; font-size:1.35rem; ">
				<a href="job_info.php" class="p-3 text-dark" style="text-decoration: none;">職業資訊</a>
				<a href="#" class="p-3 text-dark" style="text-decoration: none;">相關新聞</a>
				<a href="#" class="p-3 text-dark" style="text-decoration: none;">匿名投稿</a>
				<a href="#" class="p-3 text-dark" style="text-decoration: none;">關於我們</a>
			</nav>
		</div>
		<div id="carouselExampleControls" class="carousel slide py-5" data-ride="carousel" >
			<div class="carousel-inner text-center">
				<div class="carousel-item active">
					<img src="範例圖1.png" class="mw-60 rounded">
				</div>
				<div class="carousel-item">
					<img src="範例圖2.png" class="mw-60 rounded" >
				</div>
				<div class="carousel-item">
					<img src="範例圖3.png" class="mw-60 rounded">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
   				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
   				<span class="sr-only">Previous</span>
  			</a>
  			<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    			<span class="carousel-control-next-icon" aria-hidden="true"></span>
   				<span class="sr-only">Next</span>
  			</a>
		</div>	
		<hr class="my-1">
		
		<div style="font-family:微軟正黑體 Light; font-size:1.35rem; ">
			待更新



		</div>
		<hr class="my-1">
		
		<div style="font-family:微軟正黑體 Light; font-size:1.35rem; ">
			<?php
				echo"測試測試";
			?>
			
		</div>
	</div>

	<!--bootstrap JS-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>