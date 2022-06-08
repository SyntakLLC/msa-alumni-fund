<template>
    <div class="border-b border-gray-200 py-10">
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
