<?php include("php/bd.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
crossorigin="anonymous"></script>
<script src="//code.tidio.co/kczpks5iafw7sips7x6vfgjynam1qzs0.js" async></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<link href="../dist/output.css" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
<link rel="website icon" href="../img/traviesos.jpeg">
<title>Traviesos</title>
</head>
<body class="flex flex-col min-h-screen">
  <header>
  <nav class="bg-orange-200 container-fluid">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="flex items-center justify-between h-16">
            <div class="flex items-center">
              <a href="../src/index.php#inicio"><img class="h-8 w-8" src="../img/traviesos.jpeg" alt="Logo"></a>
              <div class="hidden md:block">
                <ul class="flex space-x-4 font-bold fs-5 px-4 sm:">
                  <li><a href="../src/index.php#productos" class="text-gray-600 hover:bg-orange-300 hover:text-gray-600 px-3 py-2 rounded-md text-sm font-medium">Accesorios</a></li>
                  <li><a href="../src/index.php#alimentos" class="text-gray-600 hover:bg-orange-300 hover:text-gray-600 px-3 py-2 rounded-md text-sm font-medium">Alimentos</a></li>
                  <li><a href="../src/index.php#comentarios" class="text-gray-600 hover:bg-orange-300 hover:text-gray-600 px-3 py-2 rounded-md text-sm font-medium">Comentarios</a></li>
                </ul>
              </div>
            </div>
            <div class="flex items-center space-x-2">
              <input type="text" class="flex-grow px-6 py-2 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-300 focus:border-orange-300" placeholder="¿Qué deseas buscar?">
              <span id="icon-search" class="px-3 py-2 text-white bg-orange-400 rounded-md hover:bg-orange-300 cursor-pointer"><i class="bi bi-search"></i></span>
              <a href="carrito.html" class="text-gray-600 hover:text-gray-800 px-2 fs-5"><i class="bi bi-cart-check-fill"></i></a>
            </div>
          </div>
        </div>
    </nav>
  </header>
  </body>
  </html>