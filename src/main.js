console.log('hai collegato correttamente il file js')
const { createApp } = Vue

createApp({
    data() {
        urldisc = 'http://localhost/php-dischi-json/disc-gen.php';
        disc = [];
        return {
            urldisc
        }

    },
    methods: {
        getdisc() {
            axios.get(this.urldisc).then(response => {
                this.disc = response;
                console.log(this.disc)
            })
        }
    },
    created() {
        this.getdisc()
    }
}
).mount('#app')