<template>
    <div>
        <div class="max-w-7xl mx-auto py-24 sm:px-2 sm:py-32 lg:px-4">
            <div class="max-w-2xl mx-auto px-4 lg:max-w-none">
                <div class="max-w-3xl">
                    <h2
                        class="font-sans text-4xl font-extrabold tracking-tight text-gray-900"
                    >
                        <slot name="title" />
                    </h2>
                    <p class="mt-4 text-gray-500">
                        <slot name="content" />
                    </p>
                </div>
                <div
                    class="mt-16 grid grid-cols-1 gap-y-10 gap-x-8 lg:grid-cols-3"
                >
                    <div
                        v-for="incentive in incentives"
                        :key="incentive.name"
                        class="sm:flex lg:block"
                    >
                        <div class="sm:flex-shrink-0">
                            <img
                                class="w-16 h-16"
                                :src="incentive.imageSrc"
                                alt=""
                            />
                        </div>
                        <div class="mt-4 sm:mt-0 sm:ml-6 lg:mt-6 lg:ml-0">
                            <h3 class="text-sm font-medium text-gray-900">
                                {{ incentive.name }}
                            </h3>
                            <p class="mt-2 text-sm text-gray-500">
                                {{ incentive.description }}
                            </p>
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
    props: ["incentives"],
});
</script>
