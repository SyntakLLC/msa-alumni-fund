<template>
	<svg viewBox="0 0 24 24" fill="currentColor" :class="classes">
		<path d="M21,0H3A3,3,0,0,0,0,3V21a3,3,0,0,0,3,3H21a3,3,0,0,0,3-3V3A3,3,0,0,0,21,0Zm1,21a1,1,0,0,1-1,1H3a1,1,0,0,1-1-1V3A1,1,0,0,1,3,2H21a1,1,0,0,1,1,1Z"/>
		<path d="M11.249,4.5a1.251,1.251,0,0,0-1.75.25L7.365,7.6l-.482-.481A1.25,1.25,0,0,0,5.116,8.883l1.5,1.5A1.262,1.262,0,0,0,8.5,10.249l3-4A1.25,1.25,0,0,0,11.249,4.5Z"/>
		<path d="M11.249,13.5a1.251,1.251,0,0,0-1.75.25L7.365,16.6l-.482-.481a1.25,1.25,0,1,0-1.767,1.768l1.5,1.5A1.265,1.265,0,0,0,8.5,19.249l3-4A1.25,1.25,0,0,0,11.249,13.5Z"/>
		<path d="M18.5,7.749H14a1.25,1.25,0,0,0,0,2.5h4.5a1.25,1.25,0,0,0,0-2.5Z"/>
		<path d="M18.5,15.749H14a1.25,1.25,0,0,0,0,2.5h4.5a1.25,1.25,0,1,0,0-2.5Z"/>
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