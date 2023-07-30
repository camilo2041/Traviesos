<?php include("includes/header.php") ?>
    <?php
    $query = "SELECT COUNT(*) total FROM articulos WHERE idCategoria = 1";
    $result = mysqli_query($conn, $query); 
    $row = mysqli_fetch_assoc($result); 
    ?>
        <div class="flex mt-5 mb-4 justify-center font-bold text-lg sm:font-normal sm:text-3xl">
        <h1>Tarjetas Gráficas - <?php echo $row['total']?> Resultados <i class="ms-1 bi bi-search text-sm sm:text-xl"></i></h1>
        </div> 
    <div class="my-4 grid grid-cols-1 sm:grid-cols-3  xl:grid-cols-5 text-center mx-16 gap-3">
        <?php
            $query = "CALL PA_consulta_articulos_1(ZZ   );";
            $result = mysqli_query($conn, $query); 

            while ($row = mysqli_fetch_array($result)) { ?>
            <div class="card">
                <img src="<?php echo $row['Imagen']?>" class="card-img-top mt-3" alt="">
                <div class="card-body">
                    <p class="card-title text-lg font-medium border-t-2 border-slate-800 mb-2"><?php echo $row['Nombre']?> </p>
                    <p class="card-text font-normal mb-3">$<?php echo $row['Precio']?> COP</p>
                    <a href="tg.php?id=<?php echo $row['id']?>" class="px-4 text-white rounded-md font-medium">Ver Especifíc.</a>
                </div>
            </div>
        <?php }?>
    </div>
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
</body>
</html> 