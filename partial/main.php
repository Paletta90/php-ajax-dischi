<!-- Main -->
<main class="overflow-auto">

    <div class="container py-5">

        <!-- Chiamata tramite solo php -->
        <h1 class="text-white">Dischi utilizzando Php</h1>
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

        <!-- Chiamata tramite axios -->
        <h1 class="text-white mt-5">Dischi utilizzando axios e vue</h1>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5">

            <div v-for="(elem, index) in disks" class="col d-flex text-center g-3">

                <div class="bg-card p-3">

                    <img :src="elem.poster" alt="" class="img-fluid mb-3">
                    <h5 class="text-white fw-bold mb-3">{{elem.title}}</h5>
                    <h6 class="text-secondary">{{elem.author}}</h6>
                    <h6 class="text-secondary">{{elem.year}}</h6>

                </div>

            </div>

        </div>


    </div>


</main>