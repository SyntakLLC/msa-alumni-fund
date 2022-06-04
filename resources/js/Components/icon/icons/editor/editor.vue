<template>
	<svg fill="currentColor"
		 :class="classes"
		 x="0px" y="0px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
		<g>
			<g>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M16,1c-0.55,0-1,0.45-1,1v7H5V2c0-0.55-0.45-1-1-1S3,1.45,3,2v16
					c0,0.55,0.45,1,1,1s1-0.45,1-1v-7h10v7c0,0.55,0.45,1,1,1s1-0.45,1-1V2C17,1.45,16.55,1,16,1z"/>
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