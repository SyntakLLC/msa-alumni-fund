<template>
	<svg :class="classes"
		 fill="currentColor"
		 viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
		<g>
			<path d="M4,1C1.79,1,0,2.79,0,5s1.79,4,4,4c0.1,0,0.2-0.01,0.3-0.02C3.82,11.32,2.53,13,1,13c-0.55,0-1,0.45-1,1c0,0.55,0.45,1,1,1
				c3.87,0,7-4.48,7-10C8,2.79,6.21,1,4,1z"/>
			<path d="M16,1c-2.21,0-4,1.79-4,4s1.79,4,4,4c0.1,0,0.2-0.01,0.3-0.02C15.82,11.32,14.53,13,13,13c-0.55,0-1,0.45-1,1
				c0,0.55,0.45,1,1,1c3.87,0,7-4.48,7-10C20,2.79,18.21,1,16,1z"/>
		</g>
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