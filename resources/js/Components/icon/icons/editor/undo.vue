<template>
	<svg :class="classes"
		 fill="currentColor"
		 viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
		<g>
			<g>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M5,14c-1.1,0-2,0.9-2,2c0,1.1,0.9,2,2,2s2-0.9,2-2C7,14.9,6.1,14,5,14z M14,5
					H3.41l2.29-2.29C5.89,2.53,6,2.28,6,2c0-0.55-0.45-1-1-1C4.72,1,4.47,1.11,4.29,1.29l-4,4C0.11,5.47,0,5.72,0,6
					c0,0.28,0.11,0.53,0.29,0.71l4,4C4.47,10.89,4.72,11,5,11c0.55,0,1-0.45,1-1c0-0.28-0.11-0.53-0.29-0.71L3.41,7H14
					c2.21,0,4,1.79,4,4c0,2.21-1.79,4-4,4H9v2h5c3.31,0,6-2.69,6-6S17.31,5,14,5z"/>
			</g>
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