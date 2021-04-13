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
     <!-- navegador principal del sitio  -->
     <?php include('partials/menu.php'); ?> 
     </header>
    <!-- cuerpo central de la pagiona web  -->
    <section>
        <h1> Nuestra empresa </h1>
       <!-- Lado derecho de la pagina -->
       <article class="derecho">
          <img src="img/img_empresa.jpg" alt="imagen empresa" style="width: 96%; margin-rigth: 4%">
       </article>
       <!-- Lado izquierdo de la pagina -->
       <article class="izquierdo">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et amet nesciunt doloribus aperiam labore obcaecati quidem, nulla iste minima reprehenderit sequi, porro harum praesentium. Fugit praesentium eveniet id deserunt cupiditate!</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed corrupti voluptatibus dicta minima. Dolorem eligendi, tempore provident quasi eum nisi, quae error qui atque sint id possimus modi, ea ut!</p>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum eligendi quos ratione debitis numquam explicabo illum dolores enim iste, est neque animi quisquam laborum commodi tenetur. Necessitatibus tenetur vitae odit?</p>
       </article>
    </section>
    <!-- pie de pagina de sitio -->
    <footer>
        
    </footer>
</body>
</html>