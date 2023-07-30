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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="//code.tidio.co/kczpks5iafw7sips7x6vfgjynam1qzs0.js" async></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="website icon" href="img/traviesos.jpeg">
  <link rel="stylesheet" href="css/styles.css"> 
  <title>Traviesos</title>
</head>
<body>
  <header class="bg-teal-400 py-3">
    <div class="container mx-auto flex justify-between items-center">
      <nav class="container-fluid navbar navbar-expand-sm justify-content-between">
        <ul class="flex space-x-4 font-bold fs-5">
          <li><a href="#inicio" class="text-white">Inicio</a></li>
          <li><a href="#productos" class="text-white">Productos</a></li>
          <li><a href="#alimentos" class="text-white">Alimentos</a></li>
          <li><a href="#comentarios" class="text-white">Comentarios</a></li>
        </ul>
        <div class="d-flex">
          <input type="text" class="flex-grow px-4 py-2 rounded-l-md border border-gray-300 focus:outline-none focus:border-indigo-500" placeholder="Buscar productos...">
          <button class="bg-teal-600 hover:bg-teal-500 text-white px-4 py-2 rounded-r-md"><i class="bi bi-search"></i></button>
          <a href="#" class="px-2 fs-4"><i class="bi bi-cart-check-fill"></i></a>
        </div>
      </nav>
    </div>
  </header>
  
  <section id="inicio">
    <!-- Código HTML para el carousel -->
  </section>
  
  <section id="productos" class="py-8 bg-teal-100">
    <!-- Código HTML para la sección de productos -->
  </section>
    
  <section class="py-8" id="alimentos">
    <div class="container mx-auto">
      <center><h2 class="text-3xl font-bold mb-4">Alimentos</h2></center> 
      <div class="grid grid-cols-1 sm:grid-cols-2">
        <!-- Código HTML para mostrar los alimentos -->
        <div class="grid-item bg-white shadow-md rounded-lg p-4">
          <h3 class="text-xl font-bold mb-2">Alimento para Perros</h3>
          <p>Delicioso alimento balanceado para perros. Precio: $10</p>
          <button class="bg-teal-600 hover:bg-teal-500 text-white px-4 py-2 rounded-md mt-4" onclick="addToCart('Alimento para Perros', 10)">Agregar al carrito</button>
        </div>
        <div class="grid-item bg-white shadow-md rounded-lg p-4">
          <h3 class="text-xl font-bold mb-2">Alimento para Gatos</h3>
          <p>Delicioso alimento balanceado para gatos. Precio: $8</p>
          <button class="bg-teal-600 hover:bg-teal-500 text-white px-4 py-2 rounded-md mt-4" onclick="addToCart('Alimento para Gatos', 8)">Agregar al carrito</button>
        </div>
      </div>
    </div>
  </section>
  <script>
    const cartButton = document.querySelector(".bi-cart-check-fill");
    const cartItems = [];

    cartButton.addEventListener("click", () => {
      localStorage.setItem("cartItems", JSON.stringify(cartItems));
      window.location.href = "carrito.html";
    });

    function addToCart(product, price) {
      cartItems.push({ product, price });
      alert("Producto agregado al carrito");
    }
  </script>
</body>
</html>
