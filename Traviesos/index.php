<?php include("php/bd.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="website icon" href="img/home.png">
    <title>Traviesos</title>
</head>
<body class="flex flex-col min-h-screen">
    <div class="img shadow-xl">
    <nav class="py-6 px-6 bg-transparent">
        <div class="row">
            <div class="col-lg-2 d-flex align-items-center">
                <div><a href="#inicio"><img class="h-10 w-12" src="img/home.png" alt="Logo"></a></div>
            </div>
            <div class="col">
                <input type="text" class="bg-transparent border-2 border-gray-500 px-56 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-300" placeholder="¿Qué deseas buscar?">
            </div>
            <div class="col-md-auto">
                <a href="carrito.html" class="text-gray-600 hover:text-gray-800 px-2 fs-5"><i class="bi bi-basket"></i></a>
                <a href="perfil.html" class="text-gray-600 hover:text-gray-800 px-2 fs-5"><i class="bi bi-person-fill"></i></a>
            </div>
        </div>
    </nav> 
    <div class="my-32 text-center space-y-4">
        <h1 class="text-gray-500 py-6 fs-1">Donde la diversión y el sabor<br>se encuentran con tus mascotas </h1>
        <a class="px-4 py-2 border-1 border-gray-500 rounded-md hover:bg-gray-500 hover:text-white" href="#productos">Ver Productos...</a>
    </div>
</div>
  <main class="container my-2 text-justify mx-auto flex-grow">
    <section id="productos" class="py-8 rounded-md">
    <div class="container ">
      <h2 class="text-3xl font-bold mb-4 text-center">Categorías de Productos</h2> 
      <div class="grid-container ">
        <div class="grid-inner grid grid-cols-1 sm:grid-cols-2 flex-col gap-x-5 gap-y-4 sm:gap-y-2">
          <a href="productos/premios.php" class="grid-item md:flex bg-white shadow-md rounded-lg p-4">
            <div class="flex flex-1 items-center space-x-5">
              <img class="h-20 object-scale-down" src="productos/img/premios/WhatsApp Image 2023-07-12 at 7.05.53 PM.jpeg" alt="" >
              <div class="flex flex-col">
                <h3 class="text-xl font-bold">Premios</h3>
                <p>Snacks y golosinas para perros y gatos.</p>
              </div>
            </div>
          </a>
          <a href="productos/juguetes.php" class="grid-item md:flex bg-white shadow-md rounded-lg p-4">
            <div class="flex flex-1 items-center space-x-5">
              <img class="h-20 object-scale-down" src="productos/img/accesorios/juguete.jpeg" alt="" >
              <div class="flex flex-col">
                <h3 class="text-xl font-bold">Juguetes</h3>
                <p>Encuentra una gran variedad de accesorios y juguetes para tus gatitos.</p>
              </div>
            </div>
          </a>
          <a href="productos/camas.php" class="grid-item md:flex bg-white shadow-md rounded-lg p-4">
            <div class="flex flex-1 items-center space-x-5">
              <img class="h-20 object-scale-down" src="productos/img/camas/WhatsApp Image 2023-07-04 at 5.42.23 PM.jpeg" alt="" >
              <div class="flex flex-col">
                <h3 class="text-xl font-bold">Camas y muebles</h3>
                <p>Encuentra una gran variedad de accesorios y juguetes para tus cachorros.</p>
              </div>
            </div>
          </a>
          <a href="productos/hiegiene.php" class="grid-item md:flex bg-white shadow-md rounded-lg p-4">
            <div class="flex flex-1 items-center space-x-5">
              <img class="h-20 object-scale-down" src="productos/img/aseo/aseo.jpeg" alt="" >
              <div class="flex flex-col">
                <h3 class="text-xl font-bold">Hiegiene y aseo</h3>
                <p>Encuentra una gran variedad de accesorios y juguetes para tus gatitos.</p>
              </div>
            </div>
          </a>
          <a href="productos/ropayaccesorios.php" class="grid-item md:flex bg-white shadow-md rounded-lg p-4">
            <div class="flex flex-1 items-center space-x-5">
              <img class="h-20 object-scale-down" src="productos/img/ropa/WhatsApp Image 2023-07-12 at 6.47.33 PM.jpeg" alt="" >
              <div class="flex flex-col">
                <h3 class="text-xl font-bold">Ropa y accesorios</h3>
                <p>Encuentra una gran variedad de accesorios y juguetes para tus gatitos.</p>
              </div>
            </div>
          </a>
          <a href="productos/entretenimiento.php" class="grid-item md:flex bg-white shadow-md rounded-lg p-4">
            <div class="flex flex-1 items-center space-x-5">
              <img class="h-20 object-scale-down" src="productos/img/camas/ps.jpeg" alt="" >
              <div class="flex flex-col">
                <h3 class="text-xl font-bold">Entretenimiento</h3>
                <p>Encuentra una gran variedad de accesorios y juguetes para tus gatitos.</p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
    
  
  <section  class="py-8" id="alimentos">
    <div class="container mx-auto">
      <h2 class="text-3xl font-bold mb-4 text-center">Alimentos</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
     
        <?php
            $query = "CALL PA_marcas();";
            $result = mysqli_query($conn, $query); 

            while ($row = mysqli_fetch_array($result)) { ?>
            <div class="bg-white shadow-md rounded-lg p-4">
                <img src="../comida/imgs/comida.jpeg" class="w-full mb-4" alt="">
                <h3 class="text-xl font-bold"><?php echo $row['marca']?></h3>
                <div class="btn-group d-flex items-center" role="group" aria-label="Basic example">
                    <a class="btn bg-teal-600 hover:bg-teal-500 text-white" data-bs-toggle="modal" data-bs-target="#modalPerros">Bebé</a>
                    <a class="btn bg-teal-600 hover:bg-teal-500 text-white" data-bs-toggle="modal" data-bs-target="#modalPerros">Adulto</a>
                </div>
            </div>
            <?php }?>
        </div>
         <div class="modal fade" id="modalPerros" tabindex="-1" aria-labelledby="modalPerrosLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title font-bold fs-5" id="modalPerrosLabel">Página de compra</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
          </div>  
          <div class="modal-body ">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
              <div class="flex items-center justify-center">
                <img src="../comida/imgs/comida.jpeg" alt="Alimento para perros" class="w-full max-w-sm">
              </div>
              <div class="flex flex-col justify-center">
                <h2 class="text-3xl font-bold mb-4 ">Alimento para perros</h2>
                <p class="text-gray-700 mb-4">Descripción del alimento para perros.</p>
                <div class="flex items-center mb-4">
                  <label for="cantidad" class="text-gray-700 font-bold mr-2">Cantidad:</label>
                  <input type="number" id="cantidad" class="w-24 py-2 px-3 border border-gray-300 focus:outline-none focus:border-amber-500" min="1" value="1">
                </div>
                <button class="bg-teal-600 hover:bg-teal-500 text-white py-2 px-4 rounded-md">Añadir al carrito</button>
              </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <!-- separacion de modales -->
    <div class="modal fade" id="modalGatos" tabindex="-1" aria-labelledby="modalGatosLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title font-bold fs-5" id="modalGatosLabel">Página de compra</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
          </div>
          <div class="modal-body ">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
              <div class="flex items-center justify-center">
                <img src="../comida/imgs/alimento.jpeg" alt="Alimento para perros" class="w-full max-w-sm">
              </div>
              <div class="flex flex-col justify-center">
                <h2 class="text-3xl font-bold mb-4 ">Alimento para perros</h2>
                <p class="text-gray-700 mb-4">Descripción del alimento para perros.</p>
                <div class="flex items-center mb-4">
                  <label for="cantidad" class="text-gray-700 font-bold mr-2">Cantidad:</label>
                  <input type="number" id="cantidad" class="w-24 py-2 px-3 border border-gray-300 focus:outline-none focus:border-amber-500" min="1" value="1">
                </div>
                <button class="bg-teal-600 hover:bg-teal-500 text-white py-2 px-4 rounded-md">Añadir al carrito</button>
              </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <section id="comentarios" class="py-4 bg-gray-100" >
    <div class="flex items-center">
      <div class="hidden sm:block">
        <img src="img/perro.png" alt="Descripción de la imagen" class="w-75 ms-24">
      </div>
      <div class="px-6 py-4 w-full ">
        <h2 class="text-2xl font-bold mb-2 mt-20">Dejanos tu opinion</h2>
        <form class="me-32 text-center">
            <div class="mb-6">
            <input type="text" placeholder="nombre" id="nombre" name="nombre" required class="px-4 py-2 rounded">
            <input type="email" placeholder="Email" id="email" name="email" required class="px-4 py-2 rounded mt-10">
          </div>
          <div class="mb-6">
            <select class="w-full px-4 py-2 rounded text-gray-500" name="PQRs" id="PQRs">
              <option>Escoge una opcion</option>
              <option>Petición</option>
              <option>Queja</option>
              <option>Reclamo</option>
              <option>Sugerencia</option>
            </select>
          </div>
          <div class="mb-7">
            <textarea id="mensaje" placeholder="Mensaje" name="mensaje" required class="w-full px-4 py-2 rounded"></textarea>
          </div>
          <div class="mb-7">
            <input class="rounded" type="checkbox" name="aceptar" required> Acepto los <a class="text-primary" type="button" data-bs-toggle="modal" data-bs-target="#modalterminos">términos y condiciones.</a>
          </div>
          <button type="submit" class="bg-teal-600 hover:bg-teal-500 text-white py-2 px-4 rounded-md">Enviar</button>
        </form>
      </div>
    </div>
    </section>


  </main>
  
 


<footer class="flex flex-col justify-center">
    <iframe class="mt-4" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1988.2989721749705!2d-74.05879632918939!3d4.665551278628364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sunilago!5e0!3m2!1ses!2sco!4v1677883140666!5m2!1ses!2sco" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      
      <div class="p-6 border-t border-black mt-6 mx-10">
      <p class="text-center">Tienda de comida y accesorios para mascotas</p>
      <p class="text-center">&copy; Traviesos - 2023</p>
      <div class="social me-3 text-center drop-shadow-lg">
      <a class="mx-auto" target="_blank" href=""> <i class="bi bi-facebook"></i></i> </a>
      <a class="mx-auto" target="_blank" href=""><i class="bi bi-twitter"></i> </a>
      <a class="mx-auto" target="_blank" href=""> <i  class="bi bi-instagram"></i></a>
    </div>
  </div>  
  </footer>
    <script src="js/script.js"></script>
</body>
</html>