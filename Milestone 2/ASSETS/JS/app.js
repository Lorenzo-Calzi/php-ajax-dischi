const app = new Vue({
    /* Options object */
    el: '#app',
    data: {
      products: null
    },
    methods: {
  
    },
    mounted() {

       console.log('prova');
       axios.get('/api/dischi.php')
        .then(resp => {
          console.log(resp);
          this.products = resp.data
        }).catch(e => {
          console.log(e);
        })
    }
  })


  console.log('prova');
