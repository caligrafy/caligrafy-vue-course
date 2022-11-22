<!-- Page Template Example
@component: show-welcome
@template
@script
-->

<template>
    <div id='vue-home'>
		<div class="spacer-4"></div>
		<show-message header="Hello from test" message="This is a test page"></show-message>
    </div>
</template>

<script>
import ShowMessage from '../global/ShowMessage.vue';

export default {
    name: 'vue-home',
    components: {
		'show-message': ShowMessage,
    },
	data() {
		return {

		}
	},
	methods: {
	},
	computed: {
		// computed variables
	},
	
	mounted() {
	},
	watch: {
		// watched properties
	}
};
</script>