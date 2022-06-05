<template>
    <div class="relative bg-white lg:mb-64">
        <div class="pt-10 bg-[#f5f7f8] sm:pt-16 lg:pt-0 lg:-mb-56">
            <div class="mx-auto lg:px-8">
                <div class="lg:grid lg:grid-cols-2 lg:gap-8 px-6">
                    <!-- Text -->
                    <div
                        class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 sm:text-center lg:px-0 lg:text-left lg:flex lg:items-center"
                    >
                        <div class="lg:py-24">
                            <p
                                class="hidden lg:block mt-3 text-base text-transparent sm:mt-5 sm:text-xl lg:text-lg xl:text-xl"
                            >
                                Anim aute id magna aliqua ad ad non deserunt
                                sunt. Qui irure qui Lorem cupidatat commodo.
                                Elit sunt amet fugiat veniam occaecat fugiat.
                            </p>
                            <h1
                                class="mt-4 text-4xl tracking-tight font-extrabold text-gray-800 sm:mt-5 sm:text-6xl lg:mt-6 xl:text-6xl"
                            >
                                Give back <br />
                                to your MSA
                            </h1>
                            <div class="mt-10 sm:mt-12">
                                <Link :href="route('msas')">
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
                    <div class="mt-12 -mb-16 sm:-mb-48 lg:m-0 lg:relative">
                        <div
                            class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:max-w-none lg:px-0"
                        >
                            <img
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
</template>
