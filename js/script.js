console.log('JS OK');

const app = new Vue({
    el: '#app',
    data() {
        return {
            albums: [],
            filter: ''
        }
    },
    mounted() {
        this.getAlbums('');
    },
    methods: {
        getAlbums(genre) {
            axios.get('/php-ajax-dischi/api/album.php?filter=' + genre)
                .then(response => {
                    if (response.status === 200) {
                        console.log(response);
                        this.albums = response.data;
                    }
                })
                .catch(e => console.log(e));
        }
    },

})