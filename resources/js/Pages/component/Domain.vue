<script setup>

    import {useForm} from "@inertiajs/inertia-vue3";

    const domainForm= useForm({
        libelle:"",
        university_id:-1
    })

   const saveDomain=()=>{

    };
</script>

<template>
    <div class="flex flex-col items-center mt-8 px-6 py-8 md:h-screen lg:py-0 mb-8">
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0  dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <form @submit.prevent="saveDomain" class="space-y-4 md:space-y-6" action="#">
                    <div>
                        <label for="libelle" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                        <input type="text"  v-model="domainForm.libelle" name="libelle" id="libelle" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="DeMCollege" required="">
                    </div>
                    <div>
                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Universities</label>
                        <select name="category" id="category" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="science">IAI</option>
                            <option value="engineering">UCAO</option>
                            <option value="art">Walmart</option>
                            <!-- Ajoutez d'autres options selon vos besoins -->
                        </select>
                    </div>

                    <button type="submit" class="w-full text-white flex items-center justify-center bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        Save&nbsp;
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                        </svg>
                    </button>

                </form>
            </div>
        </div>
    </div>

</template>

<style scoped>

</style>
