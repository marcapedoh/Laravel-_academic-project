<script setup>

    function showDialog(){
        let dialog= document.getElementById('dialog');
        dialog.classList.remove('hidden');
        dialog.classList.add('flex');
        setTimeout(()=>{
            dialog.classList.add('opacity-100');

        },20);
    }

    function hideDialog(){
        let dialog= document.getElementById('dialog');
        dialog.classList.add('opacity-0');
        dialog.classList.remove('opacity-100');
        setTimeout(()=>{
            dialog.classList.add('hidden');
            dialog.classList.remove('flex');
        },500);
    }
</script>

<template>
    <button @click="showDialog" class="bg-white py-3 px-5 rounded text-gray-600 shadow-md">
        open Modal
    </button>
    <div id="dialog" class="bg-gray-50 dark:bg-gray-900 fixed left-0 top-0 bg-opacity-50 w-screen h-screen justify-center items-center opacity-0 hidden transition-opacity">
        <div @click="event.stopImmediatePropagation()" class="rounded shadow-md  w-[25%] flex dark:border dark:bg-gray-800 dark:border-gray-700 gap-5 flex-col overflow-hidden">
           <div class="flex p-8 gap-6 pb-0">
               <div class="bg-red-100 rounded-full text-red-600 min-w-[50px] h-[50px] flex items-center justify-center">
                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-950">
                       <path  stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                   </svg>
               </div>
               <div class="flex-grow">
                   <h1 class="text-white font-bold text-lg mb-2">Warning!</h1>
                   <p class="text-gray-400">Are you sure to desactive this account? your all data will be permanently removed</p>
               </div>
           </div>
            <div class="py-3 px-6 justify-end flex gap-4">
                <button @click="hideDialog" class="bg-gray-700 border-[1px] border-gray-600 rounded px-4 py-2 text-white cursor-pointer hover:bg-gray-400">Cancel</button>
                <button class="bg-red-700 rounded px-4 py-2 text-white cursor-pointer hover:bg-red-600">Desactive</button>
            </div>
        </div>
    </div>
</template>
