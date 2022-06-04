<template>
	<svg fill="currentColor"
		 :class="classes"
		 x="0px" y="0px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
		<g>
			<g>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M2,15c-1.1,0-2,0.9-2,2c0,1.1,0.9,2,2,2s2-0.9,2-2C4,15.9,3.1,15,2,15z M2,8
					c-1.1,0-2,0.9-2,2c0,1.1,0.9,2,2,2s2-0.9,2-2C4,8.9,3.1,8,2,8z M7,4h12c0.55,0,1-0.45,1-1c0-0.55-0.45-1-1-1H7C6.45,2,6,2.45,6,3
					C6,3.55,6.45,4,7,4z M2,1C0.9,1,0,1.9,0,3c0,1.1,0.9,2,2,2s2-0.9,2-2C4,1.9,3.1,1,2,1z M19,9H7c-0.55,0-1,0.45-1,1
					c0,0.55,0.45,1,1,1h12c0.55,0,1-0.45,1-1C20,9.45,19.55,9,19,9z M19,16H7c-0.55,0-1,0.45-1,1c0,0.55,0.45,1,1,1h12
					c0.55,0,1-0.45,1-1C20,16.45,19.55,16,19,16z"/>
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