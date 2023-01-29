<?php

    session_start();
    require("config.php");
    
    $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME); 
    mysqli_set_charset($conn,'UTF8');

    $_SESSION['id']="";
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>GamesForever</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="aStar Fashion Template Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.3/bootstrap.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			
			<!-- Hamburger -->
			<div class="hamburger menu_mm"><i class="fa fa-bars menu_mm" aria-hidden="true"></i></div>

			<!-- Logo -->
			<div class="sidebar_logo">
			<a href="#"><div>Games
                <span>Forever</span></div></a> 
		</div>


			<!-- Navigation -->
			<nav class="header_nav">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li><a href="index.php">Inicio</a></li>
					<li><a href="steam.php">Steam</a></li>
					<li><a href="#">Origin</a></li>
					<li><a href="#">RockStar</a></li>
					<li><a href="#">Battle.net</a></li>
                    <li><a href="#">EpicGames</a></li>
					<li><a href="login.php">Login</a></li>
				</ul>
			</nav>

			<!-- Header Extra -->
			<div class="header_extra ml-auto d-flex flex-row align-items-center justify-content-start">

				<!-- Language -->
				<div class="info_languages has_children">
					<div class="language_flag"><img src="images/flag_6.png" alt="https://www.flaticon.com/authors/freepik"></div>
					<div class="dropdown_text">Português</div>
					<div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
					<div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>

				</div>

				<!-- Currency -->
				<div class="info_currencies has_children">
					<div class="dropdown_text">EUR</div>
					<div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>

				</div>

				<!-- Cart -->
				<div class="cart d-flex flex-row align-items-center justify-content-start">
					<div class="cart_icon"><a href="cart.php">
						<img src="images/bag.png" alt="">
						<div class="cart_num">2</div>
					</a></div>
				</div>

			</div>

		</div>
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-start justify-content-start menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="menu_top d-flex flex-row align-items-center justify-content-start">

			<!-- Language -->
			<div class="info_languages has_children">
				<div class="language_flag"><img src="images/flag_6.png" alt="https://www.flaticon.com/authors/freepik"></div>
				<div class="dropdown_text">Português</div>
                <div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
			</div>

			<!-- Currency -->
			<div class="info_currencies has_children">
				<div class="dropdown_text">EUR</div>
				<div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
			</div>

		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="Inicio.php">Inicio</a></li>
				<li class="menu_mm"><a href="steam.php">Steam</a></li>
				<li class="menu_mm"><a href="origin.php">Origin</a></li>
				<li class="menu_mm"><a href="rockstar.php">RockStar</a></li>
                <li class="menu_mm"><a href="battlenet.php">Battle.net</a></li>
                <li class="menu_mm"><a href="epicgames.php">EpicGames</a></li>
				<li class="menu_mm"><a href="login.php">Login</a></li>
			</ul>
		</nav>
		<div class="menu_extra">
			<div class="menu_social">
				<ul>
					<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	
	<!-- Sidebar -->

	<div class="sidebar">
		
		<!-- Info -->
		<div class="info">
			<div class="info_content d-flex flex-row align-items-center justify-content-start">
				
				<!-- Language -->
				<div class="info_languages has_children">
					<div class="language_flag"><img src="images/flag_6.png" alt="https://www.flaticon.com/authors/freepik"></div>
					<div class="dropdown_text">português</div>
					<div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
				</div>

				<!-- Currency -->
				<div class="info_currencies has_children">
					<div class="dropdown_text">EUR</div>
					<div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
				</div>

			</div>
		</div>

		<!-- Logo -->
		<div class="sidebar_logo">
			<a href="#"><div>Games
                <span>Forever</span></div></a>
		</div>

		<!-- Sidebar Navigation -->
        
        
        <?php
    if($_SESSION["username"]==""){
                            
                $sql_cate=sprintf("select * from categorias where nivel!=4 and nivel!=5;");
                $res_cate=mysqli_query($conn,$sql_cate);
        ?>
         <nav class="sidebar_nav">
                <ul>
        <?php            
        while($reg_cate=mysqli_fetch_array($res_cate)){
            if($reg_cate['nivel']==1){
            $link='jogos.php?plataforma='.$reg_cate['categoria'];
            ?>
            
                <li><a href="<?php echo $link ?>"><?php echo $reg_cate['categoria']; ?><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
            <?php
                    }
            else{
            ?>
                <li><a href="<?php echo $reg_cate['codigo'] ?>"><?php echo $reg_cate['categoria'] ?><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
        <?php            
                }
            }
        ?>
                </ul>
            </nav>
        <?php
    }else{
        if($_SESSION["username"]!=""){
            $sql_consulta=sprintf("select * from registo where username='%s';",$_SESSION["username"]);
            $res_consulta=mysqli_query($conn,$sql_consulta);
            $num_consulta=mysqli_fetch_array($res_consulta);
                if ($num_consulta['nivel']==5){
		            $sql_cate=sprintf("select * from categorias where nivel!=3 and nivel!=4;");
                    $res_cate=mysqli_query($conn,$sql_cate);
                    ?>
                    <nav class="sidebar_nav">
                        <ul>
                            <?php            
                            while($reg_cate=mysqli_fetch_array($res_cate)){
                                if($reg_cate['nivel']==1){
                                $link='jogos.php?plataforma='.$reg_cate['categoria'];
                                
                                ?>
                                <li><a href="<?php echo $link ?>"><?php echo $reg_cate['categoria']; ?><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                <?php
                                    }
                                else{
                                ?>
                                <li><a href="<?php echo $reg_cate['codigo'] ?>"><?php echo $reg_cate['categoria'] ?><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                             <?php            
                                }
                            }
                            ?>
                        </ul>
                    </nav>
        <?php
            }else{
                if ($num_consulta['nivel']==1){
                        $sql_cate=sprintf("select * from categorias where nivel!=3 and nivel!=5;");
                        $res_cate=mysqli_query($conn,$sql_cate);
        ?>
                            <nav class="sidebar_nav">
                                <ul>
                        <?php            
                                while($reg_cate=mysqli_fetch_array($res_cate)){
                                if($reg_cate['nivel']==1){
                                $link='jogos.php?plataforma='.$reg_cate['categoria'];
                                
                        ?>
                                <li><a href="<?php echo $link ?>"><?php echo $reg_cate['categoria']; ?><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                        <?php
                                    }
                                else{
                                ?>
                                <li><a href="<?php echo $reg_cate['codigo'] ?>"><?php echo $reg_cate['categoria'] ?><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                             <?php            
                                }
                            }
                            ?>
                                </ul>
                            </nav>
                <?php 
                   } 
                }
                           
        }
    }
       
