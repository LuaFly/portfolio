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
        <a href="#"><i class="fa fa-home"></i><span>Home</span></a>
        <a href="#"><i class="fa fa-code"></i><span>Project</span></a>
        <a href="#" class="selected"><i class="fa fa-comment"></i><span>About me</span></a>
        <a href="#"><i class="fa fa-envelope"></i><span>Contact</span></a>
        <a href="#"><i class="fa fa-heart"></i><span>Library</span></a>
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
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem praesentium ratione repellendus alias atque temporibus maiores consectetur voluptatum neque deleniti, adipisci, aliquid qui doloremque sed voluptatibus cupiditate animi quod quam! </p>
    </div>
    </div>
    <h2 class="some"> Some products </h2>
    <div class="container">
        <div class="card">
            <div class="imgBox">
                <img src="images/4.jpg" width="100%" height="100%">
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

        <div class="card">
            <div class="imgBox">
                <img src="images/5.jpg" width="100%" height="100%">
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

        <div class="card">
            <div class="imgBox">
                <img src="images/6.jpeg" width="100%" height="100%">
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
    
    <section class="about">
        <div class="contentBx">
            <h2 class="heading"> About me</h2>
            <p class="text"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae dolorem necessitatibus praesentium exercitationem repellat perferendis ipsam porro nihil, ut aspernatur ullam cum obcaecati modi saepe alias aliquam dolor quod odit!
                <br> <br> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo accusamus veniam, unde fugiat quis velit sequi, amet necessitatibus sapiente obcaecati optio, nisi quia soluta ex. Quae necessitatibus inventore accusantium ut!
            </p>
        </div>
        <div class="imgBx"></div>
    </section>

    <h2 class="some">Other products </h2>
    <div class="container">
        <div class="box">
            <div class="imgC">
                <img src="images/9.jpg">
            </div>
            <div class="ani">
                <h3> Title</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis doloremque, aliquam ducimus temporibus placeat eligendi. Sit maiores, sint laboriosam ipsam quos neque accusantium dolorem doloribus, inventore aliquid ex iusto impedit! </p>
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

</script>
</body>
</html>
