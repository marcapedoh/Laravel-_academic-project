<script setup>

    import NavBardAdmin from "../Pages/component/NavBardAdmin.vue";
    import {ref} from "vue";
    import FormToPersist from "../Pages/component/FormToPersist.vue";
    import Domain from "../Pages/component/Domain.vue";
    import CollectionDomain from "../Pages/component/CollectionDomain.vue";
    import CommentCollection from "../Pages/component/CommentCollection.vue";

    import {Link} from "@inertiajs/vue3";
    import {useForm} from "@inertiajs/inertia-vue3";
    import {Inertia} from "@inertiajs/inertia";
    import {route} from "ziggy-js";


    const showForm= ref(false);
    const showCollection= ref(false);
    const showDomainform= ref(false);
    const showDomainCollection= ref(false);
    const showCommentCollectionValue= ref(false);
    const showCreateUniversityForm= ()=>{
        showForm.value=true;
    }
    const showUniversityCollection= ()=>{
        showForm.value=false;
        showCollection.value=true;
    }
    const showDomainForms= ()=>{
        showForm.value=false;
        showCollection.value=false;
        showDomainform.value=true;
    }

    const showDomainsCollection= ()=>{
        showForm.value=false;
        showCollection.value=false;
        showDomainform.value=false;
        showDomainCollection.value=true;
    }

    const showCommentCollection= ()=>{
        showForm.value=false;
        showCollection.value=false;
        showDomainform.value=false;
        showDomainCollection.value=false;
        showCommentCollectionValue.value=true;
    }
    defineProps({
        universities: Array
    });
    const form = useForm({});
    const deleteUniversity=(id)=>{
        Inertia.delete(route("universities.delete",{university:id}));
    };

</script>

<template>
    <NavBardAdmin></NavBardAdmin>
    <section class="bg-gray-50 dark:bg-gray-800 text-white h-full font-body flex flex-row">
        <!-- Menu à gauche -->
        <div class="w-1/6 bg-gray-700 px-4 py-8 h-full flex flex-col">
            <!-- Ajoutez ici votre liste des fonctionnalités -->
            <h2 class="text-xl font-bold mb-4 text-white mt-4">Management</h2>
            <ul class="mb-4">
                <li class=" flex items-center mb-2 cursor-pointer" @click="showCreateUniversityForm">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                    </svg>&nbsp;
                    <a class="text-gray-300 hover:text-white">Create University</a>
                </li>
                <li class="flex items-center ml-3 mb-2 cursor-pointer"  @click="showUniversityCollection">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 7.5h-.75A2.25 2.25 0 0 0 4.5 9.75v7.5a2.25 2.25 0 0 0 2.25 2.25h7.5a2.25 2.25 0 0 0 2.25-2.25v-7.5a2.25 2.25 0 0 0-2.25-2.25h-.75m0-3-3-3m0 0-3 3m3-3v11.25m6-2.25h.75a2.25 2.25 0 0 1 2.25 2.25v7.5a2.25 2.25 0 0 1-2.25 2.25h-7.5a2.25 2.25 0 0 1-2.25-2.25v-.75" />
                    </svg>&nbsp;
                    <a class="text-gray-300 hover:text-white">University Collection</a>
                </li>
                <li class="flex items-center mb-2 cursor-pointer" @click="showDomainForms">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m5.231 13.481L15 17.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v16.5c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Zm3.75 11.625a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                    </svg>&nbsp;
                    <a class="text-gray-300 hover:text-white">Create Study Domain</a>
                </li>
                <li class="flex items-center ml-3 mb-2 cursor-pointer" @click="showDomainsCollection">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 7.5h-.75A2.25 2.25 0 0 0 4.5 9.75v7.5a2.25 2.25 0 0 0 2.25 2.25h7.5a2.25 2.25 0 0 0 2.25-2.25v-7.5a2.25 2.25 0 0 0-2.25-2.25h-.75m0-3-3-3m0 0-3 3m3-3v11.25m6-2.25h.75a2.25 2.25 0 0 1 2.25 2.25v7.5a2.25 2.25 0 0 1-2.25 2.25h-7.5a2.25 2.25 0 0 1-2.25-2.25v-.75" />
                    </svg>&nbsp;
                    <a class="text-gray-300 hover:text-white">Domain Collection</a>
                </li>
                <li class="flex items-center mb-2 cursor-pointer" @click="showCommentCollection">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                    </svg>

                    <a class="text-gray-300 hover:text-white">Manage Comment</a>
                </li>

                <!-- Ajoutez d'autres éléments de liste selon votre besoin -->
            </ul>
        </div>
        <!-- Formulaire au centre -->
        <div class="w-4/5 px-4">
            <FormToPersist v-if="showForm"></FormToPersist>
            <!-- Liste des universités -->
            <div class="flex flex-row justify-center px-4 py-8" v-if="showCollection">
                <div class="overflow-x-auto">
                    <h1 class="text-center font-bold">List of Universities</h1>
                    <table class="w-full">
                        <thead>
                        <tr class="bg-gray-700 text-white">
                            <th class="px-4 py-2 font-bold">Nom</th>
                            <th class="px-4 py-2 font-bold">Description</th>
                            <th class="px-4 py-2 font-bold">photo</th>
                            <th class="px-4 py-2 font-bold">Actions</th> <!-- Nouvelle colonne pour les actions -->
                        </tr>
                        </thead>
                        <tbody class="bg-transparent">
                        <tr v-for="university in universities" :key="university.id">
                            <td class="px-4 py-2 font-semibold text-white">{{university.nom}}</td>
                            <td class="px-4 py-2 font-semibold text-white">{{ university.descriptionGen }}</td>
                            <td class="px-4 py-2 font-semibold text-white">{{university.critereAdmission}}</td>
                            <td class="px-4 py-2">
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    Modifier
                                </button>
                                <button @click="deleteUniversity(university.id)" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-2">
                                    Supprimer
                                </button>
                            </td>
                        </tr>

                        <!-- Ajoutez d'autres lignes selon votre besoin -->
                        </tbody>
                    </table>
                </div>
            </div>
            <Domain v-if="showDomainform"></Domain>
            <CollectionDomain v-if="showDomainCollection"></CollectionDomain>
            <CommentCollection v-if="showCommentCollectionValue"></CommentCollection>
        </div>

    </section>

</template>

<style scoped>

</style>
