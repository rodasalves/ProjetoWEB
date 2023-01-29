<?php

    session_start();
    require("config.php");
    
    $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME); 
    mysqli_set_charset($conn,'UTF8');

    if ($_SESSION['id']==""){
        $_SESSION['id']=$_POST['id'];
    }

    $sql=sprintf("select * from jogos where id=%d;",$_SESSION['id']);
    $res=mysqli_query($conn,$sql);
    $reg=mysqli_fetch_array($res);

    $sql_cliente=sprintf("select * from registo where username='%s';",$_SESSION['username']);
    $res_cliente=mysqli_query($conn,$sql_cliente);
    $reg_cliente=mysqli_fetch_array($res_cliente);
    
    if(isset($_POST['adicionar'])){
                if($_SESSION["username"]==""){
                    header('location:login.php');
                }else{
                   $sql_insere=sprintf("insert into carrinho (nome_fisico, nome_jogo, preco, cliente) values ('%s','%s','%s','%s');",$reg["nome_fisico"],$reg["nome_jogo"],$reg["preco"],$_SESSION['username']);
                    mysqli_query($conn,$sql_insere);
                    }
            }

    $sql=sprintf("select * from jogos where id=%d;",$_SESSION['id']);
    $res=mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Product</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="aStar Fashion Template Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.3/bootstrap.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/product.css">
<link rel="stylesheet" type="text/css" href="styles/product_responsive.css">
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
					<li><a href="#">Steam</a></li>
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
					<div class="language_flag"><img src="images/flag_1.svg" alt="https://www.flaticon.com/authors/freepik"></div>
					<div class="dropdown_text">english</div>
					<div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
					
					<!-- Language Dropdown Menu -->
					 <ul>
					 	<li><a href="#">
				 			<div class="language_flag"><img src="images/flag_2.svg" alt="https://www.flaticon.com/authors/freepik"></div>
							<div class="dropdown_text">french</div>
					 	</a></li>
					 	<li><a href="#">
				 			<div class="language_flag"><img src="images/flag_3.svg" alt="https://www.flaticon.com/authors/freepik"></div>
							<div class="dropdown_text">japanese</div>
					 	</a></li>
					 	<li><a href="#">
				 			<div class="language_flag"><img src="images/flag_4.svg" alt="https://www.flaticon.com/authors/freepik"></div>
							<div class="dropdown_text">russian</div>
					 	</a></li>
					 	<li><a href="#">
				 			<div class="language_flag"><img src="images/flag_5.svg" alt="https://www.flaticon.com/authors/freepik"></div>
							<div class="dropdown_text">spanish</div>
					 	</a></li>
					 </ul>

				</div>

				<!-- Currency -->
				<div class="info_currencies has_children">
					<div class="dropdown_text">usd</div>
					<div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>

					<!-- Currencies Dropdown Menu -->
					 <ul>
					 	<li><a href="#"><div class="dropdown_text">EUR</div></a></li>
					 	<li><a href="#"><div class="dropdown_text">YEN</div></a></li>
					 	<li><a href="#"><div class="dropdown_text">GBP</div></a></li>
					 	<li><a href="#"><div class="dropdown_text">CAD</div></a></li>
					 </ul>

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
				<div class="language_flag"><img src="images/flag_1.svg" alt="https://www.flaticon.com/authors/freepik"></div>
				<div class="dropdown_text">english</div>
				<div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
				
				<!-- Language Dropdown Menu -->
				 <ul>
				 	<li><a href="#">
			 			<div class="language_flag"><img src="images/flag_2.svg" alt="https://www.flaticon.com/authors/freepik"></div>
						<div class="dropdown_text">french</div>
				 	</a></li>
				 	<li><a href="#">
			 			<div class="language_flag"><img src="images/flag_3.svg" alt="https://www.flaticon.com/authors/freepik"></div>
						<div class="dropdown_text">japanese</div>
				 	</a></li>
				 	<li><a href="#">
			 			<div class="language_flag"><img src="images/flag_4.svg" alt="https://www.flaticon.com/authors/freepik"></div>
						<div class="dropdown_text">russian</div>
				 	</a></li>
				 	<li><a href="#">
			 			<div class="language_flag"><img src="images/flag_5.svg" alt="https://www.flaticon.com/authors/freepik"></div>
						<div class="dropdown_text">spanish</div>
				 	</a></li>
				 </ul>

			</div>

			<!-- Currency -->
			<div class="info_currencies has_children">
				<div class="dropdown_text">usd</div>
				<div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>

				<!-- Currencies Dropdown Menu -->
				 <ul>
				 	<li><a href="#"><div class="dropdown_text">EUR</div></a></li>
				 	<li><a href="#"><div class="dropdown_text">YEN</div></a></li>
				 	<li><a href="#"><div class="dropdown_text">GBP</div></a></li>
				 	<li><a href="#"><div class="dropdown_text">CAD</div></a></li>
				 </ul>

			</div>

		</div>
		<div class="menu_search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li><a href="index.php">Inicio</a></li>
					<li><a href="#">Steam</a></li>
					<li><a href="#">Origin</a></li>
					<li><a href="#">RockStar</a></li>
					<li><a href="#">Battle.net</a></li>
                    <li><a href="#">EpicGames</a></li>
					<li><a href="login.php">Login</a></li>
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
					<div class="dropdown_text">Português</div>
					<div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
					
					<!-- Language Dropdown Menu -->
					 <ul>
					 	<li><a href="#">
				 			<div class="language_flag"><img src="images/flag_1.jpg" alt="https://www.flaticon.com/authors/freepik"></div>
							<div class="dropdown_text">Inglês</div>
					 	</a></li>
					 </ul>

				</div>

				<!-- Currency -->
				<div class="info_currencies has_children">
					<div class="dropdown_text">EUR</div>
					<div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>

					<!-- Currencies Dropdown Menu -->
					 <ul>
					 	<li><a href="#"><div class="dropdown_text">USD</div></a></li>
					 </ul>

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
			<div class="cart_text">Carro</div>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/checkout.jpg" data-speed="0.8"></div>
		<div class="home_container">
		</div>
	</div>
    
    <!-- Product Content -->
    <?php
    
                            
        while($reg=mysqli_fetch_array($res)){
    ?>
    
    
		<div class="section_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="product_content_container d-flex flex-lg-row flex-column align-items-start justify-content-start">
							<div class="product_content order-lg-1 order-2">
								<div class="product_content_inner">
									<div class="product_image_row d-flex flex-md-row flex-column align-items-md-end align-items-start justify-content-start">
										<div class="product_image_1 product_image">
											<img src="images/<?php echo $reg["nome_fisico"];?>" alt="">
										</div>
									</div>
								</div>
							</div> 
							<div class="product_sidebar order-lg-2 order-1">
								<form action="" id="product_form" class="product_form" method="post">
									<div class="product_name"><?php echo $reg["nome_jogo"];?></div>
									<div class="product_price"><?php echo $reg["preco"];?>€</div>
									<div class="product_color"><?php echo $reg["descricao"];?></div>
                                    <button type="submit" name="adicionar" class="cart_button trans_200">Adicionar ao carrinho</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    <?php
        }
    ?>
<br>
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
<script src="js/product.js"></script>
</body>
</html>