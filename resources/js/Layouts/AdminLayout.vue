<script setup>
import Footer from '@/Components/Partials/Footer.vue';
import Header from '@/Components/Partials/Header.vue';
import Sidebar from '@/Components/Partials/Sidebar.vue';
import '../../css/style.css';
</script>
<template>
    <!--Container -->
    <div class="mx-auto bg-grey-400">
        <!--Screen-->
        <div class="min-h-screen flex flex-col">
            <!--Header Section Starts Here-->
            <Header />
            <!--/Header-->

            <div class="flex flex-1">
                <!--Sidebar-->
                <Sidebar />
                <!--/Sidebar-->
                <!--Main-->
                <main class="bg-white-300 flex-1 p-3 overflow-hidden">
                    <slot />
                </main>
                <!--/Main-->
            </div>
            <!--Footer-->
            <Footer />
            <!--/footer-->

        </div>

    </div>
</template>
