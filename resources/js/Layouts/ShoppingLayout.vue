<template>
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
                        <div class="px-4 flex items-center justify-between">
                            <h2 class="text-lg font-medium text-gray-900">
                                Filters
                            </h2>
                            <button
                                type="button"
                                class="-mr-2 w-10 h-10 p-2 flex items-center justify-center text-gray-400 hover:text-gray-500"
                                @click="mobileFiltersOpen = false"
                            >
                                <span class="sr-only">Close menu</span>
                                <XIcon class="h-6 w-6" aria-hidden="true" />
                            </button>
                        </div>

                        <!-- Filters -->
                        <form class="mt-4">
                            <Disclosure
                                as="div"
                                v-for="section in filters"
                                :key="section.name"
                                class="border-t border-gray-200 pt-4 pb-4"
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
                                                        false
                                                            ? '-rotate-180'
                                                            : 'rotate-0',
                                                        'h-5 w-5 transform',
                                                    ]"
                                                    aria-hidden="true"
                                                />
                                            </span>
                                        </DisclosureButton>
                                    </legend>
                                    <DisclosurePanel class="pt-4 pb-2 px-4">
                                        <div class="space-y-6">
                                            <div
                                                v-for="(
                                                    option, optionIdx
                                                ) in cityFilters"
                                                :key="option.value"
                                                class="flex items-center"
                                            >
                                                <input
                                                    :id="`${section.id}-${optionIdx}-mobile`"
                                                    :name="`${section.id}[]`"
                                                    :value="option.value"
                                                    type="checkbox"
                                                    v-model="
                                                        cityFilters[optionIdx]
                                                            .checked
                                                    "
                                                    class="h-4 w-4 border-gray-300 rounded text-brand-600 focus:ring-brand-500"
                                                />
                                                <label
                                                    :for="`${section.id}-${optionIdx}-mobile`"
                                                    class="ml-3 text-sm text-gray-500"
                                                >
                                                    {{ option.label }}
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

    <!-- Desktop -->
    <div class="pt-12 pb-24 lg:grid lg:grid-cols-4 lg:gap-x-8 xl:grid-cols-5">
        <!-- Filters sidebar -->
        <aside>
            <h2 class="sr-only">Filters</h2>

            <button
                type="button"
                class="inline-flex items-center lg:hidden"
                @click="mobileFiltersOpen = true"
            >
                <span class="text-sm font-medium text-gray-700">Filters</span>
                <PlusSmIcon
                    class="flex-shrink-0 ml-1 h-5 w-5 text-gray-400"
                    aria-hidden="true"
                />
            </button>

            <div class="hidden lg:block">
                <form class="divide-y divide-gray-200 space-y-10">
                    <div
                        v-for="(section, sectionIdx) in filters"
                        :key="section.name"
                        :class="sectionIdx === 0 ? null : 'pt-10'"
                    >
                        <fieldset>
                            <legend
                                class="block text-sm font-medium text-gray-900"
                            >
                                {{ section.name }}
                            </legend>
                            <div class="pt-6 space-y-3">
                                <div
                                    v-for="(option, optionIdx) in cityFilters"
                                    :key="option.value"
                                    class="flex items-center"
                                >
                                    <input
                                        :id="`${section.id}-${optionIdx}`"
                                        :name="`${section.id}[]`"
                                        type="checkbox"
                                        v-model="cityFilters[optionIdx].checked"
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
            <h2 id="product-heading" class="sr-only">Products</h2>

            <div
                v-if="products.length"
                class="grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:gap-x-6 sm:gap-y-10 lg:gap-x-8 xl:grid-cols-3"
            >
                <slot name="product" />
            </div>

            <div v-else class="text-center">
                <slot name="emptyState" />
            </div>
        </section>
    </div>
</template>

<script>
import { defineComponent } from "vue";
import { ChevronDownIcon, PlusSmIcon, PlusIcon } from "@heroicons/vue/solid";
import {
    TransitionRoot,
    Dialog,
    TransitionChild,
    DialogPanel,
    Disclosure,
    DisclosureButton,
    DisclosurePanel,
} from "@headlessui/vue";

export default defineComponent({
    components: {
        PlusSmIcon,
        PlusIcon,
        ChevronDownIcon,
        Dialog,
        DialogPanel,
        Disclosure,
        DisclosureButton,
        DisclosurePanel,
        TransitionChild,
        TransitionRoot,
    },

    props: ["products", "filters", "cityFilters"],

    data() {
        return {
            mobileFiltersOpen: false,
        };
    },
});
</script>
