<template>
    <app-layout>
        <div class="bg-white">
            <!-- Breadcrumbs -->
            <breadcrumbs :numOfItems="2" :homeRoute="route('msa.index')">
                <template #1> Muslim Student Associations </template>
                <template #2> {{ msa.school }} </template>
            </breadcrumbs>

            <main class="max-w-7xl mx-auto sm:pt-16 sm:px-6 lg:px-8">
                <product-showcase-layout
                    :images="images"
                    :expandContent="objectives"
                >
                    <template #title>{{ msa.name }}</template>

                    <template #subtitle>{{ msa.school }}</template>

                    <template #reviews>
                        <page-subtitle color="brand">
                            <a :href="`mailto:${msa.contact}`">
                                <span class="uppercase text-sm font-extrabold"
                                    >Contact:</span
                                >
                                {{ msa.contact }}
                            </a>
                        </page-subtitle>
                    </template>

                    <template #description>
                        {{ msa.description }}
                    </template>

                    <template #action>
                        <primary-button>
                            Support this community today
                        </primary-button>
                    </template>

                    <template #expandSectionTitle>
                        What we're trying to do
                    </template>
                </product-showcase-layout>

                <related-items-layout :hasItems="nearbyMsas.length">
                    <template #title>People also support</template>

                    <template #item>
                        <Link
                            v-for="msa in nearbyMsas"
                            :key="msa.uuid"
                            :href="route('msa.show', msa.uuid)"
                            class="hover:shadow-xl transition hover:opacity-75"
                        >
                            <related-item :imageUrl="msa.primary_image_url">
                                <template #title>
                                    {{ msa.school }}
                                </template>
                            </related-item>
                        </Link>
                    </template>

                    <template #empty>
                        <h2
                            id="related-heading"
                            class="text-xl font-bold text-gray-900"
                        >
                            {{
                                `${msa.name} is the only MSA we have from ${msa.city}.`
                            }}
                        </h2>
                    </template>
                </related-items-layout>
            </main>
        </div>
    </app-layout>
</template>

<script setup>
import { ref } from "vue";
import {
    Dialog,
    DialogPanel,
    Disclosure,
    DisclosureButton,
    DisclosurePanel,
    Popover,
    PopoverButton,
    PopoverGroup,
    PopoverPanel,
    RadioGroup,
    RadioGroupLabel,
    RadioGroupOption,
    Tab,
    TabGroup,
    TabList,
    TabPanel,
    TabPanels,
    TransitionChild,
    TransitionRoot,
} from "@headlessui/vue";
import {
    HeartIcon,
    MenuIcon,
    MinusSmIcon,
    PlusSmIcon,
    SearchIcon,
    ShoppingBagIcon,
    UserIcon,
    XIcon,
} from "@heroicons/vue/outline";
import { StarIcon } from "@heroicons/vue/solid";
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link } from "@inertiajs/inertia-vue3";
import PageTitle from "@/Components/texts/PageTitle.vue";
import PageSubtitle from "@/Components/texts/PageSubtitle.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import Breadcrumbs from "@/Components/navbar/Breadcrumbs.vue";
import ProductShowcaseLayout from "@/Layouts/ui/ProductShowcaseLayout.vue";
import RelatedItemsLayout from "@/Layouts/ui/RelatedItemsLayout.vue";
import RelatedItem from "@/Components/ecommerce/RelatedItem.vue";

const open = ref(false);

const props = defineProps({
    msa: Object,
    nearbyMsas: Array,
    images: Array,
    objectives: Array,
});

const images = [props.msa.primary_image_url, ...props.images];
</script>
