var app = new Vue({
    el: '#app',

    data:{
        disks: []
    },
    created(){
        axios.get( 'http://localhost/php-ajax-dischi/Api/disks.php' )
            .then( (res) => {
                this.disks = res.data;
            })
    }
})