<?php



$conn = new PDO(
    "mysql:host=localhost;port=3306;dbname=ecommerce", "root", ""
);

$consulta =  $conn->prepare("select * from product");
$consulta->execute();
$linha =$consulta->fetchAll(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="./js/index.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                </div>
                <nav>
                    <ul id='MenuItens'>
                        <li><a href="">Inicio</a></li>
                        <li><a href="">Produtos</a></li>
                        <li><a href="">SObre</a></li>
                        <li><a href="">Contato</a></li>
                        <li><a href="">Conta</a></li>
                    </ul>
                </nav>
                    <img src="./images/cart.png" width="30px" heigth="30px" />
                    <img src="./images/menu.png" onClick="menuToogle()" class="menu-icon" width="30px" heigth="30px" />
            </div>

            <div class="row">
                <div class="col-2">
                    <h1>Vista moda fashion<br /> Um novo estilo</h1>
                    <p>In nulla cupidatat est id eu amet hauwklaih ahjs8uem o <br />incididunt veniam dolor or ad
                        tempor.</p>
                    <a href="" class="btn">Explore Agora &#10137</a>
                </div>
                <div class="col-2">
                    <img src="./images/image1.png" alt="">

                </div>
            </div>
        </div>
    </div>
            <!---- Categorias ------>

    <div class="categories">
        <div class="small-container">
        <div class="row">
            <div class="col-3">
                <img src="./images/category-1.jpg" alt="" srcset="">
            </div>
            <div class="col-3">
                <img src="./images/category-2.jpg" alt="" srcset="">
            </div>
            <div class="col-3">
                <img src="./images/category-3.jpg" alt="" srcset="">
            </div>
           
        </div>
     </div>
    </div>

    <!-------- Produtos ------>
    <div class="small-container">
        <h2 class="title">Produtos</h2>
        <div class="row">
            <?php
        foreach($linha as $listar){?>
    <div class="col-4">
                <img src="./images/product-1.jpg" alt="" srcset="">
                <h4><?php echo $listar->name ?></h4>
                <div class="rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>

                </div>
                <p>R$ 50.00</p>
            </div>
            
      <?php  }?>
            
            
        </div>
        <h2 class="title">Últimos Produtos</h2>
        <div class="row">
            <div class="col-4">
                <img src="./images/product-5.jpg" alt="" srcset="">
                <h4>Camisa Vermelha</h4>
                <div class="rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>

                </div>
                <p>R$ 50.00</p>
            </div>
            <div class="col-4">
                <img src="./images/product-6.jpg" alt="" srcset="">
                <h4>Camisa Vermelha</h4>
                <div class="rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>

                </div>
                <p>R$ 50.00</p>
            </div>
            <div class="col-4">
                <img src="./images/product-7.jpg" alt="" srcset="">
                <h4>Camisa Vermelha</h4>
                <div class="rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>

                </div>
                <p>R$ 50.00</p>
            </div>
            <div class="col-4">
                <img src="./images/product-8.jpg" alt="" srcset="">
                <h4>Camisa Vermelha</h4>
                <div class="rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>

                </div>
                <p>R$ 50.00</p>
            </div>
            <div class="col-4">
                <img src="./images/product-9.jpg" alt="" srcset="">
                <h4>Camisa Vermelha</h4>
                <div class="rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>

                </div>
                <p>R$ 50.00</p>
            </div>
            <div class="col-4">
                <img src="./images/product-10.jpg" alt="" srcset="">
                <h4>Camisa Vermelha</h4>
                <div class="rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>

                </div>
                <p>R$ 50.00</p>
            </div>
            <div class="col-4">
                <img src="./images/product-11.jpg" alt="" srcset="">
                <h4>Camisa Vermelha</h4>
                <div class="rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>

                </div>
                <p>R$ 50.00</p>
            </div>
            <div class="col-4">
                <img src="./images/product-12.jpg" alt="" srcset="">
                <h4>Camisa Vermelha</h4>
                <div class="rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>

                </div>
                <p>R$ 50.00</p>
            </div>
            
        </div>
    </div>

    <!-------- OFFER ---->
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="./images/exclusive.png" class="offer-img" alt="">
                </div>
                <div class="col-2">
                   <p>Excepteur laborum eu minim labore duis proident fugiat.</p>
                   <h1>Smart Watch</h1>
                   <small>Occaecat dolor magna enim culpa exercitation proident id anim culpa.</small>
                   <a href="" class="btn">Compre Agora </a>
                </div>
            </div>
        </div>
    </div>
    <!------Patriocinios------>
    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="./images/logo-godrej.png" alt="">
                </div>
                <div class="col-5">
                    <img src="./images/logo-coca-cola.png" alt="">
                </div>
                <div class="col-5">
                    <img src="./images/logo-oppo.png" alt="">
                </div>
                <div class="col-5">
                    <img src="./images/logo-paypal.png" alt="">
                </div>
                <div class="col-5">
                    <img src="./images/logo-philips.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!--footer------>

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download o app</h3>
                    <p>Download disponível para Android e IOS</p>
                </div>
                <div class="footer-col-2">
                    <p>Sunt excepteur .dfdfdfdfdfdfd  
                    fdsdsdsdsdsdsds </p>
                </div>
                <div class="footer-col-3">
                    <h3>Veniamen</h3>
                    <ul>
                        <li>Et proidente </li>
                        <li>Cueniam nostr</li>
                        <li>Cueniam nostr</li>
                        <li>Cueniam nostr</li>
        
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Segue</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twiter</li>
                        <li>Instagram</li>
                        <li>Github</li>
        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html>