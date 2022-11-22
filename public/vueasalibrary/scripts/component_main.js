const app = Vue.createApp({
    el: '#app',
    data () {
      return {
          response: null,
          env: env,
          projects: [],
          config: {
              async: true,
              crossDomain: true,
              headers: {
                  "Authorization": "Bearer cTZVSHBJTXBqRHF1ZGlYdGVLT3FOVTF0NjNnS2FuRDg4enpVL2ZaR0lYdHhpWlM2N0pnLzNYeEpJbWxta3ZsdTo6MxNjU+k+wJbX2FeeRUe5Kw==",
                  'Content-Type': 'application/json'
                  }
          }
  
      }
    },
    /* Method Definition  */
    methods: {
        
        // API get call using axios
        all: function(route) {
            axios.get(route, this.config)
                .then(response => (this.projects = response.data.projects))
                .catch(error => (console.log(error)));
        },

        // read: function(route) {
        //     axios.get(route, this.config)
        //         .then(response => (this.project = response.data))
        //         .catch(error => (console.log(error)));

        // }
        
    },
    /* upon object load, the following will be executed */
    mounted () {
        this.all(this.env.home + "projects");
    }
  
});


/* Components Definition */

// Component Registration
app.component('project-card', {

	template: '#project_card_template',
	props: ['project']
	
});

// Mount the app
app.mount('#app');