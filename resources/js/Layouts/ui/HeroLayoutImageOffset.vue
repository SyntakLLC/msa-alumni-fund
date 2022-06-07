<template>
    <div class="relative bg-white lg:mb-64">
        <div class="pt-10 bg-[#f5f7f8] sm:pt-16 lg:pt-0 lg:-mb-56">
            <div class="mx-auto lg:px-8">
                <div
                    class="lg:grid lg:grid-cols-2 lg:gap-8 px-6 max-w-7xl mx-auto"
                >
                    <!-- Text -->
                    <div
                        class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 sm:text-center lg:px-0 lg:text-left lg:flex lg:items-center"
                    >
                        <div class="lg:py-24">
                            <slot name="left" />
                        </div>
                    </div>

                    <!-- Image -->
                    <div class="mt-12 -mb-16 sm:-mb-48 lg:m-0 lg:relative">
                        <div
                            class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:max-w-none lg:px-0"
                        >
                            <slot name="right" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { defineComponent } from "vue";

export default defineComponent({
    // props: {
    //     size: {
    //         required: false,
    //         type: String,
    //         default: "base",
    //         validator: (prop) =>
    //             ["xs", "sm", "base", "lg", "xl"].includes(prop),
    //     },
    //     size: {
    //         required: false,
    //         type: String,
    //         default: "base",
    //         validator: (prop) =>
    //             ["xs", "sm", "base", "lg", "xl"].includes(prop),
    //     },
    // },
});
</script>
