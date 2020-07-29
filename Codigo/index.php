<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css" media="screen, print">
     @font-face {font-family: Lobster-Regular; src: url(font/Lobster-Regular.ttf);}
    </style>
</head>
<body>
<body>
<div class="container-fluid">
        
    <?php 
    include_once('view/menu.php');
    
        ?>
    <div class="row justify-content-center">
        <div class="col-12">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="img/2.jpg" class="img-fluid w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="img/3.jpg" class="img-fluid w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="img/4.jpg" class="img-fluid w-100" alt="...">
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
        </div>
        
   <div class="col-12"> <h1 class="tipografia_1 text-danger">Que deseas Hacer?</h1></div>
        <div class="col-4">
        <form action="motor.php" action="get">
            <input type="hidden" name="codFlujo" value="F1">
            <input type="hidden" name="codProceso" value="P1">
            <button type="submit" class="btn btn-block btn-secondary">Reservar</button>
        </form>
        </div>
        <div class="col-4">
        <form action="motor.php" action="get">
            <input type="hidden" name="codFlujo" value="F3">
            <input type="hidden" name="codProceso" value="P1">
            <button type="submit" class="btn btn-block btn-info">Hospedar</button>
        </form>
        </div>
        
        
    </div>
    <?php 
                include('view/footer.php')
            ?>       
        
</div>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
</body>
</html>