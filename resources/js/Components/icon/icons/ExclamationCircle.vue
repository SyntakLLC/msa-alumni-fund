<template>
    <svg viewBox="0 0 20 20" fill="currentColor" :class="classes">
        <path fill-rule="evenodd"
              d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
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