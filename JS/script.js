const { createApp } = Vue;

createApp ({
    data() {
        return {
            testText: "TEST"
        }
    },
    mounted() {
        axios.get("http://localhost/Boolean/php-dischi-json/server.php").then(resp => {
            console.log(resp);
        })
    }
}).mount("#app");