<script setup>

</script>

<template>
    <div class="flex flex-row justify-center px-4 py-8">
        <div class="overflow-x-auto">
            <h1 class="text-center font-bold">List of Domain</h1>
            <table class="w-full">
                <thead>
                <tr class="bg-gray-700 text-white">
                    <th class="px-4 py-2 font-bold">libelle</th>
                    <th class="px-4 py-2 font-bold">university_name</th>
                    <th class="px-4 py-2 font-bold">Actions</th> <!-- Nouvelle colonne pour les actions -->
                </tr>
                </thead>
                <tbody class="bg-transparent">
                <tr>
                    <td class="px-4 py-2 font-semibold text-white">domain libelle</td>
                    <td class="px-4 py-2 font-semibold text-white">nomUniversity</td>
                    <td class="px-4 py-2">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Modifier
                        </button>
                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-2">
                            Supprimer
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="px-4 py-2 font-semibold text-white">domain libelle2</td>
                    <td class="px-4 py-2 font-semibold text-white">nomUniversity1</td>
                    <td class="px-4 py-2">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Modifier
                        </button>
                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-2">
                            Supprimer
                        </button>
                    </td>
                </tr>
                <!-- Ajoutez d'autres lignes selon votre besoin -->
                </tbody>
            </table>
        </div>
    </div>
</template>

<style scoped>

</style>
