<template>
    <app-layout>
        <div class="bg-white">
            <!-- Breadcrumbs -->
            <breadcrumbs :numOfItems="1">
                <template #1> Muslim Student Associations </template>
            </breadcrumbs>

            <!-- Title -->
            <title-with-subtitle-layout>
                <template #title> Discover MSA's </template>
                <template #subtitle>
                    Check out out the latest MSA's who have joined our
                    community!
                </template>
            </title-with-subtitle-layout>

            <!-- Main Content -->
            <main class="max-w-2xl mx-auto px-4 lg:max-w-7xl lg:px-8">
                <shopping-layout
                    :products="filterMsas(msas)"
                    :filters="filters"
                    :city-filters="cityFilters"
                >
                    <template #product>
                        <Link
                            v-for="msa in filterMsas(msas)"
                            :href="route('msa.show', msa.uuid)"
                            :key="msa.id"
                            class="group relative bg-white border border-gray-200 rounded-lg flex flex-col overflow-hidden shadow-sm hover:shadow-xl transition"
                        >
                            <ProductCard
                                :msa="msa"
                                :imageUrl="msa.primary_image_url"
                            >
                                <template #strongSubtitle>
                                    {{ msa.name }}
                                </template>
                                <template #weakSubtitle>
                                    {{ msa.city }}
                                </template>
                                <template #title>
                                    {{ msa.school }}
                                </template>
                            </ProductCard>
                        </Link>
                    </template>

                    <template #empty>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="mx-auto h-12 w-12 text-gray-400"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                            />
                        </svg>

                        <h3 class="mt-2 text-lg font-medium text-gray-900">
                            Whoops!
                        </h3>
                        <p class="mt-3 text-lg text-gray-500">
                            Looks like we don't have any MSA's from there. If
                            you know any, help them sign up!
                        </p>
                    </template>
                </shopping-layout>
            </main>
        </div>
    </app-layout>
</template>

<script>
import { defineComponent, ref } from "vue";
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
    Tab,
    TabGroup,
    TabList,
    TabPanel,
    TabPanels,
    TransitionChild,
    TransitionRoot,
} from "@headlessui/vue";
import {
    MenuIcon,
    SearchIcon,
    ShoppingBagIcon,
    XIcon,
} from "@heroicons/vue/outline";
import { ChevronDownIcon, PlusSmIcon, PlusIcon } from "@heroicons/vue/solid";
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link } from "@inertiajs/inertia-vue3";
import Breadcrumbs from "@/Components/navbar/Breadcrumbs.vue";
import TitleWithSubtitleLayout from "@/Layouts/ui/TitleWithSubtitleLayout.vue";
import ProductCard from "../Components/ecommerce/ProductCard.vue";
import ShoppingLayout from "../Layouts/ShoppingLayout.vue";

export default defineComponent({
    components: {
        AppLayout,
        Breadcrumbs,
        TitleWithSubtitleLayout,
        ShoppingLayout,
        ProductCard,
        ChevronDownIcon,
        PlusSmIcon,
        PlusIcon,
        MenuIcon,
        SearchIcon,
        ShoppingBagIcon,
        XIcon,
        Dialog,
        DialogPanel,
        Disclosure,
        DisclosureButton,
        DisclosurePanel,
        Popover,
        PopoverButton,
        PopoverGroup,
        PopoverPanel,
        Tab,
        TabGroup,
        TabList,
        TabPanel,
        TabPanels,
        TransitionChild,
        TransitionRoot,
        Link,
    },

    props: ["msas"],

    setup() {
        return {
            filters,
        };
    },

    data() {
        return {
            mobileMenuOpen: false,
            cityFilters: [
                { value: "boston", label: "Boston", checked: false },
                { value: "new york", label: "New York", checked: false },
                { value: "chicago", label: "Chicago", checked: false },
                { value: "losAngeles", label: "Los Angeles", checked: false },
                { value: "miami", label: "Miami", checked: false },
                { value: "dallas", label: "Dallas", checked: false },
            ],
        };
    },

    methods: {
        filterMsas(msas) {
            const checkedCities = this.cityFilters.map((filter) => {
                if (filter.checked) return filter.label;
            });

            // returns all msa's if nothing is checked
            if (checkedCities.every((v) => v === undefined)) return msas;

            return msas.filter((msa) => {
                return checkedCities.includes(msa.city);
            });
        },
    },
});

const filters = [
    {
        id: "cities",
        name: "Cities",
        options: [
            { value: "boston", label: "Boston", checked: false },
            { value: "new york", label: "New York", checked: false },
            { value: "chicago", label: "Chicago", checked: false },
            { value: "losAngeles", label: "Los Angeles", checked: false },
            { value: "miami", label: "Miami", checked: false },
            { value: "dallas", label: "Dallas", checked: false },
        ],
    },
];
</script>
