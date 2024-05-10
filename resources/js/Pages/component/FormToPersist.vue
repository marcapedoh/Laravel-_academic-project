<script setup>
    import {useForm} from "@inertiajs/inertia-vue3";
    import Swal from 'sweetalert2';
    const form=useForm({
        nom:"",
        descriptionGen:"",
        critereAdmission:"",
        photo: null
    });
    const saveUniversity= ()=>{
        form.post("/universities",{
            onSuccess: (page)=>{
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: 'University added successfully!'
                });
            },
            onError:(errors)=>{
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: "Alert,there's an error !"
                });

            }
        })
    }
    const previewImage=(event)=>{
        if(event.target.files.length>0){
            form.photo=event.target.files[0];
        }
    }
</script>

<template>
    <div class="flex flex-col items-center mt-8 px-6 py-8 md:h-screen lg:py-0 mb-8">
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <form @submit.prevent="saveUniversity" id="formulaire" class="space-y-4 md:space-y-6"  method="post">
                    <div>
                        <label for="nom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">University Name</label>
                        <input type="text" name="nom" v-model="form.nom" :class="{'is_valid': form.errors.nom}" id="nom" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="DeMCollege" required="">
                        <span v-if="form.errors.nom" class="text-red-500 text-sm">{{form.errors.nom}}</span>
                    </div>
                    <div>
                        <label for="photo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">university picture</label>
                        <input type="file" name="photo" @input="previewImage($event)" accept="image/*"  id="nom" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                    </div>
                    <div>
                        <label for="descriptionGen" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <input type="textarea" name="descriptionGen" v-model="form.descriptionGen" :class="{'is_valid': form.errors.descriptionGen}"  id="descriptionGen" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="we are institution offering comprehensive programs in computer science, information technology, and mathematics, equipping students with the skills and knowledge needed for careers in technology and research." required="">
                        <span v-if="form.errors.descriptionGen" class="text-red-500 text-sm">{{form.errors.descriptionGen}}</span>
                    </div>
                    <div>
                        <label for="criteria" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Admission Criteria</label>
                        <input type="textarea" name="critereAdmission" v-model="form.critereAdmission" id="criteria" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Admission criteria typically include academic performance, standardized test scores, letters of recommendation, and sometimes interviews or portfolios, ensuring that prospective students meet the necessary qualifications for their chosen program of study." required="">
                    </div>

                    <button form="formulaire" type="submit" class="w-full text-white flex items-center justify-center bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
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
