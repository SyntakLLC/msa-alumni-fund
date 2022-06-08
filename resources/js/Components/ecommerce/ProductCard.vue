<template>
    <div
        class="aspect-w-3 aspect-h-4 bg-gray-200 group-hover:opacity-75 sm:aspect-none sm:h-60"
    >
        <img
            :src="imageUrl"
            alt="MSA's cover image."
            class="w-full h-full object-center object-cover sm:w-full sm:h-full"
        />
    </div>
    <div class="flex-1 p-4 space-y-2 flex flex-col">
        <h3 class="text-sm font-medium text-gray-900">
            <p>
                <span aria-hidden="true" class="absolute inset-0" />
                <!-- {{ msa.name }} -->
                <slot name="strongSubtitle" />
            </p>
        </h3>
        <p class="text-sm text-gray-500">
            <slot name="description" />
            <!-- {{ msa.description }} -->
        </p>
        <div class="flex-1 flex flex-col justify-end">
            <p class="text-sm italic text-gray-500">
                <!-- {{ msa.city }} -->
                <slot name="weakSubtitle" />
            </p>
            <p class="text-base font-medium text-gray-900">
                <!-- {{ msa.school }} -->
                <slot name="title" />
            </p>
        </div>
    </div>
</template>

<script>
import { defineComponent } from "vue";

export default defineComponent({
    props: ["msa", "imageUrl"],
});
</script>
