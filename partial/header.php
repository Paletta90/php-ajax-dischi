<header>
    <div class="d-flex justify-content-between align-items-center h-100 px-3">

        <!-- Logo sporitfy -->
        <img src="./assets/loghi/spotifyLogo.png" alt="" width="50px">

        <!-- Select -->
        <div class="d-flex">
            <select class="form-select form-select-sm ms-auto me-3" aria-label=".form-select-lg example" v-model="genre"
                @change="filterGenre">

                <option :value="null" selected>Choose the genre</option>
                <option v-for="(item, index) in generi" :key="index" :value="item">
                    {{item}}
                </option>

            </select>

        </div>

    </div>
</header>