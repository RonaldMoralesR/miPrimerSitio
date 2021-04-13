<!-- Estrtuctura Del DOM (Document object Model)-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MI PRIMERA PAGINA</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <!--Aqui se ve todo por el usuario-->
    <!-- canecera del sitio y menu de navegacion  -->
    <header >
     <h1>CABECERA</h1>
     <!-- llama a sitio menu.php -->
     <?php include('partials/menu.php'); ?>
    </header>
    <!-- cuerpo central de la pagiona web  -->
    <section>
        <h1> Titulo de Mi Primera pagina</h1>
        <h4>Este es un subtitulo</h4>
        contenido principal 
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae quasi voluptatum quia ipsa aut iste sequi possimus soluta maxime temporibus, accusantium, ipsam provident laboriosam ab amet reprehenderit sapiente ea! Pariatur.</p>
        <a href="#">Ver mas</a>
    </section>
    <!-- pie de pagina de sitio -->
    <footer>
     <p>Politica de privacidad</p>
     pie de pagina
    </footer>
    

</body>
</html>