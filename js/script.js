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
            axios.get('https://flynn.boolean.careers/exercises/api/array/music')
                .then(response => {
                    if (response.status === 200) {
                        console.log(response);
                        this.albums = response.data.response;
                    }
                })
                .catch(e => console.log(e));


        }
    },

})