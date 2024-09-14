<?php
$productos = [
    ['img' => 'Extencion/img/card01.JPG', 'titulo' => 'Producto 1', 'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'],
    ['img' => 'Extencion/img/card02.JPG', 'titulo' => 'Producto 2', 'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'],
    ['img' => 'Extencion/img/card03.JPG', 'titulo' => 'Producto 3', 'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'],
    ['img' => 'Extencion/img/card04.JPG', 'titulo' => 'Producto 4', 'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'],
    ['img' => 'Extencion/img/card05.JPG', 'titulo' => 'Producto 5', 'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'],
    ['img' => 'Extencion/img/card06.JPG', 'titulo' => 'Producto 6', 'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.']
];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Extencion/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>  
        .banner {
            background: url('Extencion/img/slide03.jpg') no-repeat center center;
            background-size: cover;
            height: 700px;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        .footer-section {
            padding: 20px;
            background-color: #f8f9fa;
        }
        .product-card {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 0.25rem;
            overflow: hidden;
            background-color: #fff;
        }
        .product-card img {
            max-width: 100%;
            height: auto;
            max-height: 150px; 
        }
        .product-card .card-body {
            flex: 1;
            padding: 15px;
        }
        .card-title {
            font-size: 1.25rem;
        }
        .card-text {
            font-size: 1rem;
        }
        .navbar-nav .nav-item {
            margin-left: 10px;
        }
        .social-icons {
            display: flex;
            align-items: center;
            margin-left: auto;
        }
        .social-icons a {
            color: #333;
            font-size: 18px;
            margin-left: 10px;
            text-decoration: none;
        }
        .social-icons a:hover {
            color: #007bff;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="Extencion/img/logo.png" alt="Logo" style="width: 35px;"> Tienda Mas
        </a>
        <div class="social-icons">
            <a href="https://facebook.com" target="_blank" title="Facebook" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
            <a href="https://wa.me/123456789" target="_blank" title="WhatsApp" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
        </div>
    </nav>

    <section class="banner mt-3">
        <h1>Bienvenido a Mi Tienda</h1>
    </section>

    <section class="border mt-1" style="height: 150px;">
        <h1 class="text-center mt-4">Nuestros Productos</h1>
    </section>

    <section>
            <div class="row">
                <?php foreach ($productos as $producto) { ?>
                        <div class="product-card">
                            <img src="<?php echo $producto['img'] ?>" alt="Imagen de <?php echo $producto['titulo']; ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $producto['titulo'] ?></h5>
                                <p class="card-text"><?php echo $producto['descripcion'] ?></p>
                                
                            </div>
                        </div>
                    
                <?php } ?>
            </div>
       
    </section>

    <script src="Extenciones/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
