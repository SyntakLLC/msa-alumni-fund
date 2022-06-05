<template>
    <app-layout>
        <div class="bg-white">
            <div>
                <!-- Mobile filter dialog -->
                <TransitionRoot as="template" :show="mobileFiltersOpen">
                    <Dialog
                        as="div"
                        class="relative z-40 lg:hidden"
                        @close="mobileFiltersOpen = false"
                    >
                        <TransitionChild
                            as="template"
                            enter="transition-opacity ease-linear duration-300"
                            enter-from="opacity-0"
                            enter-to="opacity-100"
                            leave="transition-opacity ease-linear duration-300"
                            leave-from="opacity-100"
                            leave-to="opacity-0"
                        >
                            <div class="fixed inset-0 bg-black bg-opacity-25" />
                        </TransitionChild>

                        <div class="fixed inset-0 flex z-40">
                            <TransitionChild
                                as="template"
                                enter="transition ease-in-out duration-300 transform"
                                enter-from="translate-x-full"
                                enter-to="translate-x-0"
                                leave="transition ease-in-out duration-300 transform"
                                leave-from="translate-x-0"
                                leave-to="translate-x-full"
                            >
                                <DialogPanel
                                    class="ml-auto relative max-w-xs w-full h-full bg-white shadow-xl py-4 pb-6 flex flex-col overflow-y-auto"
                                >
                                    <div
                                        class="px-4 flex items-center justify-between"
                                    >
                                        <h2
                                            class="text-lg font-medium text-gray-900"
                                        >
                                            Filters
                                        </h2>
                                        <button
                                            type="button"
                                            class="-mr-2 w-10 h-10 p-2 flex items-center justify-center text-gray-400 hover:text-gray-500"
                                            @click="mobileFiltersOpen = false"
                                        >
                                            <span class="sr-only"
                                                >Close menu</span
                                            >
                                            <XIcon
                                                class="h-6 w-6"
                                                aria-hidden="true"
                                            />
                                        </button>
                                    </div>

                                    <!-- Filters -->
                                    <form class="mt-4">
                                        <Disclosure
                                            as="div"
                                            v-for="section in filters"
                                            :key="section.name"
                                            class="border-t border-gray-200 pt-4 pb-4"
                                            v-slot="{ open }"
                                        >
                                            <fieldset>
                                                <legend class="w-full px-2">
                                                    <DisclosureButton
                                                        class="w-full p-2 flex items-center justify-between text-gray-400 hover:text-gray-500"
                                                    >
                                                        <span
                                                            class="text-sm font-medium text-gray-900"
                                                        >
                                                            {{ section.name }}
                                                        </span>
                                                        <span
                                                            class="ml-6 h-7 flex items-center"
                                                        >
                                                            <ChevronDownIcon
                                                                :class="[
                                                                    open
                                                                        ? '-rotate-180'
                                                                        : 'rotate-0',
                                                                    'h-5 w-5 transform',
                                                                ]"
                                                                aria-hidden="true"
                                                            />
                                                        </span>
                                                    </DisclosureButton>
                                                </legend>
                                                <DisclosurePanel
                                                    class="pt-4 pb-2 px-4"
                                                >
                                                    <div class="space-y-6">
                                                        <div
                                                            v-for="(
                                                                option,
                                                                optionIdx
                                                            ) in cityFilters"
                                                            :key="option.value"
                                                            class="flex items-center"
                                                        >
                                                            <input
                                                                :id="`${section.id}-${optionIdx}-mobile`"
                                                                :name="`${section.id}[]`"
                                                                :value="
                                                                    option.value
                                                                "
                                                                type="checkbox"
                                                                v-model="
                                                                    cityFilters[
                                                                        optionIdx
                                                                    ].checked
                                                                "
                                                                class="h-4 w-4 border-gray-300 rounded text-brand-600 focus:ring-brand-500"
                                                            />
                                                            <label
                                                                :for="`${section.id}-${optionIdx}-mobile`"
                                                                class="ml-3 text-sm text-gray-500"
                                                            >
                                                                {{
                                                                    option.label
                                                                }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                </DisclosurePanel>
                                            </fieldset>
                                        </Disclosure>
                                    </form>
                                </DialogPanel>
                            </TransitionChild>
                        </div>
                    </Dialog>
                </TransitionRoot>

                <!-- Breadcrumbs -->
                <div class="border-b border-gray-200">
                    <nav
                        aria-label="Breadcrumb"
                        class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"
                    >
                        <ol
                            role="list"
                            class="flex items-center space-x-4 py-4"
                        >
                            <li class="text-sm">
                                <a
                                    :href="route('msa.index')"
                                    aria-current="page"
                                    class="font-medium text-gray-500 hover:text-gray-600"
                                >
                                    MSA's
                                </a>
                            </li>
                        </ol>
                    </nav>
                </div>

                <main class="max-w-2xl mx-auto px-4 lg:max-w-7xl lg:px-8">
                    <!-- Title -->
                    <div class="border-b border-gray-200 py-10">
                        <page-title> Discover MSA's </page-title>
                        <page-subtitle>
                            Check out out the latest MSA's who have joined our
                            community!
                        </page-subtitle>
                    </div>

                    <!-- Content -->
                    <div
                        class="pt-12 pb-24 lg:grid lg:grid-cols-4 lg:gap-x-8 xl:grid-cols-5"
                    >
                        <!-- Filters sidebar -->
                        <aside>
                            <h2 class="sr-only">Filters</h2>

                            <button
                                type="button"
                                class="inline-flex items-center lg:hidden"
                                @click="mobileFiltersOpen = true"
                            >
                                <span class="text-sm font-medium text-gray-700"
                                    >Filters</span
                                >
                                <PlusSmIcon
                                    class="flex-shrink-0 ml-1 h-5 w-5 text-gray-400"
                                    aria-hidden="true"
                                />
                            </button>

                            <div class="hidden lg:block">
                                <form
                                    class="divide-y divide-gray-200 space-y-10"
                                >
                                    <div
                                        v-for="(section, sectionIdx) in filters"
                                        :key="section.name"
                                        :class="
                                            sectionIdx === 0 ? null : 'pt-10'
                                        "
                                    >
                                        <fieldset>
                                            <legend
                                                class="block text-sm font-medium text-gray-900"
                                            >
                                                {{ section.name }}
                                            </legend>
                                            <div class="pt-6 space-y-3">
                                                <div
                                                    v-for="(
                                                        option, optionIdx
                                                    ) in cityFilters"
                                                    :key="option.value"
                                                    class="flex items-center"
                                                >
                                                    <input
                                                        :id="`${section.id}-${optionIdx}`"
                                                        :name="`${section.id}[]`"
                                                        type="checkbox"
                                                        v-model="
                                                            cityFilters[
                                                                optionIdx
                                                            ].checked
                                                        "
                                                        class="h-4 w-4 border-gray-300 rounded text-brand-600 focus:ring-brand-500"
                                                    />
                                                    <label
                                                        :for="`${section.id}-${optionIdx}`"
                                                        class="ml-3 text-sm text-gray-600"
                                                    >
                                                        {{ option.label }}
                                                    </label>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </form>
                            </div>
                        </aside>

                        <!-- Grid -->
                        <section
                            aria-labelledby="product-heading"
                            class="mt-6 lg:mt-0 lg:col-span-3 xl:col-span-4"
                        >
                            <h2 id="product-heading" class="sr-only">
                                Products
                            </h2>

                            <div
                                v-if="filterMsas(msas).length"
                                class="grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:gap-x-6 sm:gap-y-10 lg:gap-x-8 xl:grid-cols-3"
                            >
                                <Link
                                    v-for="msa in filterMsas(msas)"
                                    :href="route('msa.show', msa.uuid)"
                                    :key="msa.id"
                                    class="group relative bg-white border border-gray-200 rounded-lg flex flex-col overflow-hidden"
                                >
                                    <div
                                        class="aspect-w-3 aspect-h-4 bg-gray-200 group-hover:opacity-75 sm:aspect-none sm:h-60"
                                    >
                                        <img
                                            :src="msa.primary_image_url"
                                            alt="MSA's cover image."
                                            class="w-full h-full object-center object-cover sm:w-full sm:h-full"
                                        />
                                    </div>
                                    <div
                                        class="flex-1 p-4 space-y-2 flex flex-col"
                                    >
                                        <h3
                                            class="text-sm font-medium text-gray-900"
                                        >
                                            <a :href="route('show')">
                                                <span
                                                    aria-hidden="true"
                                                    class="absolute inset-0"
                                                />
                                                {{ msa.name }}
                                            </a>
                                        </h3>
                                        <!-- <p class="text-sm text-gray-500">
                                            {{ msa.description }}
                                        </p> -->
                                        <div
                                            class="flex-1 flex flex-col justify-end"
                                        >
                                            <p
                                                class="text-sm italic text-gray-500"
                                            >
                                                {{ msa.city }}
                                            </p>
                                            <p
                                                class="text-base font-medium text-gray-900"
                                            >
                                                {{ msa.school }}
                                            </p>
                                        </div>
                                    </div>
                                </Link>
                            </div>

                            <div v-else class="text-center">
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

                                <h3
                                    class="mt-2 text-sm font-medium text-gray-900"
                                >
                                    Whoops!
                                </h3>
                                <p class="mt-3 text-sm text-gray-500">
                                    Looks like we don't have any MSA's from
                                    there. If you know any, help them sign up!
                                </p>
                                <!-- <div class="mt-6">
                                    <button
                                        type="button"
                                        class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-brand-600 hover:bg-brand-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-500"
                                    >
                                        <PlusIcon
                                            class="-ml-1 mr-2 h-5 w-5"
                                            aria-hidden="true"
                                        />
                                        New Project
                                    </button>
                                </div> -->
                            </div>
                        </section>
                    </div>
                </main>
            </div>
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
import PageTitle from "@/Components/texts/PageTitle.vue";
import PageSubtitle from "../Components/texts/PageSubtitle.vue";
import { Link } from "@inertiajs/inertia-vue3";

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

const cityFilters = ref([
    { value: "boston", label: "Boston", checked: false },
    { value: "new york", label: "New York", checked: false },
    { value: "chicago", label: "Chicago", checked: false },
    { value: "losAngeles", label: "Los Angeles", checked: false },
    { value: "miami", label: "Miami", checked: false },
    { value: "dallas", label: "Dallas", checked: false },
]);

const mobileMenuOpen = ref(false);
const mobileFiltersOpen = ref(false);

const props = defineProps({
    msas: Array,
});

const filterMsas = (msas) => {
    const checkedCities = cityFilters.value.map((filter) => {
        if (filter.checked) return filter.label;
    });

    if (checkedCities.every((v) => v === undefined)) return msas;

    return msas.filter((msa) => {
        return checkedCities.includes(msa.city);
    });
};
</script>
