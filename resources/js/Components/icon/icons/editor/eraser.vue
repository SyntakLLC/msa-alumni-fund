<template>
	<svg fill="currentColor"
		 :class="classes"
		 x="0px" y="0px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
		<g>
			<g>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M18.71,8.43c0.39-0.4,0.39-1.05,0-1.45l-5.53-5.72c-0.39-0.4-1.01-0.4-1.4,0
					L1.29,12.1c-0.39,0.4-0.39,1.05,0,1.45l4.25,4.39h0l2.13,2.05h9.27c0.02,0,0.03,0.01,0.05,0.01c0.55,0,1-0.45,1-1
					c0-0.55-0.45-1-1-1H9.46l0.05-0.05l0.01,0h0l0.81-0.84L18.71,8.43z M7.52,17.94l-4.95-5.12l4.46-4.61l4.95,5.12L7.52,17.94z"/>
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