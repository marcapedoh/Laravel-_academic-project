<script setup>

import {Link} from "@inertiajs/vue3";
</script>

<template>
    <nav class="text-white">
        <div class="container mx-auto py-4 px-6 flex items-center justify-between">
            <a href="/" id="navbar__logo" class="text-2xl font-bold flex items-center">
                <img class="w-10 h-10 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
                Universities
            </a>
            <div class="block lg:hidden">
                <button id="mobile-menu-toggle" class="flex items-center px-3 py-2 border rounded text-gray-200 border-gray-400 hover:text-white hover:border-white">
                    <span class="fas fa-bars"></span>
                </button>
            </div>
            <ul id="navbar__menu" class="hidden lg:flex space-x-4">
                <li class="navbar__item">
                    <Link href="/login" class="navbar__links">Login</Link>
                </li>
                <li class="navbar__item">
                    <Link href="/sign-Up" class="navbar__links">Sign Up</Link>
                </li>
            </ul>
        </div>
    </nav>
</template>

<style scoped>

</style>
