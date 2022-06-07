<template>
    <div class="bg-[#f5f7f8] bg-white mx-auto">
        <app-layout>
            <Head title="Welcome" />

            <!-- Hero -->
            <div class="relative bg-white lg:mb-64">
                <div class="pt-10 bg-[#f5f7f8] sm:pt-16 lg:pt-0 lg:-mb-56">
                    <div class="mx-auto lg:px-8">
                        <div
                            class="lg:grid lg:grid-cols-2 lg:gap-8 px-6 max-w-7xl mx-auto"
                        >
                            <!-- Text -->
                            <div
                                class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 sm:text-center lg:px-0 lg:text-left lg:flex lg:items-center"
                            >
                                <div class="lg:py-24">
                                    <p
                                        class="hidden lg:block mt-3 text-base text-transparent sm:mt-5 sm:text-xl lg:text-lg xl:text-xl"
                                    >
                                        Anim aute id magna aliqua ad ad non
                                        deserunt sunt. Qui irure qui Lorem
                                        cupidatat commodo. Elit sunt amet fugiat
                                        veniam occaecat fugiat.
                                    </p>
                                    <h1
                                        class="font-serif mt-4 text-4xl tracking-tight font-extrabold text-gray-800 sm:mt-5 sm:text-6xl lg:mt-6 xl:text-6xl"
                                    >
                                        Give back <br />
                                        to your MSA
                                    </h1>
                                    <div class="mt-10 sm:mt-12">
                                        <Link :href="route('msa.index')">
                                            <primary-button
                                                size="xl"
                                                class="mx-auto lg:mx-0"
                                            >
                                                Get started
                                            </primary-button>
                                        </Link>
                                    </div>
                                </div>
                            </div>

                            <!-- Image -->
                            <div
                                class="mt-12 -mb-16 sm:-mb-48 lg:m-0 lg:relative"
                            >
                                <div
                                    class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:max-w-none lg:px-0"
                                >
                                    <!-- @mousemove="tiltHeroImage" -->
                                    <img
                                        id="heroImage"
                                        class="w-full lg:mt-20 rounded-2xl aspect-square object-cover lg:absolute lg:inset-y-0 lg:left-0 lg:h-full lg:w-auto lg:max-w-none"
                                        src="https://wmpeople.wm.edu/asset/index/muslim/2015grouppic"
                                        alt="An MSA"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--  mt-32 -->
            <main class="bg-white mt-32">
                <div>
                    <div
                        class="max-w-7xl mx-auto py-24 sm:px-2 sm:py-32 lg:px-4"
                    >
                        <div class="max-w-2xl mx-auto px-4 lg:max-w-none">
                            <div class="max-w-3xl">
                                <h2
                                    class="font-serif text-4xl font-extrabold tracking-tight text-gray-900"
                                >
                                    Fundraising on GoFundMe takes just a few
                                    minutes
                                </h2>
                                <p class="mt-4 text-gray-500">
                                    Sagittis scelerisque nulla cursus in enim
                                    consectetur quam. Dictum urna sed
                                    consectetur neque tristique. Sagittis
                                    scelerisque nulla cursus in enim consectetur
                                    quam. Dictum urna sed consectetur neque
                                    tristique.
                                </p>
                            </div>
                            <div
                                class="mt-16 grid grid-cols-1 gap-y-10 gap-x-8 lg:grid-cols-3"
                            >
                                <div
                                    v-for="incentive in incentives"
                                    :key="incentive.name"
                                    class="sm:flex lg:block"
                                >
                                    <div class="sm:flex-shrink-0">
                                        <img
                                            class="w-16 h-16"
                                            :src="incentive.imageSrc"
                                            alt=""
                                        />
                                    </div>
                                    <div
                                        class="mt-4 sm:mt-0 sm:ml-6 lg:mt-6 lg:ml-0"
                                    >
                                        <h3
                                            class="text-sm font-medium text-gray-900"
                                        >
                                            {{ incentive.name }}
                                        </h3>
                                        <p class="mt-2 text-sm text-gray-500">
                                            {{ incentive.description }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial/stats section -->
                <div class="relative">
                    <div
                        class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:gap-24 lg:items-start"
                    >
                        <div class="relative sm:py-16 lg:py-0">
                            <div
                                aria-hidden="true"
                                class="hidden sm:block lg:absolute lg:inset-y-0 lg:right-0 lg:w-screen"
                            >
                                <div
                                    class="absolute inset-y-0 right-1/2 w-full bg-gray-50 rounded-r-3xl lg:right-72"
                                />
                                <svg
                                    class="absolute top-8 left-1/2 -ml-3 lg:-right-8 lg:left-auto lg:top-12"
                                    width="404"
                                    height="392"
                                    fill="none"
                                    viewBox="0 0 404 392"
                                >
                                    <defs>
                                        <pattern
                                            id="02f20b47-fd69-4224-a62a-4c9de5c763f7"
                                            x="0"
                                            y="0"
                                            width="20"
                                            height="20"
                                            patternUnits="userSpaceOnUse"
                                        >
                                            <rect
                                                x="0"
                                                y="0"
                                                width="4"
                                                height="4"
                                                class="text-gray-200"
                                                fill="currentColor"
                                            />
                                        </pattern>
                                    </defs>
                                    <rect
                                        width="404"
                                        height="392"
                                        fill="url(#02f20b47-fd69-4224-a62a-4c9de5c763f7)"
                                    />
                                </svg>
                            </div>
                            <div
                                class="relative mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-0 lg:max-w-none lg:py-20"
                            >
                                <!-- Testimonial card-->
                                <div
                                    class="relative pt-64 pb-10 rounded-2xl shadow-xl overflow-hidden"
                                >
                                    <img
                                        class="absolute inset-0 h-full w-full object-cover"
                                        src="https://images.unsplash.com/photo-1521510895919-46920266ddb3?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&fp-x=0.5&fp-y=0.6&fp-z=3&width=1440&height=1440&sat=-100"
                                        alt=""
                                    />
                                    <div
                                        class="absolute inset-0 bg-brand-500 mix-blend-multiply"
                                    />
                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-brand-600 via-brand-600 opacity-90"
                                    />
                                    <div class="relative px-8">
                                        <div>
                                            <img
                                                class="h-12"
                                                src="https://tailwindui.com/img/logos/workcation.svg?color=white"
                                                alt="Workcation"
                                            />
                                        </div>
                                        <blockquote class="mt-8">
                                            <div
                                                class="relative text-lg font-medium text-white md:flex-grow"
                                            >
                                                <svg
                                                    class="absolute top-0 left-0 transform -translate-x-3 -translate-y-2 h-8 w-8 text-brand-400"
                                                    fill="currentColor"
                                                    viewBox="0 0 32 32"
                                                    aria-hidden="true"
                                                >
                                                    <path
                                                        d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z"
                                                    />
                                                </svg>
                                                <p class="relative">
                                                    Tincidunt integer commodo,
                                                    cursus etiam aliquam neque,
                                                    et. Consectetur pretium in
                                                    volutpat, diam. Montes,
                                                    magna cursus nulla feugiat
                                                    dignissim id lobortis amet.
                                                </p>
                                            </div>

                                            <footer class="mt-4">
                                                <p
                                                    class="text-base font-semibold text-brand-200"
                                                >
                                                    Sarah Williams, CEO at
                                                    Workcation
                                                </p>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Content area -->
                        <div
                            class="relative mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-0"
                        >
                            <div class="pt-12 sm:pt-16 lg:pt-20">
                                <h2
                                    class="font-serif text-3xl text-gray-900 font-extrabold tracking-tight sm:text-4xl"
                                >
                                    On a mission to empower teams
                                </h2>
                                <div class="mt-6 text-gray-500 space-y-6">
                                    <p class="text-lg">
                                        Sagittis scelerisque nulla cursus in
                                        enim consectetur quam. Dictum urna sed
                                        consectetur neque tristique
                                        pellentesque. Blandit amet, sed aenean
                                        erat arcu morbi. Cursus faucibus nunc
                                        nisl netus morbi vel porttitor vitae ut.
                                        Amet vitae fames senectus vitae.
                                    </p>
                                    <p class="text-base leading-7">
                                        Sollicitudin tristique eros erat odio
                                        sed vitae, consequat turpis elementum.
                                        Lorem nibh vel, eget pretium arcu vitae.
                                        Eros eu viverra donec ut volutpat donec
                                        laoreet quam urna. Sollicitudin
                                        tristique eros erat odio sed vitae,
                                        consequat turpis elementum. Lorem nibh
                                        vel, eget pretium arcu vitae. Eros eu
                                        viverra donec ut volutpat donec laoreet
                                        quam urna.
                                    </p>
                                    <p class="text-base leading-7">
                                        Rhoncus nisl, libero egestas diam
                                        fermentum dui. At quis tincidunt vel
                                        ultricies. Vulputate aliquet velit
                                        faucibus semper. Pellentesque in
                                        venenatis vestibulum consectetur nibh
                                        id. In id ut tempus egestas. Enim sit
                                        aliquam nec, a. Morbi enim fermentum
                                        lacus in. Viverra.
                                    </p>
                                </div>
                            </div>

                            <!-- Stats section -->
                            <div class="mt-10">
                                <dl class="grid grid-cols-2 gap-x-4 gap-y-8">
                                    <div
                                        v-for="stat in stats"
                                        :key="stat.label"
                                        class="border-t-2 border-gray-100 pt-6"
                                    >
                                        <dt
                                            class="text-base font-medium text-gray-500"
                                        >
                                            {{ stat.label }}
                                        </dt>
                                        <dd
                                            class="text-3xl font-extrabold tracking-tight text-gray-900"
                                        >
                                            {{ stat.value }}
                                        </dd>
                                    </div>
                                </dl>
                                <div class="mt-10">
                                    <a
                                        href="#"
                                        class="text-base font-medium text-brand-500"
                                    >
                                        Learn more about how we're changing the
                                        world&nbsp&rarr;
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Logo cloud section -->
                <div class="mt-32">
                    <div
                        class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl"
                    >
                        <div
                            class="lg:grid lg:grid-cols-2 lg:gap-24 lg:items-center"
                        >
                            <div>
                                <h2
                                    class="font-serif text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl"
                                >
                                    Backed by world-renowned investors
                                </h2>
                                <p
                                    class="mt-6 max-w-3xl text-lg leading-7 text-gray-500"
                                >
                                    Sagittis scelerisque nulla cursus in enim
                                    consectetur quam. Dictum urna sed
                                    consectetur neque tristique pellentesque.
                                    Blandit amet, sed aenean erat arcu morbi.
                                    Cursus faucibus nunc nisl netus morbi vel
                                    porttitor vitae ut. Amet vitae fames
                                    senectus vitae.
                                </p>
                                <div class="mt-6">
                                    <a
                                        href="#"
                                        class="text-base font-medium text-brand-500"
                                    >
                                        Meet our investors and
                                        advisors&nbsp&rarr;
                                    </a>
                                </div>
                            </div>
                            <div
                                class="mt-12 grid grid-cols-2 gap-0.5 md:grid-cols-3 lg:mt-0 lg:grid-cols-2"
                            >
                                <div
                                    v-for="logo in logos"
                                    :key="logo.name"
                                    class="col-span-1 flex justify-center py-8 px-8 bg-gray-50"
                                >
                                    <img
                                        class="max-h-12"
                                        :src="logo.url"
                                        :alt="logo.name"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <!-- CTA section -->
            <div class="bg-white py-16 sm:py-24">
                <div class="relative sm:py-16">
                    <div aria-hidden="true" class="hidden sm:block">
                        <svg
                            class="absolute top-8 left-1/2 -ml-3"
                            width="404"
                            height="392"
                            fill="none"
                            viewBox="0 0 404 392"
                        >
                            <defs>
                                <pattern
                                    id="8228f071-bcee-4ec8-905a-2a059a2cc4fb"
                                    x="0"
                                    y="0"
                                    width="20"
                                    height="20"
                                    patternUnits="userSpaceOnUse"
                                >
                                    <rect
                                        x="0"
                                        y="0"
                                        width="4"
                                        height="4"
                                        class="text-gray-200"
                                        fill="currentColor"
                                    />
                                </pattern>
                            </defs>
                            <rect
                                width="404"
                                height="392"
                                fill="url(#8228f071-bcee-4ec8-905a-2a059a2cc4fb)"
                            />
                        </svg>
                    </div>
                    <div
                        class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:max-w-7xl lg:px-8"
                    >
                        <div
                            class="relative rounded-2xl px-6 py-10 bg-brand-600 overflow-hidden shadow-xl sm:px-12 sm:py-20"
                        >
                            <div
                                aria-hidden="true"
                                class="absolute inset-0 -mt-72 sm:-mt-32 md:mt-0"
                            >
                                <svg
                                    class="absolute inset-0 h-full w-full"
                                    preserveAspectRatio="xMidYMid slice"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 1463 360"
                                >
                                    <path
                                        class="text-brand-500 text-opacity-40"
                                        fill="currentColor"
                                        d="M-82.673 72l1761.849 472.086-134.327 501.315-1761.85-472.086z"
                                    />
                                    <path
                                        class="text-brand-700 text-opacity-40"
                                        fill="currentColor"
                                        d="M-217.088 544.086L1544.761 72l134.327 501.316-1761.849 472.086z"
                                    />
                                </svg>
                            </div>
                            <div class="relative">
                                <div class="sm:text-center">
                                    <h2
                                        class="text-3xl font-extrabold text-white tracking-tight sm:text-4xl"
                                    >
                                        Get notified when we&rsquo;re launching.
                                    </h2>
                                    <p
                                        class="mt-6 mx-auto max-w-2xl text-lg text-brand-200"
                                    >
                                        Sagittis scelerisque nulla cursus in
                                        enim consectetur quam. Dictum urna sed
                                        consectetur neque tristique
                                        pellentesque.
                                    </p>
                                </div>
                                <form
                                    action="#"
                                    class="mt-12 sm:mx-auto sm:max-w-lg sm:flex"
                                >
                                    <div class="min-w-0 flex-1">
                                        <label for="cta-email" class="sr-only"
                                            >Email address</label
                                        >
                                        <input
                                            id="cta-email"
                                            type="email"
                                            class="block w-full border border-transparent rounded-md px-5 py-3 text-base text-gray-900 placeholder-gray-500 shadow-sm focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-brand-600"
                                            placeholder="Enter your email"
                                        />
                                    </div>
                                    <div class="mt-4 sm:mt-0 sm:ml-3">
                                        <button
                                            type="submit"
                                            class="block w-full rounded-md border border-transparent px-5 py-3 bg-brand-500 text-base font-medium text-white shadow hover:bg-brand-400 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-brand-600 sm:px-10"
                                        >
                                            Notify me
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </app-layout>
    </div>
</template>

<script>
import { defineComponent } from "vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import { ChevronRightIcon, StarIcon } from "@heroicons/vue/solid";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import NavBar from "@/Components/navbar/NavBar.vue";
import AppLayout from "@/Layouts/AppLayout.vue";

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

    mounted() {
        window.addEventListener("scroll", this.checkVisible);
    },

    methods: {
        tiltHeroImage(event) {
            // console.log(event.offsetY);

            const heroImage = document.querySelector("#heroImage");
            const heroWidth = heroImage.getBoundingClientRect().width;

            let x = -event.offsetX / 50;
            if (x < heroWidth / 100) {
                // then we want the offset to be negative so it turns back
                x = -x;
            }

            let y = -event.offsetY / 50;
            if (y < heroWidth / 100) {
                // then we want the offset to be negative so it turns back
                y = -y;
            }

            console.log(`x: ${x}, y: ${y}`);

            // console.log((heroWidth / 2 + event.offsetX) / 50);

            // const x = (heroWidth / 2 + event.offsetX) / 50;
            // const y = (heroWidth / 2 + event.offsetY) / 50;

            var style = "rotateX(" + y + "deg) rotateY(" + x + "deg)";
            heroImage.style.transform = style;
            heroImage.style.webkitTransform = style;
            heroImage.style.mozTransform = style;
            heroImage.style.msTransform = style;
            heroImage.style.oTransform = style;
        },

        checkVisible(id) {
            const rect = document
                .querySelector("#header")
                .getBoundingClientRect();
            const viewHeight = Math.max(
                document.documentElement.clientHeight,
                window.innerHeight
            );
            const percentageAboveScreen =
                100 * ((viewHeight - rect.top) / rect.height);

            // dynamic width
            // if (percentageAboveScreen > 0 && percentageAboveScreen < 100) {
            let r = document.querySelector("#header");

            r.style.width = 85 + percentageAboveScreen / 10 + "%";
            r.style.borderRadius = "25px";
            // }

            return !(rect.bottom < 0 || rect.top - viewHeight >= 0);
        },
    },
});
</script>
