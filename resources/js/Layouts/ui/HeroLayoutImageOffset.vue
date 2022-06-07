<template>
    <div class="relative bg-white lg:mb-64">
        <div class="pt-10 bg-[#f5f7f8] sm:pt-16 lg:pt-0 lg:-mb-56">
            <div class="mx-auto lg:px-8">
                <div
                    class="lg:grid lg:grid-cols-2 lg:gap-8 px-6 max-w-7xl mx-auto w-full"
                >
                    <!-- Text -->
                    <div
                        class="lg:pt-24 w-full items-end mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 text-center lg:px-0 lg:text-left lg:flex lg:items-center"
                    >
                        <div class="lg:py-24 w-full items-end">
                            <slot name="left" />
                        </div>
                    </div>

                    <!-- Image -->
                    <div
                        class="mt-12 -mb-16 sm:-mb-48 lg:m-0 lg:relative w-full"
                    >
                        <div
                            class="w-full mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:max-w-none lg:px-0"
                        >
                            <img
                                id="heroImage"
                                class="w-full rounded-2xl aspect-square object-cover lg:absolute lg:inset-y-0 lg:left-0 lg:aspect-square lg:mt-10 lg:max-w-none"
                                :src="imageUrl"
                                alt="An MSA"
                            />
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
    props: {
        imageUrl: {
            required: true,
            type: String,
        },
    },
});
</script>
