<template>
	<svg :class="classes"
		 fill="currentColor"
		 x="0px" y="0px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
		<g>
			<path d="M10,17c3.3,0,6-2.7,6-6V3.5C16,2.7,15.3,2,14.5,2C13.7,2,13,2.7,13,3.5V11c0,1.7-1.3,3-3,3s-3-1.3-3-3V3.5
			C7,2.7,6.3,2,5.5,2C4.7,2,4,2.7,4,3.5V11C4,14.3,6.7,17,10,17z"/>
			<path d="M16.5,19h-13C3.2,19,3,19.2,3,19.5C3,19.8,3.2,20,3.5,20h13c0.3,0,0.5-0.2,0.5-0.5C17,19.2,16.8,19,16.5,19z"/>
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