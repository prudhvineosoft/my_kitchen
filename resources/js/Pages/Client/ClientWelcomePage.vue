<template>
    <WelcomeNav />
    <div class="bg-gray-900 min-h-screen">
        <div>
            <div
                class="flex justify-center bg-[url('images/partnerMobileWelcome.jpg')]  sm:dark:bg-[url('images/partnerWelcome.jpg')]   sm:flex sm:justify-center sm:items-center min-h-75">

                <div class="mt-32 sm:mt-0 text-center  text-white sm:w-8/12 md:w-9/12 ">
                    <h1 class="text-3xl  sm:text-3xl lg:text-5xl font-extrabold">Register your restaurant on <span
                            class="heading leading-relaxed">MealMate</span></h1>
                    <div class="text-center">
                        <p class="mt-5 text-xl sm:text-2xl font-bold">and get more customers
                        </p>
                    </div>

                    <div class="flex flex-wrap justify-center mt-16">
                        <button class="mt-3 w-96 rounded-lg p-2 bg-blue-500 text-lg">Register your restaurant</button>
                        <button class="mt-3 w-96 rounded-lg p-2 border border-blue-500 text-lg">Restaurant already
                            registered
                            login now
                        </button>
                    </div>
                </div>

            </div>
        </div>
        <div class="-mt-32 flex justify-center">
            <div class="bg-gray-700  w-11/12 sm:w-7/12 flex justify-center rounded-xl mb-10">
                <div class="text-center p-5">
                    <h1 class="my-3 text-white text-3xl">Why should you partner with MealMate ?</h1>
                    <p class="text-gray-200 text-lg">MealMate enables you to get 60% more revenue, 10x new customers and
                        boost your
                        brand visibility by
                        providing insights to improve your business.</p>
                    <div class="flex flex-wrap justify-center mt-6">
                        <div class="w-64 h-28 bg-gray-600 mx-2 mt-4 rounded-lg flex shadow-lg">
                            <div class="w-20 flex justify-center items-center">
                                <i class="fa-solid fa-earth-africa text-4xl text-blue-500"></i>
                            </div>
                            <div class="w-44  flex flex-col justify-center items-start">
                                <h1 class="text-2xl text-cyan-300">10000+ cities</h1>
                                <p class="text-xl text-gray-200">In India</p>
                            </div>
                        </div>
                        <div class="w-64 h-28 bg-gray-600 mx-2 mt-4 rounded-lg flex shadow-lg">
                            <div class="w-20 flex justify-center items-center">
                                <i class="fa-solid fa-store text-4xl text-blue-500"></i>
                            </div>
                            <div class="w-44  flex flex-col justify-center items-start">
                                <h1 class="text-2xl text-cyan-300">3 Lakh+ </h1>
                                <p class="text-xl text-gray-200">restaurants listing</p>
                            </div>
                        </div>
                        <div class="w-64 h-28 bg-gray-600 mx-2 mt-4 rounded-lg flex shadow-lg">
                            <div class="w-20 flex justify-center items-center">
                                <i class="fa-solid fa-calendar-check text-4xl text-blue-500"></i>
                            </div>
                            <div class="w-44  flex flex-col justify-center items-start">
                                <h1 class="text-2xl text-cyan-300">5.0 Crore+ </h1>
                                <p class="text-xl text-gray-200">monthly orders</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script setup>
import WelcomeNav from './WelcomeNav.vue';


</script>

<style lang="scss" scoped></style>
