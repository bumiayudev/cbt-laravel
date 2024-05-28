<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <aside id="sidebar" class="bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block">

        <ul class="list-reset flex flex-col">
            <li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white">
                <Link :href="route('admin')"
                    class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline" :active="route().current('user.list')">
                    <i class="fas fa-tachometer-alt float-left mx-2"></i>
                    Dashboard
                    <span><i class="fas fa-angle-right float-right"></i></span>
                </Link>
            </li>
            <li class="w-full h-full py-3 px-2 border-b border-light-border">
                <Link :href="route('user.list')"
                    class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline" :active="route().current('user.list')">
                    <i class="fab fa-wpforms float-left mx-2"></i>
                    Users
                    <span><i class="fa fa-angle-right float-right"></i></span>
                </Link>
            </li>
            
        </ul>

    </aside>
</template>