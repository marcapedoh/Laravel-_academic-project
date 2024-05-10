<script setup>

import {Link} from "@inertiajs/vue3";
</script>

<template>
    <section class="bg-gray-50 dark:bg-gray-900 text-white font-body">
        <nav class="text-white">
            <div class="container mx-auto py-4 px-6 flex items-center justify-between ">
                <a href="/" id="navbar__logo" class="text-2xl font-bold flex items-center mr-8 ">
                    <img class="w-10 h-10 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
                    Universities
                </a>
                <ul id="navbar__menu" class="hidden lg:flex space-x-4">
                    <li class="navbar__item">
                        <Link href="/home" class="navbar__links">Comments</Link>
                    </li>
                    <li class="navbar__item">
                        <Link href="/Ranking" class="navbar__links">Ranking</Link>
                    </li>
                    <li class="navbar__item">
                        <Link href="/Universities" class="navbar__links">Universities</Link>
                    </li>
                    <li class="navbar__item">
                        <a href="" class="navbar__links">Notifications</a>
                    </li>
                </ul>
                <!-- icone avec texte -->
                <Link href="/profilPage">
                    <div class="flex items-center cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                        </svg>
                        <span class="ml-2">Profile</span>
                    </div>
                </Link>

            </div>
        </nav>
    </section>
</template>

<style scoped>

</style>
