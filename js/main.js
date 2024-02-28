const { createApp } = Vue

createApp({
    data() {
        return {
            apiUrl: 'server.php',
            allDisks: []
        }
    },
    mounted(){
        this.getDisks()
    },
    methods: {
        getDisks() {
            axios
                .get(this.apiUrl)
                .then( (response) => {
                    this.allDisks = response.data
                })
        }
    }
}).mount('#app')
