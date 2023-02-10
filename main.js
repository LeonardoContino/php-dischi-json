const { createApp} = Vue;
const apiUri = 'http://localhost/php-dischi-json/discs.php';
const app = createApp({
    data(){
        return {
           discs:[],
           selectedGenre: [],
           genres: []
        }
    },
    methods:{
      
      fetchApi(endpoint, target){
        axios.get(endpoint).then(res =>{
        this[target] = res.data;
      })
      },
      filterDiscs(){
        let endpoint = apiUri;
        if(this.selectedGenre) endpoint += `?genre=${this.selectedGenre}`;
        this.fetchApi(endpoint, 'discs')
      },
    },
    created(){
      this.fetchApi(apiUri, 'discs');
      this.fetchApi(`http://localhost/php-dischi-json/genres.php`, 'genres');
    }
})

app.mount('#app')