<template>
    <div class="max-w-2xl mx-auto lg:max-w-none">
        <!-- Product -->
        <div class="lg:grid lg:grid-cols-2 lg:gap-x-8 lg:items-start mb-10">
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
                <page-title>
                    <slot name="title" />
                </page-title>

                <div class="mt-3">
                    <h2 class="sr-only">Product information</h2>
                    <p class="text-2xl text-gray-900">
                        <slot name="subtitle" />
                    </p>
                </div>

                <!-- Reviews -->
                <!-- <div class="mt-3">
                    <slot name="reviews" />
                </div> -->

                <div class="mt-6">
                    <h3 class="sr-only">Description</h3>
                    <page-subtitle>
                        <slot name="description" />
                    </page-subtitle>
                </div>

                <form class="mt-6">
                    <div class="mt-10 flex sm:flex-col1">
                        <slot name="action" />
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
                    v-if="expandContent.length"
                    aria-labelledby="details-heading"
                    class="mt-12"
                >
                    <h2 id="details-heading" class="sr-only">
                        <slot name="expandSectionTitle" />
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
                                            'text-lg font-medium',
                                        ]"
                                    >
                                        <slot name="expandSectionTitle" />
                                    </span>
                                    <span class="ml-6 flex items-center">
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
                                class="pb-6 prose prose-md"
                            >
                                <ul role="list">
                                    <li
                                        v-for="objective in expandContent"
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
    </div>
</template>

<script>
import { defineComponent } from "vue";
import {
    Disclosure,
    DisclosureButton,
    DisclosurePanel,
    Tab,
    TabGroup,
    TabList,
    TabPanel,
    TabPanels,
} from "@headlessui/vue";
import { MinusSmIcon, PlusSmIcon } from "@heroicons/vue/outline";
import PageTitle from "@/Components/texts/PageTitle.vue";
import PageSubtitle from "@/Components/texts/PageSubtitle.vue";

export default defineComponent({
    components: {
        Disclosure,
        DisclosureButton,
        DisclosurePanel,
        Tab,
        TabGroup,
        TabList,
        TabPanel,
        TabPanels,
        PageTitle,
        PageSubtitle,
        MinusSmIcon,
        PlusSmIcon,
    },

    props: ["images", "expandContent"],
});
</script>
