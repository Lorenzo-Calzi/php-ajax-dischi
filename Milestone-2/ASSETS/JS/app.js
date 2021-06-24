const app = new Vue({
    /* Options object */
    el: '#app',
    data: {
      musicData: []
    },
    methods: {
  
    },
    mounted() {
       axios.get('/php/Esercizi_PHP/Esercizio_47/php-ajax-dischi/Milestone-2/api/dischi.php')
        .then(resp => {
          console.log(resp);
          this.musicData = resp.data
        }).catch(e => {
          console.log(e);
        })
    }
  })
