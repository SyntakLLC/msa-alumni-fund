<template>
    <p :class="[`text-${color}-600`, 'mt-4 text-lg text-gray-500']">
        <slot />
    </p>
</template>

<script>
export default {
    props: {
        color: {
            required: false,
            type: String,
            default: "gray",
        },
    },

    data() {
        return {};
    },
};
</script>
