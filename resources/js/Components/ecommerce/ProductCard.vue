<template>
    <div class="">
        <div
            class="aspect-w-3 aspect-h-4 bg-gray-200 group-hover:opacity-75 sm:aspect-none sm:h-60 transition"
        >
            <img
                :src="imageUrl"
                alt="MSA's cover image."
                class="w-full h-full object-center object-cover sm:w-full sm:h-full"
            />
        </div>
        <div class="flex-1 p-4 space-y-2 flex flex-col">
            <h3 class="text-lg font-medium text-gray-900">
                <p class="text-xl font-bold font-medium text-gray-900">
                    <!-- {{ msa.school }} -->
                    <slot name="title" />
                </p>
            </h3>
            <p class="text-md text-gray-500">
                <slot name="description" />
                <!-- {{ msa.description }} -->
            </p>
            <div class="flex-1 flex flex-col justify-end">
                <p>
                    <span aria-hidden="true" class="absolute inset-0" />
                    <!-- {{ msa.name }} -->
                    <slot name="strongSubtitle" />
                </p>
                <p class="text-md italic text-gray-500">
                    <!-- {{ msa.city }} -->
                    <slot name="weakSubtitle" />
                </p>
            </div>

            <div class="mt-2">
                <span
                    class="inline-flex items-center px-2.5 py-0.5 rounded-md text-sm font-medium bg-brand-100 text-brand-800"
                >
                    32 contributors
                </span>
            </div>
            <!-- <div class="mt-2 bg-brand-600 rounded-sm p-2">
                <p class="text-lg font-bold font-medium text-center">
                    
                </p>
            </div> -->
        </div>
    </div>
</template>

<script>
import { defineComponent } from "vue";
import PrimaryButton from "../PrimaryButton.vue";

export default defineComponent({
    props: ["msa", "imageUrl"],
    components: { PrimaryButton },
});
</script>
