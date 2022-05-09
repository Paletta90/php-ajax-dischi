var app = new Vue({
    el: '#app',

    data: {
        disks: [],
        generi: ['Rock', 'Pop', 'Jazz', 'Metal'],
        genre: ''
    },
    methods: {
        filterGenre: function () {
            
            if(this.genre == null){
                this.disks = [];

                axios.get( 'http://localhost/php-ajax-dischi/Api/disks.php' ) 
                    .then( (res) => {
                        
                        this.disks = res.data;

                    })

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
                this.disks = res.data
            })
    },

})