<script setup>
import ActionButton from '@/Components/ActionButton.vue';
import AdminLayout from '@/Layouts/AdminLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>

    <Head title="Users" />

    <AdminLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">List of users</h2>
        </template>

        <div class="m-6 flex flex-1 flex-col md:flex-row lg:flex-row mx-2">
            <div class="mb-4 rounded overflow-hidden shadow  w-full">
                <div class="px-6 py-2 border-b border-light-grey">
                    <div class="font-bold text-xl">List of users</div>
                </div>
                <ActionButton :href="route('user.list')"
                    class="text-black border-b-4 border-indigo-500 hover:text-green-600">
                    Tambah</ActionButton>
                <div class="flex flex-row-reverse">
                    <form @submit="" method="POST">
                        <input type="text" name="term" class="rounded-l-lg tex-gray-400"
                            placeholder="username, email..." autocomplete="off" />
                        <button class="float-right py-2 rounded-r-lg bg-gray-400 w-8">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                            </svg>
                        </button>
                    </form>
                </div>
                <!-- Start Table students -->
                <div class="table-responsive mt-6">
                    <table class="table text-grey-darkest table-auto border-b-4 border border-slate-500 w-full">
                        <thead class="bg-grey-dark text-white text-normal">
                            <tr>
                                <th class="border border-b-2 border-slate-600">Username</th>
                                <th class="border border-b-2 border-slate-600">Email</th>
                                <th class="border border-b-2 border-slate-600">Role</th>
                                <th class="border border-b-2 border-slate-600">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Mr.Bone</td>
                                <td>bone@sample.com</td>
                                <td>Guru</td>
                                <td>
                                    <ActionButton :href="route('user.list')"
                                        class="text-black border rounded-md border-indigo-500 hover:text-cyan-600 w-12">
                                        Edit
                                    </ActionButton>&nbsp;
                                    <ActionButton :href="route('user.list')"
                                        class="text-black  border rounded-md border-red-500 hover:text-red-600 w-12">
                                        Hapus
                                    </ActionButton>
                                </td>
                            </tr>
                            <tr>
                                <td>Mr.Oki Gustavo</td>
                                <td>o.gustavo@sample.com</td>
                                <td>Guru</td>
                                <td>
                                    <ActionButton :href="route('user.list')"
                                        class="text-black border rounded-md border-indigo-500 hover:text-cyan-600 w-12">
                                        Edit
                                    </ActionButton>&nbsp;
                                    <ActionButton :href="route('user.list')"
                                        class="text-black  border rounded-md border-red-500 hover:text-red-600 w-12">
                                        Hapus
                                    </ActionButton>
                                </td>
                            </tr>
                            <tr>
                                <td>Linda</td>
                                <td>linda@sample.com</td>
                                <td>Siswa</td>
                                <td>
                                    <ActionButton :href="route('user.list')"
                                        class="text-black border rounded-md border-indigo-500 hover:text-cyan-600 w-12">
                                        Edit
                                    </ActionButton>&nbsp;
                                    <ActionButton :href="route('user.list')"
                                        class="text-black  border rounded-md border-red-500 hover:text-red-600 w-12">
                                        Hapus
                                    </ActionButton>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- End table students -->
            </div>
        </div>

    </AdminLayout>
</template>
