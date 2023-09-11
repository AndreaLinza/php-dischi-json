"use strict"

const { createApp } = Vue

createApp({
    data() {
        return {
            listDisks:[],
        }
    },

    mounted(){
        axios.get("API/api_disk.php").then((response) => {
            this.listDisks = response.data;
        })

    }



}).mount('#app')
