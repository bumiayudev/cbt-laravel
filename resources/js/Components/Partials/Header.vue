<script setup>
import Dropdown from '../Dropdown.vue';
import DropdownLink from '../DropdownLink.vue';

</script>

<template>
    <header class="bg-nav">
        <div class="flex justify-between">
            <div class="p-1 mx-3 inline-flex items-center">
                <i class="fas fa-bars pr-2 text-white"></i>
                <h1 class="text-white p-2">Logo</h1>
            </div>
            <div class="p-1 flex flex-row items-center">
                <div class="ms-3 relative">
                    <Dropdown>
                        <template #trigger>
                            <img class="inline-block h-8 w-8 rounded-full"
                                src="https://avatars0.githubusercontent.com/u/4323180?s=460&v=4" alt="">

                            <span class="inline-flex">
                                <button class="text-white p-2 no-underline hidden md:block lg:block border-none">
                                {{ $page.props.auth.user.name }}
                                </button>
                            </span>
                        </template>

                        <template #content>
                            <DropdownLink :href="route('profile.edit')"> Profile </DropdownLink>
                            <DropdownLink :href="route('logout')" method="post" as="button">
                                Log Out
                            </DropdownLink>
                        </template>
                    </Dropdown>
                </div>
            </div>
        </div>
    </header>
</template>