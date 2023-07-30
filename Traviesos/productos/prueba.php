<?php include("includes/header.php") ?>
<?php
    $query = "SELECT COUNT(*) total FROM marcas WHERE catMarca= 1";
    $result = mysqli_query($conn, $query); 
    $row = mysqli_fetch_assoc($result); 
    ?>
    <div class="my-4 grid grid-cols-1 sm:grid-cols-3  xl:grid-cols-5 text-center mx-16 gap-3">
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
