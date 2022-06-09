<template>
    <!-- Section for Nearby MSA's -->
    <section
        aria-labelledby="related-heading"
        class="border-t border-gray-200 py-16 px-4 sm:px-0"
    >
        <!-- If there are nearby MSA's -->
        <div v-if="hasItems">
            <h2 id="related-heading" class="text-xl font-bold text-gray-900">
                <slot name="title" />
            </h2>

            <div
                class="mt-8 grid grid-cols-1 gap-y-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8"
            >
                <slot name="item" />
            </div>
        </div>

        <!-- If there are none -->
        <div v-else>
            <slot name="empty" />
        </div>
    </section>
</template>

<script>
import { defineComponent } from "vue";

export default defineComponent({
    props: ["hasItems"],
});
</script>
