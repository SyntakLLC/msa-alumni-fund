<template>
	<svg fill="currentColor"
		 :class="classes"
		 x="0px" y="0px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
		<g>
			<g>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M15,9c1.1,0,2-0.9,2-2c0-1.1-0.9-2-2-2s-2,0.9-2,2C13,8.1,13.9,9,15,9z M19,2H1
					C0.45,2,0,2.45,0,3v14c0,0.55,0.45,1,1,1h18c0.55,0,1-0.45,1-1V3C20,2.45,19.55,2,19,2z M18,15l-6-5l-2,2L6,7l-4,8V4h16V15z"/>
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