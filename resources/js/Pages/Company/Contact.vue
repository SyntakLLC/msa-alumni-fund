<!-- This example requires Tailwind CSS v2.0+ -->
<template>
    <app-layout>
        <div class="bg-white">
            <div aria-hidden="true" class="relative">
                <img
                    src="https://images.unsplash.com/photo-1533090368676-1fd25485db88?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2669&q=80"
                    alt=""
                    class="w-full h-96 object-center object-cover"
                />
                <div class="absolute inset-0 bg-gradient-to-t from-white" />
            </div>

            <div
                class="relative -mt-12 max-w-7xl mx-auto pb-16 px-4 sm:pb-24 sm:px-6 lg:px-8"
            >
                <div class="max-w-2xl mx-auto text-center lg:max-w-4xl">
                    <page-title> Contact Us </page-title>
                    <page-subtitle>
                        Organize is a system to keep your desk tidy and
                        photo-worthy all day long. Procrastinate your work while
                        you meticulously arrange items into dedicated trays.
                    </page-subtitle>
                </div>

                <dl
                    class="mt-16 max-w-2xl mx-auto grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:max-w-none lg:grid-cols-3 lg:gap-x-8"
                >
                    <div
                        v-for="feature in features"
                        :key="feature.name"
                        class="border-t border-gray-200 pt-4"
                    >
                        <dt class="font-medium text-gray-900">
                            {{ feature.name }}
                        </dt>
                        <dd class="mt-2 text-sm text-gray-500">
                            {{ feature.description }}
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </app-layout>
</template>

<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import PageTitle from "@/Components/texts/PageTitle.vue";
import PageSubtitle from "@/Components/texts/PageSubtitle.vue";

const features = [
    { name: "Origin", description: "Designed by Good Goods, Inc." },
    {
        name: "Material",
        description:
            "Solid walnut base with rare earth magnets and polycarbonate add-ons.",
    },
    { name: "Dimensions", description: '15" x 3.75" x .75"' },
    {
        name: "Finish",
        description: "Hand sanded and finished with natural oil",
    },
    {
        name: "Includes",
        description:
            "Pen Tray, Phone Tray, Small Tray, Large Tray, Sticky Note Holder",
    },
    {
        name: "Considerations",
        description:
            "Made from natural materials. Grain and color vary with each item.",
    },
];
</script>
