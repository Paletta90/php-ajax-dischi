var app = new Vue({
    el: '#app',

    data: {
        disks: [],
        generi: [],
        genre: ''
    },
    methods: {
        filterGenre: function() {
            
            // Se ritorno sulla option 'Choose the genre' ricarico l'array
            if(this.genre == null){
                this.disks = [];

                axios.get( 'http://localhost/php-ajax-dischi/Api/disks.php' ) 
                    .then( (res) => {
                        
                        this.disks = res.data;

                    })

            // Filtro l'array in base al genere selezionato
            }else{
                this.disks = [];
                axios.get( 'http://localhost/php-ajax-dischi/Api/disks.php' ) 
                    .then( (res) => {
                        
                        this.disks = res.data.filter( (elem) => {
                            return elem.genre == this.genre;
                        });

                    })
                
            }

        },

    },
    created() {
        axios.get('http://localhost/php-ajax-dischi/Api/disks.php')
            .then((res) => {

                // Riempio l'array con una chiamata Api
                this.disks = res.data;
                
                // Riempio un array con i vari generi
                this.disks.forEach( (elem) => {
                    
                    // Se non include già il genere pusho
                    if( !this.generi.includes( elem.genre ) ){
                        this.generi.push(elem.genre)
                    }

                });
                // console.log(this.disks);

            })
    },

})