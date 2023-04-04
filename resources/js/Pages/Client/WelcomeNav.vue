<template>
    <div class="bg-gray-400 font-sans leading-normal tracking-normal x">

        <nav class="flex items-center justify-between flex-wrap bg-gray-800 dark:bg-opacity-75 p-3 fixed w-full z-10 top-0">
            <Link :href="route('partner-with-us.index')">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
                <ApplicationLogo class="w-8 h-8" />
                <a class="text-white no-underline hover:text-white hover:no-underline">
                    <span class="text-2xl pl-2 heading"><i class="em em-grinning"></i> MealMate</span>
                    <span class="ml-1">For business</span>
                </a>
            </div>
            </Link>

            <div class="block lg:hidden">
                <button @click="toggleNav"
                    class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-white hover:border-white">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>

            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block pt-6 lg:pt-0" id="nav-content">

                <ul class="list-reset lg:flex justify-end flex-1 items-center">
                    <Link v-if="$page.props.auth.user" :href="route('dashboard')">
                    <li class="mr-3">
                        <a class="inline-block text-white no-underline hover:text-blue-400  px-4">Dashboard</a>
                    </li>
                    </Link>
                    <template v-else>

                        <Link :href="route('login')">
                        <li class="mr-3  border-y rounded-md  lg:border lg:p-1 lg:rounded-md p-2 lg:dark:bg-transparent ">
                            <a
                                :class="route().current('login') ? 'text-blue-500 inline-block  no-underline hover:text-blue-400  px-4' : 'text-white inline-block  no-underline hover:text-blue-400  px-4'">Login</a>
                        </li>
                        </Link>
                        <Link :href="route('register')">
                        <li class="mr-3  border-y rounded-md  lg:border lg:p-1 lg:rounded-md p-2 lg:dark:bg-transparent ">
                            <a
                                :class="route().current('register') ? 'inline-block text-blue-500 no-underline hover:text-blue-400  px-4' : 'inline-block text-white no-underline hover:text-blue-400  px-4'">Create
                                Account</a>
                        </li>
                        </Link>
                    </template>
                </ul>

            </div>
        </nav>
    </div>
</template>

<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import { Head, Link } from "@inertiajs/vue3";
import { ref, watch } from 'vue';
defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },

});
const isNavHidden = ref(true);

function toggleNav() {
    isNavHidden.value = !isNavHidden.value;
}


watch(
    isNavHidden,
    (newValue, oldValue) => {
        const navContent = document.getElementById('nav-content');
        if (navContent) {
            navContent.classList.toggle('hidden', newValue);
        }
    }
);
</script>

<style lang="scss" scoped></style>
