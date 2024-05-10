
<template>
    <body class="bg-gray-50 dark:bg-gray-900 text-white font-body">
    <!-- Navbar Section -->
    <NavLanding></NavLanding>

    <!-- Hero Section -->
    <div class="main text-white">
        <div class="container mx-auto py-24 px-6">
            <div class="text-center">
                <h1 class="text-5xl font-bold mb-4">Universities</h1>
                <h2 class="text-4xl font-bold mb-4">Application</h2>
                <p class="text-xl font-semibold mb-8">See All information about a lot of universities in your domain</p>
                <Link href="/home" class="bg-primary-600 hover:bg-primary-600 text-white font-semibold px-6 py-3 rounded">Get Started !</Link>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <div class="services text-white py-24">
        <div class="container mx-auto px-6">
            <h1 class="text-5xl font-bold text-center mb-12">To see what services we delivery click on Get Sarted button</h1>

        </div>
    </div>

    <FooterLand></FooterLand>


    </body>
</template>
<script setup>
    import {Link} from "@inertiajs/vue3";
    import NavLanding from "@/Pages/component/NavLanding.vue";
    import FooterLand from "@/Pages/component/FooterLand.vue";
</script>
