const { createApp} = Vue;
const apiUri = 'http://localhost/php-dischi-json/discs.php';
const app = createApp({
    data(){
        return {
           discs:[]
        }
    },
    created(){
      axios.get(apiUri).then(res =>{
        this.discs = res.data;
      })
    }
})

app.mount('#app')