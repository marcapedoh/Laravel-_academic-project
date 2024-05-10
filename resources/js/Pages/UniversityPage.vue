<script setup>
import NavBarApp from "@/Pages/component/NavBarApp.vue";
</script>

<template>
    <NavBarApp></NavBarApp>
    <section class="bg-gray-50 dark:bg-gray-800 text-white h-full font-body flex flex-col">
        <div class="grid gap-8 md:grid-cols-2 m-4 p-2">
            <div class="card bg-gray-900 text-white p-8 rounded-lg cursor-pointer transition duration-300 ease-in-out hover:shadow-lg hover:border-gray-800">
                <span class="icon bg-green-500 rounded-full p-2 inline-block">
                  <svg class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M14.5 3.5C14.5 3.5 14.5 5.5 12 5.5C9.5 5.5 9.5 3.5 9.5 3.5H7.5L4.20711 6.79289C3.81658 7.18342 3.81658 7.81658 4.20711 8.20711L6.5 10.5V20.5H17.5V10.5L19.7929 8.20711C20.1834 7.81658 20.1834 7.18342 19.7929 6.79289L16.5 3.5H14.5Z" />
                  </svg>
                </span>
                <h4 class="font-semibold text-lg mb-2">Products</h4>
                <p class="text-sm">Standard chunk of Lorem Ipsum used since the 1500s is showed below for those interested.</p>
                <div class="shine"></div>
                <div class="background">
                    <div class="tiles">
                        <div class="tile tile-1"></div>
                        <div class="tile tile-2"></div>
                        <div class="tile tile-3"></div>
                        <div class="tile tile-4"></div>

                        <div class="tile tile-5"></div>
                        <div class="tile tile-6"></div>
                        <div class="tile tile-7"></div>
                        <div class="tile tile-8"></div>

                        <div class="tile tile-9"></div>
                        <div class="tile tile-10"></div>
                    </div>
                    <div class="line line-1"></div>
                    <div class="line line-2"></div>
                    <div class="line line-3"></div>
                </div>
                <!-- Étoiles -->
                <div class="flex items-center mt-2">
                    <!-- Ajoutez vos étoiles ici -->
                    <svg class="w-4 h-4 fill-current text-yellow-500" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 16.33L15.47 19l-1.64-6.03L20 7.69l-6.77-.49L10 1 7.77 7.2 1 7.69l5.17 4.28L4.53 19z" clip-rule="evenodd" />
                    </svg>
                    <svg class="w-4 h-4 fill-current text-yellow-500" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 16.33L15.47 19l-1.64-6.03L20 7.69l-6.77-.49L10 1 7.77 7.2 1 7.69l5.17 4.28L4.53 19z" clip-rule="evenodd" />
                    </svg>
                    <svg class="w-4 h-4 fill-current text-yellow-500" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 16.33L15.47 19l-1.64-6.03L20 7.69l-6.77-.49L10 1 7.77 7.2 1 7.69l5.17 4.28L4.53 19z" clip-rule="evenodd" />
                    </svg>
                    <svg class="w-4 h-4 fill-current text-yellow-500" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 16.33L15.47 19l-1.64-6.03L20 7.69l-6.77-.49L10 1 7.77 7.2 1 7.69l5.17 4.28L4.53 19z" clip-rule="evenodd" />
                    </svg>
                    <svg class="w-4 h-4 fill-current text-yellow-500" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 16.33L15.47 19l-1.64-6.03L20 7.69l-6.77-.49L10 1 7.77 7.2 1 7.69l5.17 4.28L4.53 19z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
            <div class="card bg-gray-900 text-white p-8 rounded-lg cursor-pointer transition duration-300 ease-in-out hover:shadow-lg hover:border-gray-800">
                <span class="icon bg-blue-500 rounded-full p-2 inline-block">
                  <svg class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4.5 9.5V5.5C4.5 4.94772 4.94772 4.5 5.5 4.5H9.5C10.0523 4.5 10.5 4.94772 10.5 5.5V9.5C10.5 10.0523 10.0523 10.5 9.5 10.5H5.5C4.94772 10.5 4.5 10.0523 4.5 9.5Z" />
                    <path d="M13.5 18.5V14.5C13.5 13.9477 13.9477 13.5 14.5 13.5H18.5C19.0523 13.5 19.5 13.9477 19.5 14.5V18.5C19.5 19.0523 19.0523 19.5 18.5 19.5H14.5C13.9477 19.5 13.5 19.0523 13.5 18.5Z" />
                    <path d="M4.5 19.5L7.5 13.5L10.5 19.5H4.5Z" />
                    <path d="M16.5 4.5C18.1569 4.5 19.5 5.84315 19.5 7.5C19.5 9.15685 18.1569 10.5 16.5 10.5C14.8431 10.5 13.5 9.15685 13.5 7.5C13.5 5.84315 14.8431 4.5 16.5 4.5Z" />
                  </svg>
                </span>
                <h4 class="font-semibold text-lg mb-2">Categories</h4>
                <p class="text-sm">Standard chunk of Lorem Ipsum used since the 1500s is showed below for those interested.</p>
                <div class="shine"></div>
                <div class="background">
                    <div class="tiles">
                        <!-- Tiles -->
                    </div>
                    <div class="line line-1 bg-gray-600 h-0.5 w-full rounded-full opacity-0 transition-opacity duration-300"></div>
                    <div class="line line-2 bg-gray-600 h-0.5 w-full rounded-full opacity-0 transition-opacity duration-300"></div>
                    <div class="line line-3 bg-gray-600 h-0.5 w-full rounded-full opacity-0 transition-opacity duration-300"></div>
                </div>
                <!-- Étoiles -->
                <div class="flex items-center mt-2">
                    <!-- Ajoutez vos étoiles ici -->
                    <svg class="w-4 h-4 fill-current text-yellow-500" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 16.33L15.47 19l-1.64-6.03L20 7.69l-6.77-.49L10 1 7.77 7.2 1 7.69l5.17 4.28L4.53 19z" clip-rule="evenodd" />
                    </svg>
                    <svg class="w-4 h-4 fill-current text-yellow-500" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 16.33L15.47 19l-1.64-6.03L20 7.69l-6.77-.49L10 1 7.77 7.2 1 7.69l5.17 4.28L4.53 19z" clip-rule="evenodd" />
                    </svg>
                    <svg class="w-4 h-4 fill-current text-yellow-500" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 16.33L15.47 19l-1.64-6.03L20 7.69l-6.77-.49L10 1 7.77 7.2 1 7.69l5.17 4.28L4.53 19z" clip-rule="evenodd" />
                    </svg>
                    <svg class="w-4 h-4 fill-current text-yellow-500" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 16.33L15.47 19l-1.64-6.03L20 7.69l-6.77-.49L10 1 7.77 7.2 1 7.69l5.17 4.28L4.53 19z" clip-rule="evenodd" />
                    </svg>
                    <svg class="w-4 h-4 fill-current text-yellow-500" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 16.33L15.47 19l-1.64-6.03L20 7.69l-6.77-.49L10 1 7.77 7.2 1 7.69l5.17 4.28L4.53 19z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer__container  fixed bottom-0 left-0 right-0 text-white py-12 flex justify-center items-center bg-gray-900">
            <div class="container mx-auto px-6">
                <p class="text-xl text-center">Universities 2024. All rights reserved</p>
            </div>
        </div>
    </section>

</template>

<style scoped>
</style>

