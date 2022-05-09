<!-- Main -->
<main class="overflow-auto">

    <div class="container py-5">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5">

            <!-- Stampo tutti i dischi del databse -->
            <?php foreach( $database as $disk ) { ?>
            <div class="col d-flex text-center g-3">

                <div class="bg-card p-3">

                    <img src="<?php echo $disk['poster'] ?>" alt="" class="img-fluid mb-3">
                    <h5 class="text-white fw-bold mb-3"><?php echo $disk['title'] ?></h5>
                    <h6 class="text-secondary"><?php echo $disk['author'] ?></h6>
                    <h6 class="text-secondary"><?php echo $disk['year'] ?></h6>

                </div>

            </div>

            <?php }?>

        </div>

    </div>

</main>