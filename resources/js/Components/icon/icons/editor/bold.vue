<template>
	<svg :class="classes"
		 fill="currentColor"
		 x="0px" y="0px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
		<g>
			<g>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M14.3,9C14.7,8.2,15,7.4,15,6.5C15,4,13,2,10.5,2H5C4.4,2,4,2.4,4,3v13
					c0,0.6,0.4,1,1,1h6.5c2.5,0,4.5-2,4.5-4.5C16,11.1,15.3,9.8,14.3,9z M7,5h3.5C11.3,5,12,5.7,12,6.5C12,7.3,11.3,8,10.5,8H7V5z
					 M11.5,14H7v-3h4.5c0.8,0,1.5,0.7,1.5,1.5C13,13.3,12.3,14,11.5,14z"/>
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