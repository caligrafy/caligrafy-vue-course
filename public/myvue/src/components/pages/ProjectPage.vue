<!-- Page Template Example
@component: show-welcome
@template
@script
-->

<template>
    <div id='vue-home'>
        <div class="spacer-4"></div>
        <h2 class="medium-text">Project List (Vue Integration)</h2>
		<div class="spacer-4"></div>
		<template v-for="project in projects" :key="project.id">
			<show-card :project="project" ></show-card>
		</template>
		<div class='spacer-2'></div>
    </div>
</template>

<script>
import ShowCard from '../global/ShowCard.vue';

export default {
    name: 'vue-home',
    components: {
		'show-card': ShowCard
    },
	data() {
		return {
            projects: {}
		}
	},
	methods: {

        // API get call using axios
        all: function(route) {
            this.http.get(route, this.apiConfig)
                .then(response => (this.projects = response.data.projects))
                .catch(error => (console.log(error)));
        }
	},
	
	mounted() {
        this.all(this.config.apiRoute)
	}
};
</script>