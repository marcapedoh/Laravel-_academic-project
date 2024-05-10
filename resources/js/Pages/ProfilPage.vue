<script setup>

import FooterLand from "@/Pages/component/FooterLand.vue";
import NavBarApp from "@/Pages/component/NavBarApp.vue";
</script>

<template>
    <NavBarApp></NavBarApp>
    <section class="bg-gray-50 dark:bg-gray-900 min-h-screen flex flex-col items-center justify-center">
        <div class="flex flex-col md:flex-row mt-4 items-center justify-center px-6 py-8 mx-auto lg:py-0 dark:bg-gray-800">

            <!-- Photo de l'utilisateur -->
            <div class="relative w-full md:w-2/5 lg:w-1/5 mr-8 rounded-lg shadow dark:border dark:border-gray-700 mb-6 md:mr-6">
                <img src="https://img.freepik.com/photos-premium/icone-utilisateur-rond-isole-fond-blanc-rendu-3d-bleu-blanc_63135-3892.jpg"  alt="User Photo" class="w-full h-auto rounded-t-lg">
                <div class="absolute bottom-0 left-0 right-0 bg-transparent bg-opacity-50 p-2 flex justify-end">
                    <button class="text-white bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded-md mr-2">Modifier</button>
                    <button class="text-white bg-red-500 hover:bg-red-600 px-4 py-2 rounded-md">Annuler</button>
                </div>
            </div>


            <!-- Informations de l'utilisateur -->
            <div class="w-full md:w-3/5 lg:w-2/5 bg-gray-400 rounded-lg shadow dark:border dark:border-gray-700 mb-6 md:mb-0 md:ml-6">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8 flex flex-col justify-center">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-center text-gray-900 md:text-2xl dark:text-white">
                        Your Information
                    </h1>
                    <div class="items-end">
                        <label for="nom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Last name</label>
                        <input type="text" name="nom" id="nom" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Doe" required="">
                    </div>
                    <div>
                        <label for="nom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Last name</label>
                        <input type="text" name="nom" id="nom" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Doe" required="">
                    </div>
                    <div>
                        <label for="nom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Last name</label>
                        <input type="text" name="nom" id="nom" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Doe" required="">
                    </div>
                    <div>
                        <label for="nom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Last name</label>
                        <input type="text" name="nom" id="nom" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Doe" required="">
                    </div>

                </div>
            </div>
        </div>

        <!-- Domaines d'études de l'utilisateur -->
        <div class="w-full md:w-2/3 lg:w-1/3 bg-gray-700 m-2 rounded-lg shadow dark:border dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-center text-gray-900 md:text-2xl dark:text-white">
                    Your Study Domains
                </h1>
                <ul class="text-sm font-light text-gray-500 dark:text-gray-400">
                    <li>Domaine d'étude 1</li>
                    <li>Domaine d'étude 2</li>
                    <!-- Ajoutez d'autres domaines d'études de l'utilisateur ici -->
                </ul>
            </div>
        </div>
        <FooterLand></FooterLand>
    </section>


</template>

<style scoped>

</style>
