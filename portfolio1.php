<?php
ob_start();

require __DIR__ . "/vendor/autoload.php";
$usuario = new Classe\usuario();
$faceL= $usuario->facebook();



ob_end_flush();

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/magazine.css" />  
    <link rel="stylesheet" type="text/css" href="css/fadein.css" />  
    <link rel="stylesheet" href="assets/demo.css">
    <link rel="stylesheet" href="assets/navigation-dark.css">
    <link rel="stylesheet" href="assets/slicknav/slicknav.min.css">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    
    <title>Luana's Portfolio</title>
</head>
<body class="fadeIn">
    <div class="menu">
    <nav class="menu-navigation-dark">
        <a href="#about" onclick=about()><i class="fa fa-comment"></i><span>About me</span></a>
        <a href="#project" onclick=project()><i class="fa fa-code"></i><span>Produtos</span></a>
        <a href="#home" class="selected"><i class="fa fa-home"></i><span>Home</span></a>
        <a href="#footer" onclick=contato()><i class="fa fa-envelope"></i><span>Contato</span></a>
        <a href="#conquistas" onclick=conquistas()><i class="fa fa-heart"></i><span>Conquistas</span></a>
        <?php if($faceL==null){
            echo "erro";
            }elseif (gettype($faceL) == 'string'){
            echo "<a href='".$faceL."'><i class='fa fa-facebook'></i><span>Login</span></a>";
            }else {
            echo "<a href=''> <i><img id='picture' src='".$faceL->picture."'> </i><span>".$faceL->nome."</span></a>";
            echo "<a href='logout.php'><i class='fa fa-signout'></i><span> Sair </span></a>";
            }
            ?>
    </nav>
    </div>

    <div class="banner">
        <header>
        <a href="#" class="logo"> Luana</a>
    </header>
    <img src="images/8.jpg">
    <div class="content">
        <h2> Portfolio</h2>
        <p>Bem vindo ao meu portfólio, aqui você encontrará alguns projetos já criados por mim com uma descrição e o link para você acessar o projeto =). Se interessar e quiser um orçamento é só entrar em contato. </p>
    </div>
    </div>
    <h2 class="some" id="projects"> Projetos </h2>
    <div class="container">
        <div class="card">
            <div class="imgBox">
                <img src="images/4.jpg" width="100%" height="100%">
            </div>
            <div class="details">
                <h2>Gatito</h2>
                <p> O projeto gatito foi uma api baseada na thecatapi,
                    onde o usuário coloca o nome da raça de um gato 
                    e é verificado sua existencia. <br>
                    Link no github: <a href="https://github.com/LuaFly/api_gato"  target="_blank"> Link </a>
                </p>
            </div>
        </div>

        <div class="card">
            <div class="imgBox">
                <img src="images/5.png" width="100%" height="100%">
            </div>
            <div class="details">
                <h2>Conversor de moeda</h2>
                <p> Conversor de moeda feito em flutter, com a api hgbrasil, ele pega 
                    o valor atual da moeda escolhida e converte para real. <br>
                    Link no github: <a href="https://github.com/LuaFly/coin"  target="_blank"> Link </a>
                </p>
            </div>
        </div>

        <div class="card">
            <div class="imgBox">
                <img src="images/6.jpg" width="100%" height="100%">
            </div>
            <div class="details">
                <h2>Jogo da Velha.</h2>
                <p> Um jogo da velha baseado no design do início do século, com gifs, 
                    cores, e um botão cinza, tudo que se tinha no inicio dos anos 2000. <br>
                    Link para jogar: <a href="https://luafly.github.io/"  target="_blank"> Link </a> <br>
                    Link do código: <a href="https://github.com/LuaFly/velha"  target="_blank"> Link </a>
                </p>
            </div>
        </div>

        <div class="card">
            <div class="imgBox">
                <img src="images/7.jpg" width="100%" height="100%">
            </div>
            <div class="details">
                <h2>Lorem ipsum, dolor.</h2>
                <p> Lorem ipsum dolor sit amet 
                    consectetur adipisicing elit. 
                    Earum nihil obcaecati laborum a sint 
                    recusandae tempore exercitationem! 
                    Error distinctio tenetur labore aut cum? 
                    Non itaque expedita nostrum et fuga optio.
                </p>
            </div>
        </div>
    </div>
    
    <section class="about" id="about">
        <div class="contentBx">
            <h2 class="heading"> Sobre mim</h2>
            <p class="text"> Meu nome é Luana, tenho 21 anos, residente na cidade de Franca-SP, cursando o ultimo ano de análises e desenvolvimento de sistemas
                <br> <br> Fiz esse portfólio para ter mais espaço no mercado, assim como colocar os projetos que já fiz, ou que já estive envolvidas para as empresas e pessoas conhecerem um pouco mais do meu trabalho. 
                <br> <br> Esse é apenas o MVP do meu portfólio, logo terá novas melhorias, não só pra mim, mas para pessoas que gostarem do estilo e quiserem usar um portfólio similar. 
            </p>
        </div>
        <div class="imgBx"></div>
    </section>

    <h2 class="some" id="conquistas">Other products </h2>
    <div class="container">
        <div class="box">
            <div class="imgC">
                <img src="images/9.jpg">
            </div>
            <div class="ani">
                <h3> Maratona de programação</h3>
                <p> Em 2019 eu e minha equipe ficamos em primeiro lugar em uma maratona de programação na fatec franca </p>
            </div>
        </div>

        <div class="box">
            <div class="imgC">
                <img src="images/10.jpg">
            </div>
            <div class="ani">
                <h3> Title</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis doloremque, aliquam ducimus temporibus placeat eligendi. Sit maiores, sint laboriosam ipsam quos neque accusantium dolorem doloribus, inventore aliquid ex iusto impedit! </p>
            </div>
        </div>

        <div class="box">
            <div class="imgC">
                <img src="images/11.jpg">
            </div>
            <div class="ani">
                <h3> Title</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis doloremque, aliquam ducimus temporibus placeat eligendi. Sit maiores, sint laboriosam ipsam quos neque accusantium dolorem doloribus, inventore aliquid ex iusto impedit! </p>
            </div>
        </div>
    </div>

    <section class="services">
        <h2 class="heading"> Our services</h2>
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam dolores illo quia commodi consequuntur incidunt aliquid et provident repellendus dolorum, molestias quidem nisi. Quis rerum magnam similique magni eius hic.</p>
        <div class="conta">
            <div class="serviceBx">
                <div>
                    <img src="images/icon1.png">
                    <h2> Design</h2>
                </div>
            </div>
            <div class="serviceBx">
                <div>
                    <img src="images/icon2.png">
                    <h2> Development</h2>
                </div>
            </div>

            <div class="serviceBx">
                <div>
                    <img src="images/icon3.png">
                    <h2> </h2>
                </div>
            </div>
        </div>
        </section>
       
	<footer class="footer" id="footer">
		<div class="footer_content">
			<div class="containerfooter">
				<div class="row">
				</div>
				<div class="row footer_row">
					<div class="col-lg-4 footer_col">
						<div class="footer_item text-center">
							<div class="footer_icon d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
								<div><img src="images/phone.png" alt=""></div>
							</div>
							<div class="footer_title">Contato</div>
							<div class="footer_list">
								<ul>
									<li>+55 16 99450-1051</li>
									<!-- <li>+224 667 889</li> -->
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-4 footer_col">
						<div class="footer_item text-center">
							<div class="footer_icon d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
								<div><img src="images/mail.png" alt=""></div>
							</div>
							<div class="footer_title">e-mail</div>
							<div class="footer_list">
								<ul>
									<li>luana_ferreira98@outlook.com</li>
									<li>luana@luanadev.com</li> 
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-4 footer_col">
						<div class="footer_item text-center">
							<div class="footer_icon d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
								<div><img src="images/contact.png" alt=""></div>
							</div>
							<div class="footer_title">location</div>
							<div class="footer_list">
								<ul>
									<li>Brasil</li>
									<li>Franca-SP</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer_bar d-flex flex-row align-items-center justify-content-center">
			<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This footer is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
		</div>
    </footer>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="assets/slicknav/jquery.slicknav.min.js"></script>

<script>

    $(function(){

        var menu = $('.menu-navigation-dark');

        menu.slicknav();

        // Mark the clicked item as selected

        menu.on('click', 'a', function(){
            var a = $(this);

            a.siblings().removeClass('selected');
            a.addClass('selected');
        });
    });
function about(){
    var element = document.getElementById("about");

    element.scrollIntoView();
}
  function project(){
    var element = document.getElementById("projects");

element.scrollIntoView();

  }
  function conquistas(){
    var element = document.getElementById("conquistas");

element.scrollIntoView();

  }

  function contato(){
    var element = document.getElementById("footer");

element.scrollIntoView();

  }

</script>
</body>
</html>
