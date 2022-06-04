<template>
	<svg fill="currentColor"
		 :class="classes"
		 x="0px" y="0px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
		<path d="M16.5,1H7C4.2,1,2,3.2,2,6s2.2,5,5,5v6.5C7,18.3,7.7,19,8.5,19c0.8,0,1.5-0.7,1.5-1.5V4h2v13.5c0,0.8,0.7,1.5,1.5,1.5
	c0.8,0,1.5-0.7,1.5-1.5V4h1.5C17.3,4,18,3.3,18,2.5C18,1.7,17.3,1,16.5,1z"/>
	</svg>
</template>

<script>
export default {
	props: {
		fill: {
			type: String,
			required: false,
			default: 'currentColor'
		},
		classes: {
			type: String,
			required: false,
			//default: 'w-8 h-8'
		}
	},
	components: {},
	data() {
		return {}
	},
	methods: {},
	computed: {},
	mounted() {
	},
	created() {
	}
}
</script>

<style lang="scss" scoped>

</style>