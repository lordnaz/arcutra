<!DOCTYPE html>
<html>
<head>
	
	<title>Sistem Penjana Laporan Harian Bergambar</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" /> -->
    <link rel="stylesheet" href="css/jquery-ui.css"/>	
    <link rel="stylesheet" href="css/bootstrap_2.css"/>
    <!-- <link rel="stylesheet" href="css/bootstrap-3.3.7.css"/> -->
	<!-- <link rel="stylesheet" href="css/bootstrap-theme.css"/>	 -->
	<link rel="stylesheet" href="css/style.css?v=1.0001"/>	

	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

	<link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">

	<!-- 
    xs - phones < 768px
    sm - tablets >= 768px
    md - small laptops >= 992px
    lg - laptops/desktop >= 1200px 
    -->

</head>
<body style="background-color: #f5f5f5;">

	<!-- navbar -->
		<nav class="navbar navbar-default">
			<div class="container-fluid" style="padding-top: 15px;">
				<div class="navbar-header" style="padding-bottom: 15px;">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false">
						<span class="icon-bar"></span>	
						<span class="icon-bar"></span>	
						<span class="icon-bar"></span>	
					</button>

					<a class="navbar-brand go-to" href="javascript:;" go-to="landing-page" style="color: #1fc8db"><span>EZ Reports</span></a>
				</div>

				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
						<!-- <li class="olo"><a href="javascript:;" class="go-to auth" go-to="about-us">Login</a></li> -->
						<li><a class="go-to auth" go-to="about-us" data-toggle="modal" data-target="#regisModal">KELUAR</a></li>		
						<!-- <a href="javascript:;" class="go-to" data-toggle="modal" data-target="#myModal">Forgot Password!</a>			 -->
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a class="go-to auth" go-to="about-us" data-toggle="modal" data-target="#regisModal">PROFIL</a></li>		
					</ul>

					<!-- <ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="dropdown-toggle" data-toggle="dropdown" href="javascript:;">Categories
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">Machinery/Parts</a></li>
								<li><a href="#">Hardware/Tools</a></li>
								<li><a href="#">Consumer Electronics/Appliance</a></li>
								<li><a href="#">House/Office/Rooms</a></li>
								<li><a href="#">Lorry/Transportation</a></li>
								<li><a href="#">Tents/Canopy</a></li>
								<li><a href="#">Hobbies/Games</a></li>
								<li><a href="#">Sports/Recreation</a></li>
								<li><a href="#">Fashion</a></li>
							</ul>
						</li>
					</ul> -->	
				</div>	

			</div>	
		</nav>


	<section class="main_here">
		
		<div class="container-fluid content gradient_jumbo" style="padding-top: 10px; padding-bottom: 10px;">
			<div class="container-fluid">
				<h4 class="title">LAPORAN KAWALSELIA KERJA-KERJA PERKHIDMATAN PENGURUSAN PEMBERSIHAN AWAM HULU SELANGOR (PHS)</h4>
			</div>
		</div>

		<div class="container-fluid menu_content">
			<div class="col-lg-12">
				<span>&nbsp</span>
				<h3 style="display: block;text-align: center;">LANGKAH 1 : LAPORAN BERJADUAL</h3><br>	
				<span>&nbsp;</span>			
			</div>

			<div class="col-lg-12 col-xs-12">
				<form class="form-horizontal">

				<div class="form-group col-lg-3 col-xs-12">

						<label for="total_pekerja" class="col-lg-5 col-xs-12 control-label" style="text-align: center;display: block;"><b>TARIKH</b></label>
						<div class="col-lg-7 col-xs-12">
							<input type="date" class="form-control" style="text-align: center;display: block;" name="tarikh" id="tarikh">
						</div>
						<div class="col-lg-0"></div>
					
				</div>

				<div class="form-group col-lg-3 col-xs-12">

						<label for="total_pekerja" class="col-lg-5 col-xs-12 control-label" style="text-align: center;display: block;"><b>PEKERJA + PEMANDU</b></label>
						<div class="col-lg-5 col-xs-12">
							<input type="number" class="form-control" style="text-align: center;display: block;" name="total_pekerja" id="total_pekerja" placeholder="Jumlah">
						</div>
						<div class="col-lg-2"></div>
					
				</div>

				<div class="form-group col-lg-3 col-xs-12">

						<label for="total_pekerja" class="col-lg-5 control-label" style="text-align: center;display: block;"><b>LORI LORO</b></label>
						<div class="col-lg-5">
							<input type="number" class="form-control" style="text-align: center;display: block;" name="total_pekerja" id="total_pekerja" placeholder="Jumlah">
						</div>
						<div class="col-lg-2"></div>
					
				</div>

				<div class="form-group col-lg-3 col-xs-12">

						<label for="plat_lori" class="col-lg-5 control-label" style="text-align: center;display: block;"><b>NO. PENDAFTARAN LORI</b></label>
						<div class="col-lg-5">
							<input type="text" class="form-control" style="text-align: center;display: block;" name="plat_lori" id="plat_lori" placeholder="Contoh : WC 0192 V">
						</div>
						<div class="col-lg-2"></div>
					
				</div>
				</form>
			</div>

			<span>&nbsp;</span>
			<div class="row">
				<center>
					<span>&nbsp;</span>
					<!-- <span>&nbsp;</span> -->
						<h5>Sila tandakan ✔ untuk mengisi laporan jadual anda.</h5>
					<span>&nbsp;</span>
				</center>
			</div>

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-responsive" style="border-color: #1fc8db; border-style: solid; border-width: thin;">
				<center>
						<h5><strong>Sila "slide" kotak ke kanan untuk paparan penuh.</strong></h5>
						<span>&nbsp;</span>
				</center>

				<table class="table table-hover">
				  	<thead>
				    	<tr>
				      		<th>LOKASI</th>
				      		<th>SAPUAN</th>
				      		<th>LONGKANG</th>
				      		<th>RUMPUT</th>
				      		<th>KPHL</th>
				      		<th>PASAR MALAM</th>
				      		<th>PASAR PAGI</th>
				      		<th>WAKTU KUTIPAN PLASTIK KUNING</th>
				    	</tr>
				  	</thead>

				  	<tbody>
				    	<tr>
				      		<th class="col-lg-1">JALAN UTAMA</th>
				      		<td class="col-lg-1 text-xs-center">			      			
				            	<input type="checkbox">		          		
				          	</td>
				          	<td class="col-lg-1 text-xs-center">			      			
				            	<input type="checkbox">		          		
				          	</td>
				          	<td class="col-lg-1 text-xs-center">			      			
				            	<input type="checkbox">		          		
				          	</td>
				          	<td class="col-lg-1 text-xs-center">			      			
				            	<input type="checkbox">		          		
				          	</td>
				          	<td class="col-lg-1 text-xs-center">			      			
				            	<input type="checkbox">		          		
				          	</td>
				          	<td class="col-lg-1 text-xs-center">			      			
				            	<input type="checkbox">		          		
				          	</td>

				          	<td class="col-lg-1 text-xs-center">			      			
				            	<input type="time" class="form-control" style="text-align: center;">		          		
				          	</td>
				    	</tr>

				    	<tr>
				      		<th class="col-lg-1">KOMERSIAL/INDUSTRI</th>
				      		<td class="col-lg-1 text-xs-center">			      			
				            	<input type="checkbox">		          		
				          	</td>
				          	<td class="col-lg-1 text-xs-center">			      			
				            	<input type="checkbox">		          		
				          	</td>
				          	<td class="col-lg-1 text-xs-center">			      			
				            	<input type="checkbox">		          		
				          	</td>
				          	<td class="col-lg-1 text-xs-center">			      			
				            	<input type="checkbox">		          		
				          	</td>
				          	<td class="col-lg-1 text-xs-center">			      			
				            	<input type="checkbox">		          		
				          	</td>
				          	<td class="col-lg-1 text-xs-center">			      			
				            	<input type="checkbox">		          		
				          	</td>
			
				          	<td class="col-lg-1 text-xs-center">			      			
				            	<input type="time" class="form-control" style="text-align: center;">		          		
				          	</td>
				    	</tr>

				    	<tr>
				      		<th class="col-lg-1">SEKOLAH/INSTITUSI</th>
				      		<td class="col-lg-1 text-xs-center">			      			
				            	<input type="checkbox">		          		
				          	</td>
				          	<td class="col-lg-1 text-xs-center">			      			
				            	<input type="checkbox">		          		
				          	</td>
				          	<td class="col-lg-1 text-xs-center">			      			
				            	<input type="checkbox">		          		
				          	</td>
				          	<td class="col-lg-1 text-xs-center">			      			
				            	<input type="checkbox">		          		
				          	</td>
				          	<td class="col-lg-1 text-xs-center">			      			
				            	<input type="checkbox">		          		
				          	</td>
				          	<td class="col-lg-1 text-xs-center">			      			
				            	<input type="checkbox">		          		
				          	</td>
			
				          	<td class="col-lg-1 text-xs-center">			      			
				            	<input type="time" class="form-control" style="text-align: center;">		          		
				          	</td>
				    	</tr>

				    	<tr>
				      		<th class="col-lg-1">JADUAL HARIAN</th>
				      		<td class="col-lg-1 text-xs-center">			      			
				            	<input type="checkbox">		          		
				          	</td>
				          	<td class="col-lg-1 text-xs-center">			      			
				            	<input type="checkbox">		          		
				          	</td>
				          	<td class="col-lg-1 text-xs-center">			      			
				            	<input type="checkbox">		          		
				          	</td>
				          	<td class="col-lg-1 text-xs-center">			      			
				            	<input type="checkbox">		          		
				          	</td>
				          	<td class="col-lg-1 text-xs-center">			      			
				            	<input type="checkbox">		          		
				          	</td>
				          	<td class="col-lg-1 text-xs-center">			      			
				            	<input type="checkbox">		          		
				          	</td>
			
				          	<td class="col-lg-1 text-xs-center">			      			
				            	<input type="time" class="form-control" style="text-align: center;">		          		
				          	</td>
				    	</tr>

				    	<tr>
				      		<th class="col-lg-1">SAPUAN TAMAN</th>
				      		<td class="col-lg-1 text-xs-center">			      			
				            	<input type="checkbox">		          		
				          	</td>
				          	<td class="col-lg-1 text-xs-center">			      			
				            	<input type="checkbox">		          		
				          	</td>
				          	<td class="col-lg-1 text-xs-center">			      			
				            	<input type="checkbox">		          		
				          	</td>
				          	<td class="col-lg-1 text-xs-center">			      			
				            	<input type="checkbox">		          		
				          	</td>
				          	<td class="col-lg-1 text-xs-center">			      			
				            	<input type="checkbox">		          		
				          	</td>
				          	<td class="col-lg-1 text-xs-center">			      			
				            	<input type="checkbox">		          		
				          	</td>
			
				          	<td class="col-lg-1 text-xs-center">			      			
				            	<input type="time" class="form-control" style="text-align: center;">		          		
				          	</td>
				    	</tr>


				  	</tbody>
				</table> 
			</div>

			<span>&nbsp;</span>
			<div class="row">
				<center>
					<!-- <span>&nbsp;</span> -->
					<h4>PETUNJUK CUACA</h4>
					<span>&nbsp;</span>
				</center>
			</div>

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-responsive" style="border-color: #1fc8db; border-style: solid; border-width: thin;">

				<table class="table table-hover">
					<thead>
				    	<tr>
				      		<th>MASA</th>
				      		<th>CERAH</th>
				      		<th>HUJAN</th>
				    	</tr>
				  	</thead>
				  	<tbody>
				  		<tr>
				      		<th class="col-lg-1">8 AM - 10 AM</th>
				      		<td class="col-lg-1 text-xs-center">			      			
				            	<input type="checkbox">		          		
				          	</td>
				          	<td class="col-lg-1 text-xs-center">			      			
				            	<input type="checkbox">		          		
				          	</td>
				    	</tr>

				    	<tr>
				      		<th class="col-lg-1">10 AM - 12 PM</th>
				      		<td class="col-lg-1 text-xs-center">			      			
				            	<input type="checkbox">		          		
				          	</td>
				          	<td class="col-lg-1 text-xs-center">			      			
				            	<input type="checkbox">		          		
				          	</td>
				    	</tr>

				    	<tr>
				      		<th class="col-lg-1">2 PM - 4 PM</th>
				      		<td class="col-lg-1 text-xs-center">			      			
				            	<input type="checkbox">		          		
				          	</td>
				          	<td class="col-lg-1 text-xs-center">			      			
				            	<input type="checkbox">		          		
				          	</td>
				    	</tr>

				    	<tr>
				      		<th class="col-lg-1">4 PM - 7 PM</th>
				      		<td class="col-lg-1 text-xs-center">			      			
				            	<input type="checkbox">		          		
				          	</td>
				          	<td class="col-lg-1 text-xs-center">			      			
				            	<input type="checkbox">		          		
				          	</td>
				    	</tr>
				  	</tbody>
				</table>


			</div>
			
		</div>

		<div class="container menu_content">
			<div class="col-lg-12 col-xs-12">
				<span>&nbsp</span>
				<h3 style="display: block;text-align: center;"> LANGKAH 2 : LAPORAN BERGAMBAR</h3>
			</div>
			<div class="col-lg-12 col-xs-12" style="border-color: #1fc8db; border-style: solid; border-width: thin;">
				test
			</div>
			
		</div>
		
	</section>

	<section class="footer">
		<div class="container-fluid" >
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <center>
                       	<span style="color:black;">Dibangunkan oleh Fazan® Enterprise</span>
                    </center>
                </div>
                <div class="col-lg-4"></div>
            </div>
	    </div>

	    
	</section>

</body>
</html>

<script src="js/jquery-3.2.1.js"></script>		
<script src="js/jquery-ui.js"></script>
<script src="js/bootstrap-3.3.7.js"></script>

<script type="text/javascript">
	$(document).ready(function () {

	 	$(".shw_btn").hide();


		$(".myBox").click(function() {
		 	window.location.href = 'http://google.com/';
		});

		$(".rmv_btn").click(function(){
		    $(this).hide();
		    $(".shw_btn").show();
		});
		
		$(".shw_btn").click(function(){
		    $(this).hide();
		    $(".rmv_btn").show();
		});


	});

</script>

