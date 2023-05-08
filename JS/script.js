const { createApp } = Vue;

createApp ({
    data() {
        return {
            recordsList: []
        }
    },
    mounted() {
        axios.get("http://localhost/Boolean/php-dischi-json/server.php").then(resp => {
            console.log(resp);
            this.recordsList = resp.data.data;
        })
    }
}).mount("#app");