<template>
	<svg viewBox="0 0 20 20" :fill="fill" :class="classes">
		<path fill-rule="evenodd"
			  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
			  clip-rule="evenodd"></path>
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