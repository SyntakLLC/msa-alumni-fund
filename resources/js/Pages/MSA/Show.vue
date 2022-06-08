<template>
    <app-layout>
        <div class="bg-white">
            <!-- Mobile menu -->
            <TransitionRoot as="template" :show="open">
                <Dialog
                    as="div"
                    class="relative z-40 lg:hidden"
                    @close="open = false"
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
                            enter-from="-translate-x-full"
                            enter-to="translate-x-0"
                            leave="transition ease-in-out duration-300 transform"
                            leave-from="translate-x-0"
                            leave-to="-translate-x-full"
                        >
                            <DialogPanel
                                class="relative max-w-xs w-full bg-white shadow-xl pb-12 flex flex-col overflow-y-auto"
                            >
                                <div class="px-4 pt-5 pb-2 flex">
                                    <button
                                        type="button"
                                        class="-m-2 p-2 rounded-md inline-flex items-center justify-center text-gray-400"
                                        @click="open = false"
                                    >
                                        <span class="sr-only">Close menu</span>
                                        <XIcon
                                            class="h-6 w-6"
                                            aria-hidden="true"
                                        />
                                    </button>
                                </div>

                                <!-- Links -->
                                <TabGroup as="div" class="mt-2">
                                    <div class="border-b border-gray-200">
                                        <TabList
                                            class="-mb-px flex px-4 space-x-8"
                                        >
                                            <Tab
                                                as="template"
                                                v-for="category in navigation.categories"
                                                :key="category.name"
                                                v-slot="{ selected }"
                                            >
                                                <button
                                                    :class="[
                                                        selected
                                                            ? 'text-brand-600 border-brand-600'
                                                            : 'text-gray-900 border-transparent',
                                                        'flex-1 whitespace-nowrap py-4 px-1 border-b-2 text-base font-medium',
                                                    ]"
                                                >
                                                    {{ category.name }}
                                                </button>
                                            </Tab>
                                        </TabList>
                                    </div>
                                    <TabPanels as="template">
                                        <TabPanel
                                            v-for="category in navigation.categories"
                                            :key="category.name"
                                            class="pt-10 pb-8 px-4 space-y-10"
                                        >
                                            <div class="space-y-4">
                                                <div
                                                    v-for="(
                                                        item, itemIdx
                                                    ) in category.featured"
                                                    :key="itemIdx"
                                                    class="group relative aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden"
                                                >
                                                    <img
                                                        :src="item.imageSrc"
                                                        :alt="item.imageAlt"
                                                        class="object-center object-cover group-hover:opacity-75"
                                                    />
                                                    <div
                                                        class="flex flex-col justify-end"
                                                    >
                                                        <div
                                                            class="p-4 bg-white bg-opacity-60 text-base sm:text-sm"
                                                        >
                                                            <a
                                                                :href="
                                                                    item.href
                                                                "
                                                                class="font-medium text-gray-900"
                                                            >
                                                                <span
                                                                    class="absolute inset-0"
                                                                    aria-hidden="true"
                                                                />
                                                                {{ item.name }}
                                                            </a>
                                                            <p
                                                                aria-hidden="true"
                                                                class="mt-0.5 text-gray-700 sm:mt-1"
                                                            >
                                                                Shop now
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                v-for="(
                                                    column, columnIdx
                                                ) in category.sections"
                                                :key="columnIdx"
                                                class="space-y-10"
                                            >
                                                <div
                                                    v-for="section in column"
                                                    :key="section.name"
                                                >
                                                    <p
                                                        :id="`${category.id}-${section.id}-heading-mobile`"
                                                        class="font-medium text-gray-900"
                                                    >
                                                        {{ section.name }}
                                                    </p>
                                                    <ul
                                                        role="list"
                                                        :aria-labelledby="`${category.id}-${section.id}-heading-mobile`"
                                                        class="mt-6 flex flex-col space-y-6"
                                                    >
                                                        <li
                                                            v-for="item in section.items"
                                                            :key="item.name"
                                                            class="flow-root"
                                                        >
                                                            <a
                                                                :href="
                                                                    item.href
                                                                "
                                                                class="-m-2 p-2 block text-gray-500"
                                                            >
                                                                {{ item.name }}
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </TabPanel>
                                    </TabPanels>
                                </TabGroup>

                                <div
                                    class="border-t border-gray-200 py-6 px-4 space-y-6"
                                >
                                    <div
                                        v-for="page in navigation.pages"
                                        :key="page.name"
                                        class="flow-root"
                                    >
                                        <a
                                            :href="page.href"
                                            class="-m-2 p-2 block font-medium text-gray-900"
                                            >{{ page.name }}</a
                                        >
                                    </div>
                                </div>

                                <div class="border-t border-gray-200 py-6 px-4">
                                    <a
                                        href="#"
                                        class="-m-2 p-2 flex items-center"
                                    >
                                        <img
                                            src="https://tailwindui.com/img/flags/flag-canada.svg"
                                            alt=""
                                            class="w-5 h-auto block flex-shrink-0"
                                        />
                                        <span
                                            class="ml-3 block text-base font-medium text-gray-900"
                                        >
                                            CAD
                                        </span>
                                        <span class="sr-only"
                                            >, change currency</span
                                        >
                                    </a>
                                </div>
                            </DialogPanel>
                        </TransitionChild>
                    </div>
                </Dialog>
            </TransitionRoot>

            <!-- Breadcrumbs -->
            <breadcrumbs :numOfItems="2" :homeRoute="route('msa.index')">
                <template #1> Muslim Student Associations </template>
                <template #2> {{ msa.school }} </template>
            </breadcrumbs>

            <main class="max-w-7xl mx-auto sm:pt-16 sm:px-6 lg:px-8">
                <div class="max-w-2xl mx-auto lg:max-w-none">
                    <!-- Product -->
                    <div
                        class="lg:grid lg:grid-cols-2 lg:gap-x-8 lg:items-start"
                    >
                        <!-- Image gallery -->
                        <TabGroup as="div" class="flex flex-col-reverse">
                            <!-- Image selector -->
                            <div
                                class="hidden mt-6 w-full max-w-2xl mx-auto sm:block lg:max-w-none"
                            >
                                <TabList class="grid grid-cols-4 gap-6">
                                    <Tab
                                        v-for="image in images"
                                        :key="image"
                                        class="relative h-24 bg-white rounded-md flex items-center justify-center text-sm font-medium uppercase text-gray-900 cursor-pointer hover:bg-gray-50 focus:outline-none focus:ring focus:ring-offset-4 focus:ring-opacity-50"
                                        v-slot="{ selected }"
                                    >
                                        <span class="sr-only">
                                            Cover photo for the MSA
                                        </span>
                                        <span
                                            class="absolute inset-0 rounded-md overflow-hidden"
                                        >
                                            <img
                                                :src="image"
                                                alt=""
                                                class="w-full h-full object-center object-cover"
                                            />
                                        </span>
                                        <span
                                            :class="[
                                                selected
                                                    ? 'ring-brand-500'
                                                    : 'ring-transparent',
                                                'absolute inset-0 rounded-md ring-2 ring-offset-2 pointer-events-none',
                                            ]"
                                            aria-hidden="true"
                                        />
                                    </Tab>
                                </TabList>
                            </div>

                            <TabPanels class="w-full aspect-w-1 aspect-h-1">
                                <TabPanel v-for="image in images" :key="image">
                                    <img
                                        :src="image"
                                        alt="Cover photo for the MSA"
                                        class="w-full h-full object-center object-cover sm:rounded-lg"
                                    />
                                </TabPanel>
                            </TabPanels>
                        </TabGroup>

                        <!-- Product info -->
                        <div class="mt-10 px-4 sm:px-0 sm:mt-16 lg:mt-0">
                            <page-title>{{ msa.name }}</page-title>

                            <div class="mt-3">
                                <h2 class="sr-only">Product information</h2>
                                <p class="font-serif text-3xl text-gray-900">
                                    {{ msa.school }}
                                </p>
                            </div>

                            <!-- Reviews -->
                            <div class="mt-3">
                                <page-subtitle color="brand">
                                    <a :href="`mailto:${msa.contact}`">
                                        <span
                                            class="uppercase text-sm font-extrabold"
                                            >Contact:</span
                                        >
                                        {{ msa.contact }}
                                    </a>
                                </page-subtitle>
                            </div>

                            <div class="mt-6">
                                <h3 class="sr-only">Description</h3>
                                <page-subtitle>
                                    {{ msa.description }}
                                </page-subtitle>
                            </div>

                            <form class="mt-6">
                                <div class="mt-10 flex sm:flex-col1">
                                    <primary-button>
                                        Support this MSA
                                    </primary-button>

                                    <!-- <button
                                        type="button"
                                        class="ml-4 py-3 px-3 rounded-md flex items-center justify-center text-gray-400 hover:bg-gray-100 hover:text-gray-500"
                                    >
                                        <HeartIcon
                                            class="h-6 w-6 flex-shrink-0"
                                            aria-hidden="true"
                                        />
                                        <span class="sr-only"
                                            >Add to favorites</span
                                        >
                                    </button> -->
                                </div>
                            </form>

                            <section
                                v-if="objectives.length"
                                aria-labelledby="details-heading"
                                class="mt-12"
                            >
                                <h2 id="details-heading" class="sr-only">
                                    Annual Objectives
                                </h2>

                                <div class="border-t divide-y divide-gray-200">
                                    <Disclosure as="div" v-slot="{ open }">
                                        <h3>
                                            <DisclosureButton
                                                class="group relative w-full py-6 flex justify-between items-center text-left"
                                            >
                                                <span
                                                    :class="[
                                                        open
                                                            ? 'text-brand-600'
                                                            : 'text-gray-900',
                                                        'text-sm font-medium',
                                                    ]"
                                                >
                                                    Annual Objectives
                                                </span>
                                                <span
                                                    class="ml-6 flex items-center"
                                                >
                                                    <PlusSmIcon
                                                        v-if="!open"
                                                        class="block h-6 w-6 text-gray-400 group-hover:text-gray-500"
                                                        aria-hidden="true"
                                                    />
                                                    <MinusSmIcon
                                                        v-else
                                                        class="block h-6 w-6 text-brand-400 group-hover:text-brand-500"
                                                        aria-hidden="true"
                                                    />
                                                </span>
                                            </DisclosureButton>
                                        </h3>
                                        <DisclosurePanel
                                            as="div"
                                            class="pb-6 prose prose-sm"
                                        >
                                            <ul role="list">
                                                <li
                                                    v-for="objective in objectives"
                                                    :key="objective"
                                                >
                                                    {{ objective }}
                                                </li>
                                            </ul>
                                        </DisclosurePanel>
                                    </Disclosure>
                                </div>
                            </section>
                        </div>
                    </div>

                    <!-- Section for Nearby MSA's -->
                    <section
                        aria-labelledby="related-heading"
                        class="mt-10 border-t border-gray-200 py-16 px-4 sm:px-0"
                    >
                        <!-- If there are nearby MSA's -->
                        <div v-if="nearbyMsas.length">
                            <h2
                                id="related-heading"
                                class="text-xl font-bold text-gray-900"
                            >
                                People also support
                            </h2>

                            <div
                                class="mt-8 grid grid-cols-1 gap-y-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8"
                            >
                                <Link
                                    v-for="msa in nearbyMsas"
                                    :key="msa.uuid"
                                    :href="route('msa.show', msa.uuid)"
                                    class="hover:scale-95 transition"
                                >
                                    <div class="relative">
                                        <div
                                            class="relative w-full h-72 rounded-lg overflow-hidden"
                                        >
                                            <img
                                                :src="msa.primary_image_url"
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
                                            <p
                                                class="relative text-lg font-semibold text-white"
                                            >
                                                {{ msa.school }}
                                            </p>
                                        </div>
                                    </div>
                                </Link>
                            </div>
                        </div>

                        <!-- If there are none -->
                        <h2
                            v-else
                            id="related-heading"
                            class="text-xl font-bold text-gray-900"
                        >
                            {{
                                `${msa.name} is the only MSA we have from ${msa.city}.`
                            }}
                        </h2>
                    </section>
                </div>
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

const open = ref(false);

const props = defineProps({
    msa: Object,
    nearbyMsas: Array,
    images: Array,
    objectives: Array,
});

const images = [props.msa.primary_image_url, ...props.images];
</script>
