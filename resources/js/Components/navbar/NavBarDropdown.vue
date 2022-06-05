<template>
    <transition
        enter-active-class="transition ease-out duration-200"
        enter-from-class="opacity-0 translate-y-1"
        enter-to-class="opacity-100 translate-y-0"
        leave-active-class="transition ease-in duration-150"
        leave-from-class="opacity-100 translate-y-0"
        leave-to-class="opacity-0 translate-y-1">
        <PopoverPanel
            class="absolute z-10 left-1/2 transform -translate-x-1/2 mt-3 px-2 w-screen max-w-md sm:px-0">
            <div
                class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                <div
                    class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                    <a
                        v-for="item in resources"
                        :key="item.name"
                        :href="item.href"
                        class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                        <component
                            :is="item.icon"
                            class="flex-shrink-0 h-6 w-6 text-gray-600"
                            aria-hidden="true" />
                        <div class="ml-4">
                            <p class="text-base font-medium text-gray-900">
                                {{ item.name }}
                            </p>
                            <p class="mt-1 text-sm text-gray-500">
                                {{ item.description }}
                            </p>
                        </div>
                    </a>
                </div>
                <div class="px-5 py-5 bg-gray-50 sm:px-8 sm:py-8">
                    <div>
                        <h3
                            class="text-sm tracking-wide font-medium text-gray-500 uppercase">
                            Recent Posts
                        </h3>
                        <ul role="list" class="mt-4 space-y-4">
                            <li
                                v-for="post in recentPosts"
                                :key="post.id"
                                class="text-base truncate">
                                <a
                                    :href="post.href"
                                    class="font-medium text-gray-900 hover:text-gray-700">
                                    {{ post.name }}
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-5 text-sm">
                        <a
                            href="#"
                            class="font-medium text-gray-300-600 hover:text-gray-300-500">
                            View all posts
                            <span aria-hidden="true">&rarr;</span></a
                        >
                    </div>
                </div>
            </div>
        </PopoverPanel>
    </transition>
</template>

<script>
    import { PopoverPanel } from '@headlessui/vue';

    export default {
        components: {
            PopoverPanel,
        },

        props: ['resources', 'recentPosts'],
    };
</script>
