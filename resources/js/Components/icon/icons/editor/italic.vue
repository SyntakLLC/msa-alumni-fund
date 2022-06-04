<template>
	<svg :class="classes"
		 fill="currentColor"
		 x="0px" y="0px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
		<g>
			<g>
				<path d="M11.7,4H14c0.6,0,1-0.4,1-1c0-0.6-0.4-1-1-1H7C6.4,2,6,2.4,6,3c0,0.6,0.4,1,1,1h2.2L7.3,15H5
					c-0.6,0-1,0.4-1,1c0,0.6,0.4,1,1,1h7c0.6,0,1-0.4,1-1c0-0.6-0.4-1-1-1H9.8L11.7,4z"/>
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