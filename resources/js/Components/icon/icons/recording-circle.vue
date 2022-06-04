<template>
	<svg viewBox="0 0 20 20" fill="currentColor" :class="classes">
		<g id="record">
			<g>
				<circle fill-rule="evenodd" clip-rule="evenodd" cx="10" cy="10" r="7"/>
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