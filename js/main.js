var app = new Vue({
    el: '#app',

    data:{
        disks: [],
        generi: ['rock', 'pop', 'jazz', 'metal'],
        genre: ''
    },
    method:{
        filterGenre: function(){
            // axios.get( 'http://localhost/php-ajax-dischi/Api/disks.php' )
            // .then( (res) => {
                
            //     this.disks = res.data;

            //     this.disks.forEach(elem => {
            //         if(elem.genre == this.genre){
            //             this.disks.push(elem);
            //         }
            //     });

            // })
            console.log('ciao')
        },

    },
    created(){
        axios.get( 'http://localhost/php-ajax-dischi/Api/disks.php' )
            .then( (res) => {
                this.disks = res.data;
            })
    },

})