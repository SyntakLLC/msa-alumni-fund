<template>
    <app-layout>
        <Head title="Welcome" />

        <!-- Hero -->
        <hero-layout-image-offset
            imageUrl="https://wmpeople.wm.edu/asset/index/muslim/2015grouppic"
        >
            <hero-title>
                Give back <br />
                to your MSA
            </hero-title>

            <div class="mt-10 sm:mt-12">
                <Link :href="route('msa.index')">
                    <primary-button size="xl" class="mx-auto lg:mx-0">
                        Get started
                    </primary-button>
                </Link>
            </div>
        </hero-layout-image-offset>

        <main class="bg-white mt-32">
            <!-- Features section -->
            <three-icons-features-section :incentives="incentives">
                <template #title>
                    Fundraising on GoFundMe takes just a few minutes
                </template>

                <template #content>
                    Sagittis scelerisque nulla cursus in enim consectetur quam.
                    Dictum urna sed consectetur neque tristique. Sagittis
                    scelerisque nulla cursus in enim consectetur quam. Dictum
                    urna sed consectetur neque tristique.
                </template>
            </three-icons-features-section>

            <!-- Testimonial/stats section -->
            <testimonial-with-story
                imageUrl="https://images.unsplash.com/photo-1521510895919-46920266ddb3?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&fp-x=0.5&fp-y=0.6&fp-z=3&width=1440&height=1440&sat=-100"
            >
                <template #storyTitle> On a mission to empower teams </template>

                <template #storyContent>
                    <p class="text-lg">
                        Sagittis scelerisque nulla cursus in enim consectetur
                        quam. Dictum urna sed consectetur neque tristique
                        pellentesque. Blandit amet, sed aenean erat arcu morbi.
                        Cursus faucibus nunc nisl netus morbi vel porttitor
                        vitae ut. Amet vitae fames senectus vitae.
                    </p>
                    <p class="text-base leading-7">
                        Sollicitudin tristique eros erat odio sed vitae,
                        consequat turpis elementum. Lorem nibh vel, eget pretium
                        arcu vitae. Eros eu viverra donec ut volutpat donec
                        laoreet quam urna. Sollicitudin tristique eros erat odio
                        sed vitae, consequat turpis elementum. Lorem nibh vel,
                        eget pretium arcu vitae. Eros eu viverra donec ut
                        volutpat donec laoreet quam urna.
                    </p>
                    <p class="text-base leading-7">
                        Rhoncus nisl, libero egestas diam fermentum dui. At quis
                        tincidunt vel ultricies. Vulputate aliquet velit
                        faucibus semper. Pellentesque in venenatis vestibulum
                        consectetur nibh id. In id ut tempus egestas. Enim sit
                        aliquam nec, a. Morbi enim fermentum lacus in. Viverra.
                    </p>
                </template>

                <template #learnMore>
                    <a href="#" class="text-base font-medium text-brand-500">
                        Learn more about how we're changing the world&nbsp&rarr;
                    </a>
                </template>
            </testimonial-with-story>

            <!-- CTA section -->
            <brand-cta-card>
                <template #title>
                    Get notified when we&rsquo;re launching.
                </template>

                <template #content>
                    Sagittis scelerisque nulla cursus in enim consectetur quam.
                    Dictum urna sed consectetur neque tristique pellentesque.
                </template>
            </brand-cta-card>
        </main>
    </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import { ChevronRightIcon, StarIcon } from "@heroicons/vue/solid";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import NavBar from "@/Components/navbar/NavBar.vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import HeroLayoutImageOffset from "@/Layouts/ui/HeroLayoutImageOffset.vue";
import HeroTitle from "@/Components/texts/HeroTitle.vue";
import ThreeIconsFeaturesSection from "@/Components/marketing/ThreeIconsFeaturesSection.vue";
import TestimonialWithStory from "@/Components/marketing/TestimonialWithStory.vue";
import BrandCtaCard from "@/Components/marketing/BrandCtaCard.vue";

const incentives = [
    {
        name: "Free shipping",
        imageSrc:
            "https://tailwindui.com/img/ecommerce/icons/icon-shipping-simple.svg",
        description:
            "Sagittis scelerisque nulla cursus in enim consectetur quam. Dictum urna sed consectetur neque tristique.",
    },
    {
        name: "10-year warranty",
        imageSrc:
            "https://tailwindui.com/img/ecommerce/icons/icon-warranty-simple.svg",
        description:
            "Sagittis scelerisque nulla cursus in enim consectetur quam. Dictum urna sed consectetur neque tristique.",
    },
    {
        name: "Exchanges",
        imageSrc:
            "https://tailwindui.com/img/ecommerce/icons/icon-exchange-simple.svg",
        description:
            "Sagittis scelerisque nulla cursus in enim consectetur quam. Dictum urna sed consectetur neque tristique.",
    },
];

export default defineComponent({
    components: {
        ChevronRightIcon,
        StarIcon,
        Head,
        Link,
        PrimaryButton,
        NavBar,
        AppLayout,
        HeroLayoutImageOffset,
        HeroTitle,
        ThreeIconsFeaturesSection,
        TestimonialWithStory,
        BrandCtaCard,
    },

    props: {
        canLogin: Boolean,
        canRegister: Boolean,
        laravelVersion: String,
        phpVersion: String,
    },

    setup() {
        return {
            incentives,
        };
    },
});
</script>
