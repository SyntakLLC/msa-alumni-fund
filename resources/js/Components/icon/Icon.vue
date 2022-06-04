<template>
	<component
		:is="component"
		:classes="Array.isArray(classes) ? classes.join(' ') : classes"
	></component>
</template>

<script>
import {defineAsyncComponent} from "vue";

export default {
	props: {
		name: {
			type: String,
			required: false,
		},
		fill: {
			type: String,
			required: false,
			default: null,
		},
		classes: {
			required: false,
			default: null,
		},
		icon: {
			required: false,
			default: false,
		},
	},
	components: {},
	data() {
		return {};
	},
	methods: {},
	computed: {
		component() {
			if (!this.icon) {
				return defineAsyncComponent(() =>
					import(`@/Components/icon/icons/${this.name}.vue`)
				);
			}

			return this.icon;
		},
	},
};
</script>

<style lang="scss" scoped>
</style>