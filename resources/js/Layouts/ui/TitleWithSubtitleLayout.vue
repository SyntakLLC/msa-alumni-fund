<template>
    <div
        class="border-b border-gray-200 py-10 max-w-2xl mx-auto px-4 lg:max-w-7xl lg:px-8 text-center"
    >
        <page-title>
            <slot name="title" />
        </page-title>
        <page-subtitle>
            <slot name="subtitle" />
        </page-subtitle>
    </div>
</template>

<script>
import { defineComponent } from "vue";
import PageTitle from "@/Components/texts/PageTitle.vue";
import PageSubtitle from "@/Components/texts/PageSubtitle.vue";

export default defineComponent({
    components: {
        PageTitle,
        PageSubtitle,
    },
});
</script>
