<?php 

    include __DIR__ . '/database.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Link file.css -->
    <link rel="stylesheet" href="./assets/style/style.css">

    <title>Ajax-Dischi</title>
</head>

<body>

    <!-- Header -->
    <header>
        <div class="d-flex justify-content-between align-items-center h-100 px-3">

            <img src="./assets/loghi/spotifyLogo.png" alt="" width="50px">

            <!-- <div class="d-flex">
                <select class="form-select form-select-sm ms-auto me-3" aria-label=".form-select-lg example"
                    v-model="genre" @change=" $emit( 'functionSearchGenre', genre )">

                    <option :value="null" selected>Choose the genre</option>
                    <option v-for="(item, index) in generi" :key="index" :value="item">
                        {{item}}
                    </option>

                </select>

                <select class="form-select form-select-sm ms-auto" aria-label=".form-select-lg example" v-model="artist"
                    @change=" $emit( 'functionSearchArtist', artist ) ">

                    <option :value="null" selected>Choose the artist</option>
                    <option v-for="(item, index) in artisti" :key="index" :value="item">
                        {{item}}
                    </option>

                </select>
            </div> -->

        </div>
    </header>

    <!-- Main -->
    <main class="overflow-auto">

        <div class="container py-5">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5">

                <?php foreach( $database as $disk ) { ?>
                <div class="col d-flex text-center g-3">

                    <div class="bg-card p-2">

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




    <!-- Vue.js 2 -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <!-- Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>