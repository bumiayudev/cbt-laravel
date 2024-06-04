<script setup>
import { Link, usePage } from '@inertiajs/vue3';
import { computed } from 'vue';
const page = usePage();
let role = computed(() => page.props.auth.user.role);
</script>

<template>
    <aside id="sidebar" class="bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block">

        <ul v-if="role === 'super admin'" class="list-reset flex flex-col">
            <li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white">

                <Link :href="route('admin')"
                    class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline"
                    :active="route().current('admin')">
                <i class="fas fa-tachometer-alt float-left mx-2"></i>
                Dashboard
                <span><i class="fas fa-angle-right float-right"></i></span>
                </Link>

            </li>
            <li class="w-full h-full py-3 px-2 border-b border-light-border">
                <Link class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                <i class="fab fa-wpforms float-left mx-2"></i>
                Mata pelajaran
                <span><i class="fa fa-angle-right float-right"></i></span>
                </Link>
            </li>
            <li class="w-full h-full py-3 px-2 border-b border-light-border">
                <Link class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                <i class="fab fa-wpforms float-left mx-2"></i>
                Kelas
                <span><i class="fa fa-angle-right float-right"></i></span>
                </Link>
            </li>
            <li v class="w-full h-full py-3 px-2 border-b border-light-border">
                <Link :href="route('student.list')"
                    class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline"
                    :active="route().current('student.list')">
                <i class="fab fa-wpforms float-left mx-2"></i>
                Siswa
                <span><i class="fa fa-angle-right float-right"></i></span>
                </Link>

            </li>
            <li class="w-full h-full py-3 px-2 border-b border-light-border">
                <Link class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                <i class="fab fa-wpforms float-left mx-2"></i>
                Ujian
                <span><i class="fa fa-angle-right float-right"></i></span>
                </Link>
            </li>
            <li class="w-full h-full py-3 px-2 border-b border-light-border">
                <Link class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                <i class="fab fa-wpforms float-left mx-2"></i>
                Sesi Ujian
                <span><i class="fa fa-angle-right float-right"></i></span>
                </Link>
            </li>
            <li class="w-full h-full py-3 px-2 border-b border-light-border">
                <Link class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                <i class="fab fa-wpforms float-left mx-2"></i>
                Laporan
                <span><i class="fa fa-angle-right float-right"></i></span>
                </Link>
            </li>
        </ul>
        <ul v-else class="list-reset flex flex-col">
            <Link :href="route('dashboard')"
                class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline"
                :active="route().current('dashboard')">
            <i class="fas fa-tachometer-alt float-left mx-2"></i>
            Dashboard
            <span><i class="fas fa-angle-right float-right"></i></span>
            </Link>
        </ul>

    </aside>
</template>