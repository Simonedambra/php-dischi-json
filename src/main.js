
const { createApp, ref } = Vue

createApp({
    data() {
        let urldisc = 'http://localhost/php-dischi-json/disc-gen.php';
        let disc = [];
        return {
            urldisc,
            disc
        }
    },
    methods: {
        getdisc() {
            axios.get(this.urldisc).then(response => {
                this.disc = response.data;
                console.log(this.disc)
            })
        }
    },
    created() {
        this.getdisc()
    }
}).mount('#app')