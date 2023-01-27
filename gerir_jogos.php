<?php
session_start();
require("config.php");

$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME); 
mysqli_set_charset($conn,'UTF8');

     if($_SESSION["nivel"]!=5){
                   header('location:Inicio.php');
      }

    
$id=$reg_lista['id'];
    
$sql_consulta=sprintf("select destaque from jogos;");
$res_consulta=mysqli_query($conn,$sql_consulta);
$num_consulta=mysqli_num_rows($res_consulta);
    
$destaque=$num_consulta['destaque'];
    
if (isset($_POST['destaque'])){
    $sql_listax=sprintf("select * from jogos where id=%d;",$_POST['id']);
    $res_listax=mysqli_query($conn,$sql_listax);
    $res_listax=mysqli_fetch_array($res_listax);
    if ($res_listax['destaque']==0){
        
        $sql_insere=sprintf("update jogos set destaque=1 where id=%d;",$_POST['id']);
        
    } else{
        
        $sql_insere=sprintf("update jogos set destaque=0 where id=%d;",$_POST['id']);
    }
    mysqli_query($conn,$sql_insere);
}
 $sql_lista=sprintf("select * from jogos order by nome_jogo;");
$res_lista=mysqli_query($conn,$sql_lista);
$num_lista=mysqli_num_rows($res_lista);

?>
<?php
    if(isset($_POST['apagar'])){
                
               $sql_apaga=sprintf("delete from jogos where id=%d;",$_POST['id']);
        
                if(mysqli_query($conn,$sql_apaga)){
                    
        ?>
                    
                <script type="text/javascript">
                    <!--
                    var answer = confirm("APAGADO COM SUCESSO!");
                    if (!answer){
                    window.location = "GamesForever";
                    }
                    //-->
                </script>

        <?php
                    header('location:gerir_jogos.php');
                }
                
            }
        if(isset($_POST['confirmar'])){
             $sql_confirma=sprintf("update jogos set nome_jogo='%s',plataforma='%s',preco='%s',descricao='%s' where id=%d;",$_POST['nome_jogo'],$_POST['plataforma'],$_POST['preco'],$_POST['descricao'],$_SESSION["id"]);            
            if(mysqli_query($conn,$sql_confirma)){
                    
        ?>
                    
    <?php
                header('location:gerir_jogos.php');
        }
}
?>
          


<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="aStar Fashion Template Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.3/bootstrap.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/checkout.css">
<link rel="stylesheet" type="text/css" href="styles/checkout_responsive.css">
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
					<div class="cart_icon"><a href="cart.html">
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
				<li><a href="Inicio.php">Inicio</a></li>
					<li><a href="#">Steam</a></li>
					<li><a href="#">Origin</a></li>
					<li><a href="#">RockStar</a></li>
					<li><a href="#">Battle.net</a></li>
                    <li><a href="#">EpicGames</a></li>
					<li><a href="#">Contacto</a></li>  
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
            }
        }
        ?> 

		<!-- Cart -->
		<div class="cart d-flex flex-row align-items-center justify-content-start">
			<div class="cart_icon"><a href="cart.html">
				<img src="images/bag.png" alt="">
			</a></div>
			<div class="cart_text">Carro</div>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/checkout.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="home_content">
				<div class="breadcrumbs">
				</div>
			</div>
		</div>
	</div>

    
        	<!-- Checkout -->
    <style>
               table {
                   font-family: arial, sans-serif;
                   border-collapse: collapse;
                   width: 100%;
               }

               td, th {
                   border: 1px solid #dddddd;
                   text-align: left;
                   padding: 8px;
               }

               tr:nth-child(even) {
                   background-color: #c2c2d6;
               }

               .btn {
                 border: none;
                 color: black;
                 padding: 14px 26px;
                 font-size: 16px;
                 cursor: pointer;
               }

               .success {
                 border-color: #ffffff;
                 color: black;
               }

               .success:hover {
                 background-color: #ffffff;
                 color: black;
               }
        </style>
    
	<div class="checkout">
		<div class="section_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="checkout_container d-flex flex-xxl-row flex-column align-items-start justify-content-start">
							
							<!-- Billing -->
							<div class="billing checkout_box">
								<div class="checkout_title">Jogos Disponiveis</div>
								<div class="checkout_form_container">
                                    
                                    <table border=1>
                                        <tr>
                                            <th>ID</th>
                                            <th>NOME DO JOGO</th>
                                            <th>PLATAFORMA</th>
                                            <th>PREÇO</th>
                                            <th>DESTAQUE</th>
                                        </tr>
    
                                    <?php
                                        while($reg_lista=mysqli_fetch_array($res_lista)){
                                        switch($reg_lista['destaque']){
                                            case 0:
                                                $destaque='DESATIVADO';
                                            break;
                                            case 1:
                                                $destaque='ATIVO';
                                            break;
                                        }
                                    ?>
                                    <form method="post">
               
                                        <tr>
                                            <td><?php echo $reg_lista['id']; ?></td>
                                            <td><?php echo $reg_lista['nome_jogo']; ?></td>
                                            <td><?php echo $reg_lista['plataforma']; ?></td>
                                            <td><?php echo $reg_lista['preco']; ?></td>
                                            <td><?php echo $destaque; ?></td>
                   
                                            <td><input type="submit" name="destaque" value="Ativar/Desativar"></td>
                                            <td><input type="submit" name="editar" value="Editar"></td>
                                            <td><input type="submit" name="apagar" value="Apagar"></td>
                   
                                            <input type="hidden" name="id" value="<?php echo $reg_lista['id']; ?>">
                                        </tr>
                                    </form>
                                   
                                <?php
                                        $_SESSION['id']=$_POST['id'];
                                    }
                                ?>
                                    </table>
                                     <br><br><br><br>
            <?php 
            
                if (isset($_POST['editar'])){
                    
                    
                    $sql_id=sprintf("select * from jogos where id=%d;",$_POST['id']);
                    $res_id=mysqli_query($conn,$sql_id);
                    $num_id=mysqli_fetch_array($res_id);

            ?>
                
                <div class="row justify-content-center">
						<form class="col-lg-9" method="post" enctype="multipart/form-data">
                            
						  <div class="form-group">
						    <label for="nome_jogo">Nome do Jogo</label>
						    <input name="nome_jogo" type="text" class="form-control" value="<?php echo $num_id['nome_jogo'];  ?>">
						  </div>
                        <div class="form-group">
						    <label for="plataforma">Plataforma</label>
						    <input name="plataforma" type="text" class="form-control" value="<?php echo $num_id['plataforma'];  ?>">
						  </div>
						  <div class="form-group">
						    <label for="preco">Preço</label>
						    <input name="preco" type="text" class="form-control" value="<?php echo $num_id['preco'];  ?>">
						  </div>
						  <div class="form-group">
						    <label for="descricao">Descrição</label>
						    <input name="descricao" type="text" class="form-control" value="<?php echo $num_id['descricao'];  ?>">
						  </div>		
						  
						  <button  type="submit" name="confirmar" class="primary-btn">Confirmar</button>
                            
						</form>
				</div>
                
             <?php   
                }
             ?>
                                </div>
							</div>
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
<script src="js/checkout.js"></script>
</body>
</html>