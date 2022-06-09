<template>
    <div class="relative">
        <div class="relative w-full h-72 rounded-lg overflow-hidden">
            <img
                :src="imageUrl"
                alt="Nearby MSA"
                class="w-full h-full object-center object-cover"
            />
        </div>
        <!-- <div class="relative mt-4">
                                        <h3
                                            class="text-sm font-medium text-gray-900"
                                        >
                                            {{ msa.name }}
                                        </h3>
                                    </div> -->
        <div
            class="absolute top-0 inset-x-0 h-72 rounded-lg p-4 flex items-end justify-end overflow-hidden"
        >
            <div
                aria-hidden="true"
                class="absolute inset-x-0 bottom-0 h-36 bg-gradient-to-t from-black opacity-50"
            />
            <p class="relative text-lg font-semibold text-white">
                <slot name="title" />
            </p>
        </div>
    </div>
</template>

<script>
import { defineComponent } from "vue";

export default defineComponent({
    props: ["imageUrl"],
});
</script>
