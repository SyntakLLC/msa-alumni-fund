<template>
	<svg fill="currentColor"
		 :class="classes"
		 x="0px" y="0px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
		<g>
			<g>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M19.71,5.29l-4-4C15.53,1.11,15.28,1,15,1c-0.55,0-1,0.45-1,1
					c0,0.28,0.11,0.53,0.29,0.71L16.59,5H6c-3.31,0-6,2.69-6,6c0,3.31,2.69,6,6,6h5v-2H6c-2.21,0-4-1.79-4-4c0-2.21,1.79-4,4-4h10.59
					l-2.29,2.29C14.11,9.47,14,9.72,14,10c0,0.55,0.45,1,1,1c0.28,0,0.53-0.11,0.71-0.29l4-4C19.89,6.53,20,6.28,20,6
					C20,5.72,19.89,5.47,19.71,5.29z M15,14c-1.1,0-2,0.9-2,2s0.9,2,2,2s2-0.9,2-2S16.1,14,15,14z"/>
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