?>

		<!-- Cart -->
		<div class="cart d-flex flex-row align-items-center justify-content-start">
			<div class="cart_icon"><a href="cart.php">
				<img src="images/bag.png" alt="">
			</a></div>
			<div class="cart_text">carro</div>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/home_slider_5.jpg)"></div>
					<div class="home_content_container">
						<div class="home_content">
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/home_slide_2.jpg)"></div>
					<div class="home_content_container">
						<div class="home_content">
							<div class="home_title">Borderlands 3</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/home_slider_1.jpg)"></div>
					<div class="home_content_container">
						<div class="home_content">
						</div>
					</div>
				</div>

			</div>
				
			<!-- Home Slider Navigation -->
			<div class="home_slider_nav home_slider_prev trans_200"><div class=" d-flex flex-column align-items-center justify-content-center"><img src="images/prev.png" alt=""></div></div>
			<div class="home_slider_nav home_slider_next trans_200"><div class=" d-flex flex-column align-items-center justify-content-center"><img src="images/next.png" alt=""></div></div>

		</div>
	</div>


	<!-- Products -->
    <?php
        $sql=sprintf("select * from jogos where destaque=1;");
        $res=mysqli_query($conn,$sql);
    ?>

	<div class="products">
		<div class="section_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="products_container grid">
                            <?php
                            
                            while($reg=mysqli_fetch_array($res)){
                                
                           
                            
                            ?>
							<!-- Product -->
							<div class="product grid-item hot">
								<div class="product_inner">
									<div class="product_image">
										<img src="images/<?php echo $reg["nome_fisico"]?>" alt="">
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.php"><?php echo $reg["nome_jogo"]?></div>
										<div class="product_price"><?php echo $reg["preco"]?>€</div>
                                        
                                        <form method="post" action="product.php">
                                            <button type="submit" class="product_button ml-auto mr-auto trans_200">Ver detalhes</button>

                                            <input type="hidden" name="id" value="<?php echo $reg['id']; ?>">

                                        </form>
									</div>
								</div>	
							</div>
                            
                            
                            <?php
                                 }
                            ?>
							<!-- Product -->
							<!--<div class="product grid-item">
								<div class="product_inner">
									<div class="product_image"><img src="images/product_2.jpg" alt=""></div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html">CS:GO(Estado Prime)</a></div>
										<div class="product_price">13.25€</div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="#">Adicionar ao Carro</a></div>
									</div>
								</div>	
							</div>

							<!-- Product -->
							<!--<div class="product grid-item sale">
								<div class="product_inner">
									<div class="product_image">
										<img src="images/product_5.jpg" alt="">
										<div class="product_tag">sale</div>
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html">Borderlands 3</a></div>
										<div class="product_price">40.99€<span>RRP 69.99</span></div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="#">Adicionar ao Carro</a></div>
									</div>
								</div>	
							</div>

							<!-- Product -->
							<!--<div class="product grid-item">
								<div class="product_inner">
									<div class="product_image">
										<img src="images/product_4.jpg" alt="">
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html">Overwatch</a></div>
										<div class="product_price">15.99€</div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="#">Adicionar ao Carro</a></div>
									</div>
								</div>	
							</div>

							<!-- Product -->
							<!--<div class="product grid-item">
								<div class="product_inner">
									<div class="product_image">
										<img src="images/product_3.jpg" alt="">
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html">DaysGone</a></div>
										<div class="product_price">29.99€</div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="#">Adicionar ao Carro</a></div>
									</div>
								</div>	
							</div>

							<!-- Product -->
							<!--<div class="product grid-item new">
								<div class="product_inner">
									<div class="product_image">
										<img src="images/product_6.jpg" alt="">
										<div class="product_tag">new</div>
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html">FIFA 20</a></div>
										<div class="product_price">49.99€</div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="#">Adicionar ao Carro</a></div>
									</div>
								</div>	
							</div>

							<!-- Product -->
							<!--<div class="product grid-item">
								<div class="product_inner">
									<div class="product_image">
										<img src="images/product_7.jpg" alt="">
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html">Red Dead Redemption 2</a></div>
										<div class="product_price">34.99€</div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="#">Adicionar ao Carro</a></div>
									</div>
								</div>	
							</div>

							<!-- Product -->
							<!--<div class="product grid-item sale">
								<div class="product_inner">
									<div class="product_image">
										<img src="images/product_8.jpg" alt="">
										<div class="product_tag">sale</div>
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html">COD:Modern Warfare</a></div>
										<div class="product_price">39.99€<span>RRP 59.49</span></div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="#">Adicionar ao Carro</a></div>
									</div>
								</div>	
							</div>-->

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

		<!-- Credits -->
		<div class="credits">
			<div class="section_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="credits_content d-flex flex-row align-items-center justify-content-end">
								<div class="credits_text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.3/popper.js"></script>
<script src="styles/bootstrap-4.1.3/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/Isotope/fitcolumns.js"></script>
<script src="js/custom.js"></script>
</body>
</html>