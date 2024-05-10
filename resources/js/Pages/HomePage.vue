<script setup>
import {Link} from "@inertiajs/vue3";
import NavBarApp from "@/Pages/component/NavBarApp.vue";
</script>

<template>
    <NavBarApp></NavBarApp>
    <section class="bg-gray-50 dark:bg-gray-800 text-white h-full font-body flex flex-row">
        <!-- Menu à gauche -->
        <div class="w-1/6 bg-gray-700 px-4 py-8 h-full flex flex-col">
            <!-- Ajoutez ici votre liste d'universités -->
            <h2 class="text-xl font-bold mb-4 text-white mt-4 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                </svg> &nbsp;
                Universities
            </h2>
            <ul class="mb-4">
                <li class="mb-2">
                    <a href="#" class="text-gray-300 hover:text-white">University 1</a>
                </li>
                <li class="mb-2">
                    <a href="#" class="text-gray-300 hover:text-white">University 2</a>
                </li>
                <!-- Ajoutez d'autres éléments de liste selon votre besoin -->
            </ul>
        </div>
        <!-- Commentaires au centre -->
        <div class="w-4/5 px-4 py-8">
            <div class="max-w-lg mx-auto bg-white rounded-lg shadow-md p-6 mb-4 dark:bg-gray-700 dark:text-white">
                <div class="flex items-center mb-4">
                    <img class="w-10 h-10 rounded-full mr-4" alt="User Avatar">
                    <div>
                        <h3 class="font-bold text-gray-900 dark:text-white flex items-center">John Doe &nbsp;
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                            </svg>

                        </h3>
                        <p class="text-gray-600 dark:text-gray-400">April 24, 2024</p>
                    </div>
                </div>
                <p class="text-gray-700 dark:text-gray-300">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et magna leo. Nulla non finibus nisi, nec ultricies velit. Aenean id efficitur orci.</p>
            </div>
            <!-- Footer -->
            <div class="footer__container fixed bottom-0 left-0 right-0 text-white py-12 flex justify-center items-center ">
                <div class="container mx-auto px-6">
                    <p class="text-xl text-center">Universities 2024. All rights reserved</p>
                </div>
            </div>
        </div>

        <!-- Menu à droite -->
        <div class="w-1/6 bg-gray-700 px-4 py-8 h-full flex flex-col overflow-y-auto">
            <!-- Ajoutez ici votre liste d'options -->
            <h2 class="text-xl font-bold mb-4 text-white mt-4 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 0 0 6 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0 1 18 16.5h-2.25m-7.5 0h7.5m-7.5 0-1 3m8.5-3 1 3m0 0 .5 1.5m-.5-1.5h-9.5m0 0-.5 1.5m.75-9 3-3 2.148 2.148A12.061 12.061 0 0 1 16.5 7.605" />
                </svg>&nbsp;
                Domains
            </h2>
            <ul class="mb-4">
                <li class="mb-2">
                    <a href="#" class="text-gray-300 hover:text-white">Domain 1</a>
                </li>
                <li class="mb-2">
                    <a href="#" class="text-gray-300 hover:text-white">Domain 2</a>
                </li>
                <li class="mb-2 flex items-center">
                    <a href="#" class="text-gray-300 hover:text-white font-bold">
                        Add new domain
                    </a>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </li>
            </ul>
        </div>
    </section>


</template>

