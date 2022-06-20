<template>
    <div class="border-b border-gray-200">
        <nav
            aria-label="Breadcrumb"
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"
        >
            <ol role="list" class="flex items-center space-x-4 py-4">
                <li
                    v-for="(item, idx) in numOfItems"
                    :key="idx"
                    class="text-md"
                >
                    <div
                        v-if="idx + 1 !== numOfItems"
                        class="flex items-center"
                    >
                        <Link
                            :href="homeRoute"
                            class="mr-4 text-md font-medium text-gray-900"
                        >
                            <slot :name="idx + 1" />
                        </Link>
                        <svg
                            viewBox="0 0 6 20"
                            xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true"
                            class="h-5 w-auto text-gray-300"
                        >
                            <path
                                d="M4.878 4.34H3.551L.27 16.532h1.327l3.281-12.19z"
                                fill="currentColor"
                            />
                        </svg>
                    </div>

                    <p
                        v-else
                        aria-current="page"
                        class="font-medium text-gray-500 hover:text-gray-600"
                    >
                        <slot :name="idx + 1" />
                    </p>
                </li>
            </ol>
        </nav>
    </div>

    <!-- <div class="border-b border-gray-200">
        <nav
            aria-label="Breadcrumb"
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"
        >
            <ol role="list" class="flex items-center space-x-4 py-4">
                <li>
                    <div class="flex items-center">
                        <Link
                            :href="route('msa.index')"
                            class="mr-4 text-md font-medium text-gray-900"
                        >
                            Muslim Student Associations
                        </Link>
                        <svg
                            viewBox="0 0 6 20"
                            xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true"
                            class="h-5 w-auto text-gray-300"
                        >
                            <path
                                d="M4.878 4.34H3.551L.27 16.532h1.327l3.281-12.19z"
                                fill="currentColor"
                            />
                        </svg>
                    </div>
                </li>
                <li class="text-md">
                    <p
                        aria-current="page"
                        class="font-medium text-gray-500 hover:text-gray-600"
                    >
                        {{ msa.school }}
                    </p>
                </li>
            </ol>
        </nav>
    </div> -->
</template>

<script>
import { defineComponent } from "vue";
import { Link } from "@inertiajs/inertia-vue3";

const items = ["Muslim Student Association", "Boston University"];

export default defineComponent({
    components: {
        Link,
    },

    props: ["numOfItems", "homeRoute"],

    setup() {
        return {
            items,
        };
    },
});
</script>
