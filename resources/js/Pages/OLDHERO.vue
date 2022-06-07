<template>
    <!-- (its the new one) -->
    <div class="bg-white">
        <div class="relative bg-gray-900">
            <!-- Decorative image and overlay -->
            <div aria-hidden="true" class="absolute inset-0 overflow-hidden">
                <img
                    src="https://wmpeople.wm.edu/asset/index/muslim/2015grouppic"
                    alt="An MSA"
                    class="w-full h-full object-center object-cover"
                />
            </div>
            <div
                aria-hidden="true"
                class="absolute inset-0 bg-gray-900 opacity-50"
            />

            <div
                class="relative max-w-3xl mx-auto py-32 px-6 flex flex-col items-center text-center sm:py-64 lg:px-0"
            >
                <h1
                    class="text-4xl font-extrabold tracking-tight text-white lg:text-6xl"
                >
                    Give back <br />
                    to your MSA
                </h1>
                <p class="mt-4 text-xl text-white">
                    The new arrivals have, well, newly arrived. Check out the
                    latest options from our summer small-batch release while
                    they're still in stock.
                </p>
                <div class="mt-8">
                    <Link :href="route('msa.index')">
                        <primary-button size="xl" color="white">
                            Get started
                        </primary-button>
                    </Link>
                </div>
            </div>
        </div>
    </div>
</template>
