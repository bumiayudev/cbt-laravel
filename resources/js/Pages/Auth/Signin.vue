<script setup>
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import AuthLayout from '@/Layouts/AuthLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <AuthLayout>

        <Head title="Log in" />

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit" class="max-w-xl m-4 p-10 bg-white rounded shadow-xl">
            <p class="text-gray-800 font-medium text-center text-lg font-bold">Login</p>
            <div class="">
                <label class="block text-sm text-gray-00" for="email">Email</label>
                <input v-model="form.email" class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="email" name="email"
                    type="email"  placeholder="Email" aria-label="email" autocomplete="off">
                    <InputError class="mt-2" :message="form.errors.email" />
            </div>
            <div class="mt-2">
                <label class="block text-sm text-gray-600" for="password">Password</label>
                <input v-model="form.password" class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="password" name="password"
                    type="password" placeholder="*******" aria-label="password" autocomplete="off">
                    <InputError class="mt-2" :message="form.errors.password" />
            </div>
            <div class="mt-4 items-center justify-between">
                <PrimaryButton class="px-4 py-1" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Log in
                </PrimaryButton>
                <!-- <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"
                    type="submit">Login</button> -->
                    <Link
                    v-if="canResetPassword"
                    :href="route('password.request')"
                    class="inline-block right-0 align-baseline  font-bold text-sm text-500 hover:text-blue-800"
                >
                    Forgot your password?
                </Link>
            </div>
            <a class="inline-block right-0 align-baseline font-bold text-sm text-500 hover:text-blue-800" href="#">
                Not registered ?
            </a>
        </form>
    </AuthLayout>
</template>