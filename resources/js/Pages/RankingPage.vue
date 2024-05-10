<script setup>
import NavBarApp from "@/Pages/component/NavBarApp.vue";
</script>

<template>
    <NavBarApp></NavBarApp>

    <section class="bg-gray-50 dark:bg-gray-800 text-white h-full font-body flex flex-col">

        <!-- Checkboxes pour le filtrage -->
        <div class="flex flex-row justify-center bg-gray-700 px-4 py-8">
            <div class="flex flex-row items-center">
                <h2 class="text-xl font-bold mb-4 text-white mt-4 mr-4">Criteria</h2>
                <div class="mb-4 mr-4">
                    <label class="inline-flex items-center">
                        <input type="checkbox" class="form-checkbox text-gray-300 border-gray-300">
                        <span class="ml-2 text-gray-300 hover:text-white">teaching quality</span>
                    </label>
                </div>
                <div class="mb-4 mr-4">
                    <label class="inline-flex items-center">
                        <input type="checkbox" class="form-checkbox text-gray-300 border-gray-300">
                        <span class="ml-2 text-gray-300 hover:text-white">teaching quality</span>
                    </label>
                </div>
                <div class="mb-4 mr-4">
                    <label class="inline-flex items-center">
                        <input type="checkbox" class="form-checkbox text-gray-300 border-gray-300">
                        <span class="ml-2 text-gray-300 hover:text-white">professionnal insert</span>
                    </label>
                </div>
                <div class="mb-4">
                    <label class="inline-flex items-center">
                        <input type="checkbox" class="form-checkbox text-gray-300 border-gray-300">
                        <span class="ml-2 text-gray-300 hover:text-white">infrastructure</span>
                    </label>
                </div>
                <!-- Ajoutez un autre checkbox selon votre besoin -->
            </div>

        </div>

        <!-- Liste des universités -->
        <div class="flex flex-row justify-center px-4 py-8">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                    <tr class="bg-gray-700 text-white">
                        <th class="px-4 py-2 font-bold">Nom</th>
                        <th class="px-4 py-2 font-bold">Description</th>
                        <th class="px-4 py-2 font-bold">Note</th>
                        <th class="px-4 py-2 font-bold">Nombre d'étoiles moyen</th>
                        <th class="px-4 py-2 font-bold">Nombre de commentaires</th>
                    </tr>
                    </thead>
                    <tbody class="bg-transparent">
                    <tr>
                        <td class="px-4 py-2 font-semibold text-white">Université 1</td>
                        <td class="px-4 py-2 font-semibold text-white">Description de l'université 1</td>
                        <td class="px-4 py-2 font-semibold text-white">4/5</td>
                        <td class="px-4 py-2 font-semibold text-white">4.2</td>
                        <td class="px-4 py-2 font-semibold text-white">10</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 font-semibold text-white">Université 2</td>
                        <td class="px-4 py-2 font-semibold text-white">Description de l'université 2</td>
                        <td class="px-4 py-2 font-semibold text-white">3.5/5</td>
                        <td class="px-4 py-2 font-semibold text-white">3.8</td>
                        <td class="px-4 py-2 font-semibold text-white">8</td>
                    </tr>
                    <!-- Ajoutez d'autres lignes selon votre besoin -->
                    </tbody>
                </table>
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
